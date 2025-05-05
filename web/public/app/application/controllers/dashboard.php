<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library(['form_validation', 'session']);
        $this->load->helper('url'); 
        $this->load->model('User_model');
    }

    public function index(){
        if (!$this->session->userdata('iduser')) {
            redirect('login');
        }
        
        $iduser = $this->session->userdata('iduser');
        $user = $this->User_model->getbyid($iduser);
        $total_user = $this->User_model->total_user();
        
        $data = [
            'title' => 'Dashboard',
            'active_menu' => 'dashboard',
            'content' => 'dashboard/index',
            'user' => $user,
            'total_user' => $this->User_model->total_user()
        ];
        
        $this->load->view('template', $data);
    }
}