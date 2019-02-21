<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class json_model extends CI_Model {

	public function jmlmeja()
	{
		$jmlmeja =  array('001','002','003');
		return json_encode($jmlmeja);
	}

}
