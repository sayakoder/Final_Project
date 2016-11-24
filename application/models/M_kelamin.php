<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelamin extends CI_Model {

	public function getKelamin()
	{
		$data = $this->db->get('kelamin');
		return $data->result();
	}
	

}
