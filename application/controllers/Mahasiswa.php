<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

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

	public function form_ppa()
	{
		$this->load->view('layout/header',array('display'=>'form_ppa'));
		$this->load->view('Mahasiswa/form_ppa');
		$this->load->view('layout/footer');
	}

	public function form_bpp()
	{
		$this->load->view('layout/header',array('display'=>'form_bpp'));
		$this->load->view('Mahasiswa/form_bpp');
		$this->load->view('layout/footer');
	}

	public function insert_data($par)
	{
		if($par=='ppa')
			$config['upload_path'] = 'C:/wamp/www/beasiswa/static/berkas_pendaftaran/ppa';
		else
			$config['upload_path'] = 'C:/wamp/www/beasiswa/static/berkas_pendaftaran/bpp';
		$config['allowed_types'] = 'gif|jpg|jpeg|png|iso|dmg|zip|rar|doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|txt|exe|avi|mpeg|mp3|mp4|3gp';
		$config['max_size']	= '3000';
		$config['overwrite']  = TRUE;
		$file = $_FILES['userfile']['name'];
		$ext = substr(strrchr($file, '.'), 1);
		$new_name = "PrestasiMahasiswa_".$this->input->post('npm').".$ext";
		$config['file_name'] = $new_name;
		$config['convert_dots'] = FALSE;
		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		if(!$this->upload->do_upload('userfile')){
			$upload_data = $this->upload->data();
			echo $this->upload->display_errors();
			$prestasi=0;
		}
		else{
			$file_data = $this->upload->data();
			$data = base_url().'images/'.$file_data['file_name'];
			$prestasi=1;
		}
		$data = array('npm' => $this->input->post('npm'),'nama_mhs' => $this->input->post('nama_mhs'),'jk' => $this->input->post('jk'),'prodi' => $this->input->post('prodi'),'jenjang' => $this->input->post('jenjang'),'smt' => $this->input->post('smt'),'ipk' => $this->input->post('ipk'),'pekerjaan' => $this->input->post('pekerjaan'),'jml_tanggungan' => $this->input->post('jml_tanggungan'),'penghasilan' => $this->input->post('penghasilan'),'prestasi' => $prestasi,'alamat' => $this->input->post('alamat'),'telepon' => $this->input->post('telepon'),);
		$this->load->database('beasiswa');
		$this->load->model('Beasiswa_models','bea');
		$this->bea->insert_data($par,$data);
		redirect('');
	}
}

/* End of file Anotasi.php */
/* Location: ./application/controllers/Anotasi.php */