<?php

class client_m extends CI_Model{
	
	function tampil_data(){

		$result = $this->db->query("SELECT * FROM client");
		return $result;
	}
}
