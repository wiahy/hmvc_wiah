<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends MY_Controller {
	public function index(){
		$this->load->view('header');
		$this->load->view('contacts');
		$this->load->view('footer');
	}
}