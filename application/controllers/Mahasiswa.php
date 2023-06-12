<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
            $this->load->model('M_mahasiswa');
        }
        
    public function index(){
        $data['nama_mahasiswa']= 'Gema Antika Hariadi';
        $data['dosen'] = array(
            array(
                'niy' => '60110648',
                'nama' => 'Herman Yuliansyah',
                'alamat' => 'Jogjakarta'
            ),
            array(
                'niy' => '60110647',
                'nama' => 'Fiftin Noviyanto',
                'alamat' => 'Sleman'
            ),
            array(
                'niy' => '60110649',
                'nama' => 'Supriyanto',
                'alamat' => 'Jogja'
            ),
        );
        $data['data_mahasiswa'] = $this->M_mahasiswa->data_mahasiswa();
        $this->load->view('view_mahasiswa.php', $data);
    }
    public function store() {
        $data = array(
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat')
        );
        $this->M_mahasiswa->insert($data);
        redirect('mahasiswa');
    }
    public function edit($id){
        $data['mahasiswa'] = $this->M_mahasiswa->get_by_id($id);
        $this->load->view('edit_mahasiswa.php', $data);
    }

    public function update($id){
        $data = array(
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat')
        );
        $this->M_mahasiswa->update($id, $data);
        redirect('mahasiswa');
    }
    public function delete($id) {
        $this->M_mahasiswa->delete($id);
        redirect('mahasiswa');
    }
}
 ?>