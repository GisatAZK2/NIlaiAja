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

        $ceklogin = $this->User_model->Login($username, $password);

        if ($ceklogin > 0) {
            $user = $this->db->get_where('users',['name'=>$username,'password'=>$password])->row_array();
            $datalogin=['iduser'=>$user['id']];
            $this->session->set_userdata($datalogin);
            redirect('dashboard');
        } else {
            echo "<h4 style='text-align: center; color: red;'>Login Gagal: Username atau Password salah</h4>";
        }
    }

    public function logout(){
        $this->session->unset_userdata('iduser');
        redirect('login');
    }

   
}
