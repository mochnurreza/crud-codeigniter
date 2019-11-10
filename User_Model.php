<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class User_model extends CI_Model {
    // private $_table = "users";

    // public $id;
    // public $nama_lengkap;
    // public $username;
    // public $password;
    // public $email;

    // public function getAll()
    // {
    //     return $this->db->get($this->_table)->result();
    // }
    
    // public function getById($id)
    // {
    //     return $this->db->get_where($this->_table, ["id" => $id])->row();
    // }

    // public function save()
    // {
    //     $post = $this->input->post();
    //     $this->nama_lengkap = $post["nama_lengkap"];
    //     $this->username = $post["username"];
    //     $this->password = $post["password"];
    //     $this->email = $post["email"];
    //     $this->db->insert($this->_table, $this);
    // }

    // public function update()
    // {
    //     $post = $this->input->post();
    //     $this->id = $post["id"];
    //     $this->nama_lengkap = $post["nama_lengkap"];
    //     $this->username = $post["username"];
    //     $this->password = $post["password"];
    //     $this->email = $post["email"];
    //     $this->db->update($this->_table, $this, array('product_id' => $post['id']));
    // }

    // public function delete($id)
    // {
    //     return $this->db->delete($this->_table, array("product_id" => $id));
    // }
    
    function getAll(){
		return $this->db->get('users');
    }

    function input_data($data,$table){
		$this->db->insert($table,$data);
    }
    
    function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
    }
    
    function edit_data($where,$table){		
        return $this->db->get_where($table,$where);
    }

    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

}