<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_Controller extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();

		$this->user_login = $this->session->userdata('user_session');

		if (count($this->user_login)==0) {
			$this->session->set_flashdata('alert_msg', err_msg('silahkan login terlebih dahulu'));
			redirect('login');
		}
	}

	public function load_template($view, $data)
	{
		$data['content'] = $this->load->view($view, $data, TRUE);
		$this->load->view('template/base_template', $data);
	}

	public function load_ekor($view, $data)
	{
		$data = $this->load->view($view, $data, TRUE);
		
		return $data;
	}

	public function load_kepala($view, $data)
	{
		$data = $this->load->view($view, $data, TRUE);
		
		return $data;
	}

}

/* End of file Auth_Controller.php */
/* Location: ./application/core/Auth_Controller.php */