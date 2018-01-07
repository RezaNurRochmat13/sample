<?php

/*
Class Pemeriksaan
Created by Reza Nur Rochmat
Code Igniter 3.1.6
All Right Reserved

*/

class Pemeriksaan extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Pemeriksaan_Model');
	}

	public function index(){
		$jumlah_data = $this->Pemeriksaan_Model->jumlah_data();
	    $config['base_url'] = base_url().'index.php/admin/Pemeriksaan/index/';
	    $config['total_rows'] = $jumlah_data;
	    $config['per_page'] = 2;
	    $from = $this->uri->segment(4);
	    //Konfigurasi pagination bootrap
	    $config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['first_link'] = true;
	    $config['last_link'] = true;
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['prev_link'] = '&laquo';
	    $config['prev_tag_open'] = '<li class="prev">';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_link'] = '&raquo';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><a href="#">';
	    $config['cur_tag_close'] = '</a></li>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
	    $this->pagination->initialize($config);   
	    $data['pemeriksaan'] = $this->Pemeriksaan_Model->data($config['per_page'],$from);

		$this->load->view('include/header');
		$this->load->view('admin/pemeriksaan/content_pemeriksaan',$data);
		$this->load->view('include/footer');
	}

	public function addPemeriksaan(){
		$this->form_validation->set_rules('idpel','ID Pelanggan','required|trim|xss_clean');
		$this->form_validation->set_rules('erormeter','Error Meter','required|trim|xss_clean');
		$this->form_validation->set_rules('erorR','Error R','required|trim|xss_clean');
		$this->form_validation->set_rules('erorS','Error S','required|trim|xss_clean');
		$this->form_validation->set_rules('erorT','Error T','required|trim|xss_clean');
		$this->form_validation->set_rules('jenisCT','Jenis CT','required|trim|xss_clean');
		$this->form_validation->set_rules('arusCT','Arus CT','required|trim|xss_clean');
		$this->form_validation->set_rules('rasioCT','Rasio CT','required|trim|xss_clean');
		$this->form_validation->set_rules('segelkwh','Segel KWH','required|trim|xss_clean');
		$this->form_validation->set_rules('segelterminal','Segel Terminal','required|trim|xss_clean');
		$this->form_validation->set_rules('segelboxapp','Segel Box App','required|trim|xss_clean');
		$this->form_validation->set_rules('segelgardu','Segel Gardu','required|trim|xss_clean');
		$this->form_validation->set_rules('segelpembatas','Segel Pembatas','required|trim|xss_clean');
		$this->form_validation->set_rules('tglperiksa','Tanggal Periksa','required|trim|xss_clean');
		$this->form_validation->set_rules('keterangan','Keterangan','required|trim|xss_clean');
		$this->form_validation->set_rules('petugas','Petugas','required|trim|xss_clean');
		$this->form_validation->set_rules('ba','BA','required|trim|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			$data['pelanggan'] = $this->Pemeriksaan_Model->getPelanggan();
			$this->load->view('include/header');
			$this->load->view('admin/pemeriksaan/add_pemeriksaan_form', $data);
			$this->load->view('include/footer');
			}
			else{
				$this->Pemeriksaan_Model->addUser();
				echo "<script>
		    window.alert('Data inserted successfully');
		    window.location.href='index';
		    </script>";

			}
		}

	public function edit($kode){
		$where = array('idkomisioning' => $kode);
		$data['edit'] = $this->Pemeriksaan_Model->edit_data($where,'tbl_pemeriksaan')->result();
		$data['pelanggan'] = $this->Pemeriksaan_Model->getPelanggan();
		$this->load->view('include/header');
		$this->load->view('admin/pemeriksaan/edit_pemeriksaan_form', $data);
		$this->load->view('include/footer');
	}

	public function show($kode){
		$where = array('idkomisioning' => $kode);
		$data['show'] = $this->Pemeriksaan_Model->edit_data($where,'tbl_pemeriksaan')->result();
		$data['pelanggan'] = $this->Pemeriksaan_Model->getPelanggan();
		$this->load->view('include/header');
		$this->load->view('admin/pemeriksaan/show_pemeriksaan', $data);
		$this->load->view('include/footer');
	}

	public function update(){
		$this->form_validation->set_rules('idpel','ID Pelanggan','required|trim|xss_clean');
		$this->form_validation->set_rules('erormeter','Error Meter','required|trim|xss_clean');
		$this->form_validation->set_rules('erorR','Error R','required|trim|xss_clean');
		$this->form_validation->set_rules('erorS','Error S','required|trim|xss_clean');
		$this->form_validation->set_rules('erorT','Error T','required|trim|xss_clean');
		$this->form_validation->set_rules('jenisCT','Jenis CT','required|trim|xss_clean');
		$this->form_validation->set_rules('arusCT','Arus CT','required|trim|xss_clean');
		$this->form_validation->set_rules('rasioCT','Rasio CT','required|trim|xss_clean');
		$this->form_validation->set_rules('segelkwh','Segel KWH','required|trim|xss_clean');
		$this->form_validation->set_rules('segelterminal','Segel Terminal','required|trim|xss_clean');
		$this->form_validation->set_rules('segelboxapp','Segel Box App','required|trim|xss_clean');
		$this->form_validation->set_rules('segelgardu','Segel Gardu','required|trim|xss_clean');
		$this->form_validation->set_rules('segelpembatas','Segel Pembatas','required|trim|xss_clean');
		$this->form_validation->set_rules('tglperiksa','Tanggal Periksa','required|trim|xss_clean');
		$this->form_validation->set_rules('keterangan','Keterangan','required|trim|xss_clean');
		$this->form_validation->set_rules('petugas','Petugas','required|trim|xss_clean');
		$this->form_validation->set_rules('ba','BA','required|trim|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			$data['pelanggan'] = $this->Pemeriksaan_Model->getPelanggan();
			$this->load->view('include/header');
			$this->load->view('admin/pemeriksaan/edit_pemeriksaan_form', $data);
			$this->load->view('include/footer');
			}
			else{
				$idkomisioning 	= $this->input->post('idkomisioning',TRUE); 
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

				$where = array(
					'idkomisioning' => $idkomisioning
					);
				$this->Pemeriksaan_Model->update_data($where,$data,'tbl_pemeriksaan');
				echo "<script>
				    window.alert('Data successfully updated');
				    window.location.href='index';
				    </script>";

			}
		
	}
	public function delete($id){
		$where = array('idkomisioning' => $id);
		$this->Pemeriksaan_Model->delete($where,'tbl_pemeriksaan');
		$msg2 = "<div class='alert alert-danger'> Data successfully deleted </div>";
        $this->session->set_flashdata("msg2", $msg2); 
		redirect('admin/Pemeriksaan/index');
	}
}