<?php

class M_login extends CI_Model{
	
	function cekLogin($surei,$password){
		$sql = "select * from tb_admin where username = '$surei' and password = '$password'";
		return $this->db->query($sql)->num_rows();
		
	}
}