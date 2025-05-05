<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library(['form_validation', 'session']);
        $this->load->helper('url');
        $this->load->model('User_model');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login/index');
        } else {
            $this->proses_login();
        }
    }

    public function proses_login()
{
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    // Ambil user berdasarkan username dan role admin
    $user = $this->User_model->login($username);

    if ($user && password_verify($password, $user->password)) {
        $this->session->set_userdata(['iduser' => $user->id]);
        redirect('dashboard');
    } else {
        $this->session->set_flashdata('login_error', 'Username, Password, atau Role salah!');
        redirect('login');
    }
}

    public function logout(){
        $this->session->unset_userdata('iduser');
        redirect('login');
    }
}
