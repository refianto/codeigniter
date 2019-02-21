<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {

	public function proses_login($user,$pass)
	{
		$tb = $this->db->get_where('user',array('username' => $user, 'password' => $pass))->row();
		return $tb;
	}

}
