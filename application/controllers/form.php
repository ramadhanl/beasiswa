<?php

class Form extends CI_Controller {
	public function index()
	{
		$this->load->view('home');
	}
	public function beasiswa_ppa()
	{
		$this->load->view('mahasiswa/beasiswa_ppa');
	}
	public function beasiswa_bpp()
	{
		$this->load->view('mahasiswa/beasiswa_bpp');
	}
	public function submit_form()
	{
		$this->load->model("form_models");

		$data = array(
			"nama_lengkap"=>$this->input->post('nama_lengkap'),
			"tempat_lahir"=>$this->input->post('tempat_lahir'),
			"tanggal_lahir"=>$this->input->post('tanggal_lahir'),
			"jenis_kelamin"=>$this->input->post('jenis_kelamin'),
			"nrp"=>$this->input->post('nrp'),
			"jurusan"=>$this->input->post('jurusan'),
			"fakultas"=>$this->input->post('fakultas'),
			"perguruan_tinggi"=>$this->input->post('perguruan_tinggi'),
			"alamat_rumah"=>$this->input->post('alamat_rumah'),
			"no_telepon"=>$this->input->post('no_telepon'),
			"email"=>$this->input->post('email'),
			"sks_tempuh"=>$this->input->post('sks_tempuh'),
			"ipk"=>$this->input->post('ipk'),
			"semester"=>$this->input->post('semester'),
			"jumlah_tanggungan_ortu"=>$this->input->post('jumlah_tanggungan_ortu'),
			"level_gaji_ortu"=>$this->input->post('level_gaji_ortu'),
			"keaktifan"=>$this->input->post('keaktifan'),
			"tipe_beasiswa"=>$this->input->post('tipe_beasiswa')
			);
		$this->load->database();
		$this->form_models->submit_form($data);
		$this->form_validation->set_message('check_database', 'Success');
	    redirect(base_url(""));
	}
}
