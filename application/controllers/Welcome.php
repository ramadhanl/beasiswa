<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('layout/header',array('display'=>'welcome'));
		$this->load->view('beranda');
		$this->load->view('layout/footer');
	}

	public function login()
	{
		$this->load->database('beasiswa');
		$this->load->model('Beasiswa_models','bea');
		$status = $this->bea->login($this->input->post('username'),$this->input->post('password'));
		$this->load->view('layout/header',array('display'=>'welcome'));
		$this->load->view('beranda',array('status'=>$status));
		$this->load->view('layout/footer');	
	}
	
	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');
		$this->session->sess_destroy();
		redirect(base_url(''));
	}
}
