<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('user_model');
        $this->load->helper('url');
    }
    public function index()
	{
		$data['user'] = $this->user_model->getAll()->result();
        $this->load->view('list_user', $data);
    }

    function tambah(){
		$this->load->view('input');
    }
    
    function tambah_aksi(){
		$nama_lengkap = $this->input->post('nama_lengkap');
		$username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
 
		$data = array(
			'nama_lengkap' => $nama_lengkap,
			'username' => $username,
            'password' => $password,
            'email' => $email,
			);
		$this->user_model->input_data($data,'users');
		redirect('user/index');
    }
    
    function hapus($id){
		$where = array('id' => $id);
		$this->user_model->hapus_data($where,'users');
		redirect('user/index');
    }
    
    function edit($id){
        $where = array('id' => $id);
        $data['user'] = $this->user_model->edit_data($where,'users')->result();
        $this->load->view('edit_user',$data);
    }

    function update(){
        $id = $this->input->post('id');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
     
        $data = array(
            'id' => $id,
            'nama_lengkap' => $nama_lengkap,
			'username' => $username,
            'password' => $password,
            'email' => $email,
        );
     
        $where = array(
            'id' => $id
        );
     
        $this->user_model->update_data($where,$data,'users');
        redirect('user/index');
    }
}