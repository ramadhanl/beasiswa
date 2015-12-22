<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('beranda');
		$this->load->view('layout/footer');
	}

	public function proses_seleksi_ppa()
	{
		$this->load->database('beasiswa');
		$this->load->model('Beasiswa_models','bea');
		$this->load->view('layout/header',array('display'=>'proses_seleksi','data'=>$this->bea->pendaftar_beasiswa('ppa','before')));
		$this->load->view('pegawai/proses_seleksi_ppa');
		$this->load->view('layout/footer');
	}

	public function proses_seleksi_bpp()
	{
		$this->load->database('beasiswa');
		$this->load->model('Beasiswa_models','bea');
		$this->load->view('layout/header',array('display'=>'proses_seleksi','data'=>$this->bea->pendaftar_beasiswa('bpp','before')));
		$this->load->view('pegawai/proses_seleksi_bpp');
		$this->load->view('layout/footer');
	}

	public function hitung_skor($par)
	{
		$this->load->database('beasiswa');
		$this->load->model('Beasiswa_models','bea');
		$this->bea->hitung_skor($par);
		if ($par=='ppa') redirect('pegawai/hasil_seleksi_ppa');
		else redirect('pegawai/hasil_seleksi_bpp');
	}
	public function hasil_seleksi_ppa()
	{
		$this->load->database('beasiswa');
		$this->load->model('Beasiswa_models','bea');
		$this->load->view('layout/header',array('display'=>'hasil_seleksi','data'=>$this->bea->pendaftar_beasiswa('ppa','after')));
		$this->load->view('pegawai/hasil_seleksi_ppa');
		$this->load->view('layout/footer');
	}

	public function hasil_seleksi_bpp()
	{
		$this->load->database('beasiswa');
		$this->load->model('Beasiswa_models','bea');
		$this->load->view('layout/header',array('display'=>'hasil_seleksi','data'=>$this->bea->pendaftar_beasiswa('bpp','after')));
		$this->load->view('pegawai/hasil_seleksi_bpp');
		$this->load->view('layout/footer');
	}

	public function save_as_excel($par,$versi)
	{
		$this->load->database('beasiswa');
		$this->load->model('Beasiswa_models','bea');
		$this->bea->save_as_excel($par,$versi);
		if ($par=='ppa') redirect('pegawai/hasil_seleksi_ppa');
		else redirect('pegawai/hasil_seleksi_bpp');
	}

	public function matriks_excel($par)
	{
		$this->load->database('beasiswa');
		$this->load->model('Beasiswa_models','bea');
		$this->bea->matriks_excel($par);
	}

	public function nilai_preferensi($par,$id_form)
	{
		$this->load->database('beasiswa');
		$this->load->model('Beasiswa_models','bea');
		$this->load->view('layout/header',array('display'=>'hasil_seleksi'));
		$this->load->view('pegawai/nilai_preferensi',array('par'=>$par,'data'=>$this->bea->nilai_preferensi($par,$id_form)));
		$this->load->view('layout/footer');
	}
}

/* End of file TA.php */
/* Location: ./application/controllers/TA.php */ ?>