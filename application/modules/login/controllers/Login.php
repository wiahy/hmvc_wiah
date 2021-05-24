<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
	public function __construct(){ 
		parent::__construct();
		$this->load->model("M_login");
	}
	
	function index(){
		$this->load->view('login');
	}
	
	function ceklogin(){
		$surei = $_POST['surei'];
		$password = $_POST['pass'];
		//if(isset($_POST['rm'])) echo $rm = $_POST['rm'];
		//echo $bio = $_POST['bio'];
		
		/* pindah ke model *
		$sql = "select * from tb_admin where username = '$surei' and password = '$password'";
		$count = $this->db->query($sql)->num_rows();
		/**/
		$count = $this->M_login->cekLogin($surei, $password);
		
		if($count == 1) header("location: ".base_url());
		else{
			echo "<script>
				alert('User atau password salah');
				window.location.href = '". base_url('login') ."';
				</script>";
			
			//header("location: ".base_url('login'));
		}
	}
}
