<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends Auth_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('M_siswa');
		$this->load->model('M_kelas');
		$this->load->model('M_kelamin');
		
	}
	public function index()
	{	
		$data['judul'] 		= 'Tabel Siswa';
		$data['data_siswa'] = $this->M_siswa->getSiswa();
		$data['kepala']  	= $this->load_kepala('siswa/kepala', $data);
		$data['ekor']  		= $this->load_ekor('siswa/ekor', $data);
		$this->load_template('siswa/home', $data);
		
	}

	public function add_siswa()
	{
		$data['judul'] 		= 'Tambah Siswa';
		$data['kelas'] 		= $this->M_kelas->getKelas();
		$data['kelamin'] 	= $this->M_kelamin->getKelamin();
		$data['kepala']  	= $this->load_kepala('siswa/form_tambah_siswa/kepala', $data);
		$data['ekor']  		= $this->load_ekor('siswa/form_tambah_siswa/ekor', $data);
		$this->load_template('siswa/form_tambah_siswa/form_tambah_siswa', $data);
	}

	public function act_tambah()
	{
		$this->form_validation->set_rules('nama_siswa', 'Nama_siswa', 'required');
		$this->form_validation->set_rules('id_kelamin', 'Kelamin', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('id_kelas','Kelas', 'required');

		if ($this->form_validation->run()==FALSE) 
		{
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));
			redirect('siswa');
		}
		else
		{
			$param  = $this->input->post();
			$proses = $this->M_siswa->act_tambah($param);

			if ($proses >= 0) 
			{
				$this->session->set_flashdata('alert_msg',succ_msg('Siswa berhasil diinputkan'));
				redirect('siswa');
			}
			else
			{
				$this->session->set_flashdata('alert_msg',err_msg('siswa gagal diinputkan'));
				redirect('siswa');
			}
		}
	}

	public function edit()

	{
		$id_siswa = $this->input->post('id_siswa');
		// echo "<pre>";
		// print_r ($id_siswa);
		// exit();
		$data['judul'] 		= 'Tabel Siswa';
		$data['data_siswa'] = $this->M_siswa->getDetailSiswa($id_siswa);
		$data['data_kelas'] = $this->M_kelas->getKelas();
		$data['data_kelamin'] = $this->M_kelamin->getKelamin();
		$data['kepala']  	= $this->load_kepala('siswa/form_edit_siswa/kepala', $data);
		$data['ekor']  		= $this->load_ekor('siswa/form_edit_siswa/ekor', $data);
		// echo($data);	

		echo $this->load->view('siswa/form_edit_siswa/form_edit_siswa', $data, true);
	}

	public function act_edit()
	{
		$this->form_validation->set_rules('nama_siswa', 'Nama_siswa', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
		$this->form_validation->set_rules('id_kelamin', 'Kelamin', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('id_kelas','Kelas', 'required');
		if ($this->form_validation->run()==FALSE) 
		{
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));
			redirect('siswa');
		}else{

			$param = $this->input->post();
			$proses = $this->M_siswa->act_edit($param);

			if ($proses >= 0) 
			{
				$this->session->set_flashdata('alert_msg', succ_msg('siswa berhasi diedit'));
				redirect('siswa');
			}
			else
			{
				$this->session->set_flashdata('alert_msg',err_msg('siswa gagal diedit'));
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
	}

	public function hapus($id='')
	{
		// print_r($id);
		// exit();
		$proses = $this->M_siswa->act_hapus($id);

		if ($proses >= 0) 
		{
			$this->session->set_flashdata('alert_msg', succ_msg('field telah terhapus'));
			redirect('siswa');
		}
		else
		{
			$this->session->set_flashdata('alert_msg',err_msg('field tidak terhapus'));
		}	
		redirect('siswa');
	}

}
