<?php
/*
Class Login
Created by Reza Nur Rochmat
Code Igniter 3.1.6

*/

class Login extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Login_Model');
	}

	public function index(){
		$this->load->view('login/header');
		$this->load->view('login/content_login');
		$this->load->view('login/footer');

	}

	public function verifyLogin(){
		$this->form_validation->set_rules('username','Username','required|trim|xss_clean');
		$this->form_validation->set_rules('password','Password','required|trim|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login/header');
			$this->load->view('login/content_login');
			$this->load->view('login/footer');
		}
		else{
			$username 	= $this->input->post('username', TRUE);
			$password 	= $this->input->post('password', TRUE);
			$level 		= $this->input->post('level', TRUE);

			$where = array(
			'username' => $username,
			'password' => sha1($password)
			);

		$check = $this->Login_Model->cek_login("users",$where)->num_rows();
		if($check > 0){
 
			$data_session = array(
				'username' 	=> $username,
				'level'	=> $level
				);
 
			$this->session->set_userdata($data_session);
 
			if ($level_user == 0) {
				redirect('admin/Admin_Home');
			}

			if ($level_user == 1) {
				redirect('user/User_Home');
			}
 
		}
		else{
			echo "<script>
		    window.alert('Login failed. Please check your username and password');
		    window.location.href='index';
		    </script>";
			}
		}
	}

	public function logout(){
	$this->session->sess_destroy();
	echo "<script>
		    window.alert('Logout successfully');
		    window.location.href='index';
		    </script>";
	}
}