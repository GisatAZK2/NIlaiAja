<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject_model extends CI_Model {
    private $_table = "subject";

    // Ambil semua data subject
    public function ambil_data(){
        return $this->db->get($this->_table)->result_array();
    }

    // Ambil subject berdasarkan ID
    public function get_by_id($id){
        return $this->db->get_where($this->_table, ['id' => $id])->row_array();
    }

    // Tambah subject baru
    public function insert_subject($Datainsert){
        $this->db->insert($this->_table, $Datainsert);
        return $this->db->insert_id();
    }

    // Update subject berdasarkan ID
    public function update_subject($id, $data){
        $this->db->where('id', $id);
        return $this->db->update($this->_table, $data);
    }

    
    
}
