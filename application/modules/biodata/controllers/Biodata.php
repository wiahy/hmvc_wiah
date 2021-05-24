<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends MY_Controller {
	public function __construct(){ 
		parent::__construct();
		//$this->load->model("M_login");
	}
	
	function index(){
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('V_index');
		$this->load->view('footer');
	}
	
	function edit($id){ //edit/5
		$sql = "select * from tb_admin where userid = '$id'";
		$data['user'] = $this->db->query($sql)->result_array();
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('V_edit', $data);
		$this->load->view('footer');
	}
	
	function delete($id){ //edit/5
		$sql = "delete from tb_admin where userid = '$id'";
		$data['user'] = $this->db->query($sql)->result_array();
		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('V_', $data);
		$this->load->view('footer');
	}
}
