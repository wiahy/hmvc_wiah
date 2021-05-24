<?php
defined('BASEPATH') OR EXIT('No direct script access allowed');

class Home extends MY_Controller{

	public function index(){
		$this->load->view('header');
		$this->load->view('content');
		$this->load->view('footer');
	}

	public function contacts(){
		$this->load->view('contacts');
	}
}