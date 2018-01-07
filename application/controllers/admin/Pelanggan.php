<?php

/*
Class Admin Pelanggan
Created by Reza Nur Rochmat
Code Igniter 3.1.6
All Right Reserved

*/

class Pelanggan extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Pelanggan_Model');
	}

	public function index(){
		$jumlah_data = $this->Pelanggan_Model->jumlah_data();
	    $config['base_url'] = base_url().'index.php/admin/Pelanggan/index/';
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
	    $data['pelanggan'] = $this->Pelanggan_Model->data($config['per_page'],$from);

		$this->load->view('include/header');
		$this->load->view('admin/pelanggan/content_pelanggan',$data);
		$this->load->view('include/footer');
	}
}