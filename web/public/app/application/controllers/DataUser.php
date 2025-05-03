<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataUser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(['form_validation', 'session']);
        $this->load->helper('url');
        $this->load->model('User_model');

        // Set JSON response header
        header('Content-Type: application/json');
    }

    public function index(...$segments)
    {
        $method = $_SERVER['REQUEST_METHOD'];

        // / (root)
        if (empty($segments)) {
            return $method === 'GET' ? $this->get_users() :
                   ($method === 'POST' ? $this->create_user() : $this->method_not_allowed());
        }

        // /session
        if ($segments[0] === 'session') {
            if (count($segments) === 1 && $method === 'POST') {
                return $this->guest_session();
            }

            if (isset($segments[1])) {
                $id = $segments[1];

                if (count($segments) === 2) {
                    return $method === 'GET' ? $this->get_session($id) :
                           ($method === 'DELETE' ? $this->delete_session($id) : $this->method_not_allowed());
                }

                if (count($segments) === 3 && $segments[2] === 'link_user' && $method === 'PUT') {
                    return $this->link_user_to_session($id);
                }
            }
        }

        return $this->method_not_allowed();
    }

    private function get_users()
    {
        $users = $this->User_model->get_all_users();
        echo json_encode($users);
    }

    private function create_user()
    {
        $data = json_decode(file_get_contents('php://input'), true);
        if (!$data || !isset($data['name'])) {
            http_response_code(400);
            echo json_encode(['error' => 'Invalid input']);
            return;
        }

        $id = $this->User_model->insert_user($data);
        echo json_encode(['message' => 'User created', 'user_id' => $id]);
    }

    private function guest_session()
    {
        $session_id = uniqid('sess_', true);
        $session_data = [
            'session_id' => $session_id,
            'created_at' => date('Y-m-d H:i:s')
        ];

        $this->User_model->insert_session($session_data);
        echo json_encode(['session_id' => $session_id]);
    }

    private function get_session($id)
    {
        $session = $this->User_model->get_session($id);
        if ($session) {
            echo json_encode($session);
        } else {
            http_response_code(404);
            echo json_encode(['error' => 'Session not found']);
        }
    }

    private function delete_session($id)
    {
        $this->User_model->delete_session($id);
        echo json_encode(['message' => 'Session deleted']);
    }

    private function link_user_to_session($id)
    {
        $data = json_decode(file_get_contents('php://input'), true);
        if (!isset($data['user_id'])) {
            http_response_code(400);
            echo json_encode(['error' => 'Missing user_id']);
            return;
        }

        $this->User_model->update_session($id, $data['user_id']);
        echo json_encode(['message' => 'User linked to session']);
    }

    private function method_not_allowed()
    {
        http_response_code(405);
        echo json_encode(['error' => 'Method Not Allowed']);
    }
}
