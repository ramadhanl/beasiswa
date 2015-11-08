<?php

class Pegawai extends CI_Controller {
	public function index()
	{
		$this->load->view('pegawai/home_pegawai');
	}
	public function login_pegawai()
	{
		$this->load->view('pegawai/login_pegawai');
	}
	public function proses_seleksi_ppa()
	{
		$this->load->view('pegawai/proses_seleksi_ppa');
	}
	public function proses_seleksi_bpp()
	{
		$this->load->view('pegawai/proses_seleksi_bpp');
	}
	public function hasil_seleksi_ppa()
	{
		$this->load->view('pegawai/hasil_seleksi_ppa');
	}
	public function hasil_seleksi_bpp()
	{
		$this->load->view('pegawai/hasil_seleksi_bpp');
	}
	public function login_proses()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$this->load->model("user");
		$this->load->database();
		$result = $this->user->login($email, $password);
 		if($result)
		   {
		     $sess_array = array();
		     foreach($result as $row)
		     {
		     	$hak_akses = $row->hak_akses; 
		       	$sess_array = array(
		         'email' => $row->email,
		         'nama' => $row->nama,
		         'password' => $row->password,
		         'hak_akses' => $row->hak_akses
		       );
		       $this->session->set_userdata($sess_array);
		     }
		     if ($hak_akses==1) 
		     	redirect(base_url("admin"));
		     else if ($hak_akses==2) 
		     	redirect(base_url("pegawai"));		     
		     return TRUE;
		   }
	   else
	   {
	     $this->form_validation->set_message('check_database', 'Invalid username or password');
	     redirect(base_url(""));
	     return false;
	   }
		
	}
	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('hak_akses');
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
