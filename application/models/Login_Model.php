<?php
/*
Class Login Model
Created By Reza Nur Rochmat
Code Igniter 3.1.6
All Right Reserved
*/
class Login_Model extends CI_Model{	

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
}