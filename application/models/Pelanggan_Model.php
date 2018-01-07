<?php

/*
Class Pelanggan Model
Created By Reze Nur Rochmat
Code Igniter 3.1.6
All Right Reserved
*/

class Pelanggan_Model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function data($number,$offset){
		$this->db->select('*');
		return $query = $this->db->get('tbl_plg',$number,$offset)->result();		
	}
 
	public function jumlah_data(){
		$this->db->select('*');
		return $this->db->get('tbl_plg')->num_rows();
	}
}