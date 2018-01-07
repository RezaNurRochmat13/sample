<?php

/*
Class Admin Home
Created by Reza Nur Rochmat
Code Igniter 3.1.6
All Right Reserved

*/

class Admin_Home extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('User_Model');
	}

	public function index(){
		$jumlah_data = $this->User_Model->jumlah_data();
	    $config['base_url'] = base_url().'index.php/admin/Admin_Home/index/';
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
	    $data['user'] = $this->User_Model->data($config['per_page'],$from);

		$this->load->view('include/header');
		$this->load->view('admin/content_home',$data);
		$this->load->view('include/footer');
	}

	public function addUser(){
		$this->form_validation->set_rules('username','Username','required|trim|xss_clean');
		$this->form_validation->set_rules('password','Password','required|trim|xss_clean');
		$this->form_validation->set_rules('level','Level User','required|trim|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('include/header');
			$this->load->view('admin/add_user_form');
			$this->load->view('include/footer');
			}
			else{
				$this->User_Model->addUser();
				echo "<script>
		    window.alert('Data inserted successfully');
		    window.location.href='index';
		    </script>";

			}
		}

	public function edit($kode){
		$where = array('id_users' => $kode);
		$data['edit'] = $this->User_Model->edit_data($where,'users')->result();

		$this->load->view('include/header');
		$this->load->view('admin/edit_user_form', $data);
		$this->load->view('include/footer');
	}
	public function update(){
		$id_users 			= $this->input->post('id_users');
		$username 		= $this->input->post('username');
		$password 		= $this->input->post('password');
		$level 			= $this->input->post('level');

		$data = array(
			'username' 	=> $username,
			'password'	=> sha1($password),
			'level'		=> $level

		);
		$where = array(
			'id_users' => $id_users
			);
		$this->User_Model->update_data($where,$data,'users');
		echo "<script>
		    window.alert('Data successfully updated');
		    window.location.href='index';
		    </script>";
	}
	public function delete($id){
		$where = array('id_users' => $id);
		$this->User_Model->delete($where,'users');
		$msg2 = "<div class='alert alert-danger'> Data successfully deleted </div>";
        $this->session->set_flashdata("msg2", $msg2); 
		redirect('admin/Admin_Home/index');
	}
}