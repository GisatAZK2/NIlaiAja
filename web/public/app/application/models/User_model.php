<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    private $_table = "users";

    public function ambil_data(){
        $this->db->select('users.*, jurusan.nama_jurusan');
        $this->db->from($this->_table);
        $this->db->join('jurusan', 'jurusan.id_jurusan = users.id_jurusan', 'left');
        return $this->db->get()->result_array();
    }

    public function login($user, $pass){
        $this->db->where('name', $user);
        $this->db->where('password', $pass);
        return $this->db->get($this->_table)->num_rows();
    }
    

    public function get_all_users()
    {
        return $this->db->get('users')->result();
    }

    public function get_user_by_id($id)
    {
        return $this->db->where('id', $id)->get('users')->row();
    }

    public function insert_user($data)
    {
        $this->db->insert('users', $data);
        return $this->db->insert_id();
    }

    public function insert_session($session_data)
    {
        $this->db->insert('sessions', $session_data);
        return $this->db->insert_id();
    }

    public function update_session($session_id, $user_id)
    {
        $this->db->where('session_id', $session_id)->update('sessions', ['user_id' => $user_id]);
    }

    public function get_session($session_id)
    {
        return $this->db->where('session_id', $session_id)->get('sessions')->row();
    }

    public function delete_session($session_id)
    {
        $this->db->where('session_id', $session_id)->delete('sessions');
    }
}
