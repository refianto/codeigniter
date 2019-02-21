<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class api_model extends CI_Model {

	public function login()
	{
		$tb = $this->db->get('user')->result_array();
		return json_encode($tb);
	}

	public function menu()
	{
		$tb = $this->db->get('menu')->result_array();
		return json_encode($tb);	
	}

}
