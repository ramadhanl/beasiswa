<?php

class Admin extends CI_Controller {
	public function index()
	{
		$this->load->view('admin/home_admin');
	}
	public function matriks_ahp()
	{
		$this->load->view('admin/matriks_ahp');
	}
	public function matriks_ahp_ubah()
	{
		$this->load->view('admin/matriks_ahp_ubah');
	}
	public function parameter_ppa()
	{
		$this->load->view('admin/parameter_ppa');
	}
	public function parameter_ppa_ubah()
	{
		$this->load->view('admin/parameter_ppa_ubah');
	}
	public function parameter_bpp()
	{
		$this->load->view('admin/parameter_bpp');
	}
	public function parameter_bpp_ubah()
	{
		$this->load->view('admin/parameter_bpp_ubah');
	}
}
