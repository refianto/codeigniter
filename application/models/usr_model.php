<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usr_model extends CI_Model {

	public function save_transaksi($value)
	{
		$this->db->replace('transaksi',$value);
	}

	public function laporan($pelayan)
	{
		$tb = $this->db->get_where('transaksi',array('pelayan' => $pelayan))->result_array();
		return $tb;
	}

}
