<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

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

	public function matriks_ahp()
	{
		$this->load->database('beasiswa');
		$this->load->model('Beasiswa_models','bea');
		$this->load->view('layout/header',array('display'=>'setting_matriks'));
		$this->load->view('admin/matriks_ahp',array('data'=>$this->bea->nilai_matriks('full')));
		$this->load->view('layout/footer');
	}

	public function setting_matriks()
	{
		$this->load->database('beasiswa');
		$this->load->model('Beasiswa_models','bea');
		$this->load->view('layout/header',array('display'=>'setting_matriks'));
		$this->load->view('admin/setting_matriks',array('status'=>1,'data'=>$this->bea->nilai_matriks('value_only')));
		$this->load->view('layout/footer');
	}

	public function simpan_matriks()
	{
		$data_ipk = array('ipk' => $this->input->post('ipk5'),'semester'=>$this->input->post('semester5'),'gaji'=>$this->input->post('gaji5'),'tanggungan'=>$this->input->post('tanggungan5'),'keaktifan'=>$this->input->post('keaktifan5'));
		$data_semester = array('ipk' => 1/$this->input->post('semester5'),'semester'=>$this->input->post('semester4'),'gaji'=>$this->input->post('gaji4'),'tanggungan'=>$this->input->post('tanggungan4'),'keaktifan'=>$this->input->post('keaktifan4'));
		$data_gaji = array('ipk' => 1/$this->input->post('gaji5'),'semester'=>1/$this->input->post('gaji4'),'gaji'=>$this->input->post('gaji3'),'tanggungan'=>$this->input->post('tanggungan3'),'keaktifan'=>$this->input->post('keaktifan3'));
		$data_tanggungan = array('ipk' => 1/$this->input->post('tanggungan5'),'semester'=>1/$this->input->post('tanggungan4'),'gaji'=>1/$this->input->post('tanggungan3'),'tanggungan'=>$this->input->post('tanggungan2'),'keaktifan'=>$this->input->post('keaktifan2'));
		$data_keaktifan = array('ipk' => 1/$this->input->post('keaktifan5'),'semester'=>1/$this->input->post('keaktifan4'),'gaji'=>1/$this->input->post('keaktifan3'),'tanggungan'=>1/$this->input->post('keaktifan2'),'keaktifan'=>$this->input->post('keaktifan1'));

		$this->load->database('beasiswa');
		$this->load->model('Beasiswa_models','bea');
		$status = $this->bea->simpan_matriks($data_ipk,$data_semester,$data_gaji,$data_tanggungan,$data_keaktifan);
		$this->load->view('layout/header',array('display'=>'setting_matriks'));
		if ($status)
			redirect('admin/matriks_ahp');
		else
			$this->load->view('admin/setting_matriks',array('status'=>0,'data'=>$this->bea->nilai_matriks('value_only')));
		$this->load->view('layout/footer');
	}

	public function parameter_ppa()
	{
		$this->load->database('beasiswa');
		$this->load->model('Beasiswa_models','bea');
		$this->load->view('layout/header',array('display'=>'set_parameter'));
		$this->load->view('admin/parameter_ppa',array('data'=>$this->bea->nilai_parameter('ppa')));
		$this->load->view('layout/footer');
	}

	public function set_parameter_ppa()
	{
		$this->load->database('beasiswa');
		$this->load->model('Beasiswa_models','bea');
		$this->load->view('layout/header',array('display'=>'set_parameter'));
		$this->load->view('admin/set_parameter_ppa',array('data'=>$this->bea->nilai_parameter('ppa')));
		$this->load->view('layout/footer');
	}

	public function parameter_bpp()
	{
		$this->load->database('beasiswa');
		$this->load->model('Beasiswa_models','bea');
		$this->load->view('layout/header',array('display'=>'set_parameter'));
		$this->load->view('admin/parameter_bpp',array('data'=>$this->bea->nilai_parameter('bpp')));
		$this->load->view('layout/footer');
	}

	public function set_parameter_bpp()
	{
		$this->load->database('beasiswa');
		$this->load->model('Beasiswa_models','bea');
		$this->load->view('layout/header',array('display'=>'set_parameter'));
		$this->load->view('admin/set_parameter_bpp',array('data'=>$this->bea->nilai_parameter('bpp')));
		$this->load->view('layout/footer');
	}

	public function simpan_parameter($par)
	{
		$data_ipk = array('kaidah' => $this->input->post('kaidahipk'),'tipe'=>$this->input->post('tipeipk'),'q'=>$this->input->post('qipk'),'p'=>$this->input->post('pipk'));
		$data_semester = array('kaidah' => $this->input->post('kaidahsemester'),'tipe'=>$this->input->post('tipesemester'),'q'=>$this->input->post('qsemester'),'p'=>$this->input->post('psemester'));
		$data_gaji = array('kaidah' => $this->input->post('kaidahgaji'),'tipe'=>$this->input->post('tipegaji'),'q'=>$this->input->post('qgaji'),'p'=>$this->input->post('pgaji'));
		$data_tanggungan = array('kaidah' => $this->input->post('kaidahtanggungan'),'tipe'=>$this->input->post('tipetanggungan'),'q'=>$this->input->post('qtanggungan'),'p'=>$this->input->post('ptanggungan'));
		$data_keaktifan = array('kaidah' => $this->input->post('kaidahkeaktifan'),'tipe'=>$this->input->post('tipekeaktifan'),'q'=>$this->input->post('qkeaktifan'),'p'=>$this->input->post('pkeaktifan'));
		
		$this->load->database('beasiswa');
		$this->load->model('Beasiswa_models','bea');
		$this->bea->simpan_parameter($par,$data_ipk,$data_semester,$data_gaji,$data_tanggungan,$data_keaktifan);
		if ($par=='ppa')
			redirect('admin/parameter_ppa');
		else
			redirect('admin/parameter_bpp');
	}
}

/* End of file KP.php */
/* Location: ./application/controllers/KP.php */