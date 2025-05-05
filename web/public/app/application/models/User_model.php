<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    private $_table = "users";

    public function ambil_data(){
        return $this->db->get($this->_table)->result_array();
    }

    public function login($user)
    {
        $this->db->where('name', $user);
        $this->db->where('role', 'admin');
        return $this->db->get($this->_table)->row();
    }

    public function getbyid($iduser){
        return $this->db->get_where($this->_table, ['id' => $iduser])->result();
    }

    public function total_user() {
        return $this->db->count_all($this->_table);
    }

    public function get_all_users() {
        return $this->db->get($this->_table)->result();
    }

    public function get_user_by_id($id) {
        return $this->db->where('id', $id)->get($this->_table)->row();
    }

    public function insert_user($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        $this->db->insert($this->_table, $data);
        return $this->db->insert_id();
    }

    public function insert_session($session_data)
    {
        $this->db->insert('guest_sessions', $session_data);
        return $this->db->insert_id();
    }

    public function update_session($session_id, $user_id)
    {
        $this->db->where('session_id', $session_id)->update('guest_sessions', ['user_id' => $user_id]);
    }

    public function update_session_full($session_id, $data)
    {
        $this->db->where('session_id', $session_id)->update('guest_sessions', $data);
    }

    public function get_session($session_id)
    {
        return $this->db->where('session_id', $session_id)->get('guest_sessions')->row();
    }

    public function delete_session($session_id)
    {
        $this->db->where('session_id', $session_id)->delete('guest_sessions');
    }
}
