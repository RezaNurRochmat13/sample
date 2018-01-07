<?php

/*
Class Pemeriksaan Model
Created By Reze Nur Rochmat
Code Igniter 3.1.6
All Right Reserved
*/

class Pemeriksaan_Model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function data($number,$offset){
		$this->db->select('*');
		$this->db->join('tbl_plg','tbl_plg.idpel=tbl_pemeriksaan.idpel','left');
		return $query = $this->db->get('tbl_pemeriksaan',$number,$offset)->result();		
	}
 
	public function jumlah_data(){
		$this->db->select('*');
		$this->db->join('tbl_plg','tbl_plg.idpel=tbl_pemeriksaan.idpel','left');
		return $this->db->get('tbl_pemeriksaan')->num_rows();
	}

	public function getPelanggan(){
		$this->db->select('*');
		$query = $this->db->get('tbl_plg');
		return $query->result();
	}

	public function addUser(){
		$idpel 			= $this->input->post('idpel',TRUE);
		$erormeter 		= $this->input->post('erormeter',TRUE);
		$erorR 			= $this->input->post('erorR',TRUE);
		$erorS 			= $this->input->post('erorS',TRUE);
		$erorT 			= $this->input->post('erorT',TRUE);
		$jenisCT		= $this->input->post('jenisCT',TRUE);
		$arusCT 		= $this->input->post('arusCT',TRUE);
		$rasioCT 		= $this->input->post('rasioCT',TRUE);
		$segelkwh 		= $this->input->post('segelkwh',TRUE);
		$segelterminal 	= $this->input->post('segelterminal',TRUE);
		$segelboxapp 	= $this->input->post('segelboxapp',TRUE);
		$segelgardu		= $this->input->post('segelgardu',TRUE);
		$segelpembatas 	= $this->input->post('segelpembatas',TRUE);
		$tglperiksa 	= $this->input->post('tglperiksa',TRUE);
		$keterangan 	= $this->input->post('keterangan',TRUE);
		$petugas 		= $this->input->post('petugas',TRUE);
		$ba 			= $this->input->post('ba',TRUE);

		$data = array(
			'idpel' 		=> $idpel,
			'erormeter' 	=> $erormeter,
			'erorR' 		=> $erorR,
			'erorS'			=> $erorS,
			'erorT'			=> $erorT,
			'jenisCT' 		=> $jenisCT,
			'arusCT' 		=> $arusCT,
			'rasioCT'		=> $rasioCT,
			'segelkwh' 		=> $segelkwh,
			'segelterminal'	=> $segelterminal,
			'segelboxapp'	=> $segelboxapp,
			'segelgardu' 	=> $segelgardu,
			'segelpembatas'	=> $segelpembatas,
			'tglperiksa' 	=> date("Y-m-d",strtotime($tglperiksa)),
			'keterangan' 	=> $keterangan,
			'petugas' 		=> $petugas,
			'ba'			=> $ba,
			'created_at' 	=> date("Y-m-d")

		);

		$this->db->insert('tbl_pemeriksaan',$data);

	}

	public function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	$this->db->join('tbl_plg','tbl_plg.idpel=tbl_pemeriksaan.idpel','left');
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