<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library(['form_validation', 'session']);
        $this->load->helper('url'); 
        $this->load->model('Subject_model');
    }

    public function index(){
    $data = [
        'title' => 'DataSubject',
        'active_menu' => 'subject',
        'content' => 'subject/index',
        'getsubject' => $this->Subject_model->ambil_data()
    ];
    
    $this->load->view('template', $data);
    }

    public function TambahData(){
        $data = [
            'title' => 'DataSubject',
            'active_menu' => 'subject',
            'content' => 'subject/tambahdata',
            
        ];
        
        $this->load->view('template', $data);
    }

    public function save() {
        $subject = $this->input->post('name');
        $Datainsert = array(
            'name' => $subject
        );
    
        $proses = $this->Subject_model->insert_subject($Datainsert);
    
        if ($proses) {
            $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
            redirect(base_url('Subject'));
        } else {
            $this->session->set_flashdata('error', 'Data gagal ditambahkan');
            redirect(base_url('Subject'));
        }
    }

    public function delete($id){
        

        $this->db->delete('subject',['id'=>$id]);

    
        redirect(base_url('Subject'));
    }
    
}