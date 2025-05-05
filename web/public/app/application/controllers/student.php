<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library(['form_validation', 'session']);
        $this->load->helper('url'); 
        $this->load->model('User_model');
        //$this->load->model('Jurusan_model');
    }

    public function index(){
        if (!$this->session->userdata('iduser')) {
            redirect('login');
        }
        
        $data = [
            'title' => 'Student Management',
            'active_menu' => 'students',
            'content' => 'datasiswa/index',
            'getsiswa' => $this->User_model->ambil_data(),
            //'data_jurusan' => $this->Jurusan_model->ambil_jurusan()
        ];
        
        $this->load->view('template', $data);
    }
}