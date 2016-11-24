<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Auth_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}
	public function index()
	{	
		$data['judul'] 	 = 'halaman utama';
		$data['kepala']  = $this->load_kepala('home/kepala', $data);
		$data['ekor']  	 = $this->load_ekor('home/ekor', $data);
		$this->load_template('home/index', $data);
		
	}
}
