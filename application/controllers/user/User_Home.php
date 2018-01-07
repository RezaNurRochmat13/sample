<?php

/*
Class User Home
Created by Reza Nur Rochmat
Code Igniter 3.1.6
All Right Reserved

*/

class User_Home extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('include/header');
		$this->load->view('user/content_home');
		$this->load->view('include/footer');
	}
}