<?php

/*
Class User Model
Created By Reze Nur Rochmat
Code Igniter 3.1.6
All Right Reserved
*/

class User_Model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function data($number,$offset){
		$this->db->select('*');
		return $query = $this->db->get('users',$number,$offset)->result();		
	}
 
	public function jumlah_data(){
		$this->db->select('*');
		return $this->db->get('users')->num_rows();
	}

	public function addUser(){
		$username 	= $this->input->post('username',TRUE);
		$password 	= $this->input->post('password',TRUE);
		$level 		= $this->input->post('level',TRUE);

		$data = array(
			'username' 	=> $username,
			'password' 	=> sha1($password),
			'level' 	=> $level
		);

		$this->db->insert('users',$data);

	}

	public function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function delete($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}