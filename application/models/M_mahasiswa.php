<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class M_mahasiswa extends CI_Model{
    
    public function data_mahasiswa(){
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }
    public function insert($data) {
        $this->db->insert('mahasiswa', $data);
    }

    public function get_by_id($id) {
        return $this->db->get_where('mahasiswa', array('id' => $id))->row();
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('mahasiswa', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
    }

}

?>