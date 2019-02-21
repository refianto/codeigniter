<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class menu_model extends CI_Model {

	public function Menu()
	{
		$tb = $this->db->get('menu')->result_array();
		return $tb;
	}

}
