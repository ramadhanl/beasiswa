<?php

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('mahasiswa/home');
	}
	public function insert_ppa()
	{
		$data = array(
					'npm' => $this->input->post('npm'),
					'nama_mhs'=> $this->input->post('nama_mhs'),
					'jk'=>$this->input->post('jk'),
					'prodi'=>$this->input->post('prodi'),
					'jenjang'=>$this->input->post('jenjang'),
					'smt'=>$this->input->post('smt'),
					'ipk'=>$this->input->post('ipk'),
					'pekerjaan'=>$this->input->post('pekerjaan'),
					'jml_tanggungan'=>$this->input->post('jml_tanggungan'),
					'penghasilan'=>$this->input->post('penghasilan'),
					'prestasi'=>$this->input->post('prestasi'),
					'alamat'=>$this->input->post('alamat'),
					'telepon'=>$this->input->post('telepon'),
				);
		$this->db->insert("form_beasiswa_ppa",$data);
	}
	public function insert_bpp()
	{
		$data = array(
					'npm' => $this->input->post('npm'),
					'nama_mhs'=> $this->input->post('nama_mhs'),
					'jk'=>$this->input->post('jk'),
					'prodi'=>$this->input->post('prodi'),
					'jenjang'=>$this->input->post('jenjang'),
					'smt'=>$this->input->post('smt'),
					'ipk'=>$this->input->post('ipk'),
					'pekerjaan'=>$this->input->post('pekerjaan'),
					'jml_tanggungan'=>$this->input->post('jml_tanggungan'),
					'penghasilan'=>$this->input->post('penghasilan'),
					'prestasi'=>$this->input->post('prestasi'),
					'alamat'=>$this->input->post('alamat'),
					'telepon'=>$this->input->post('telepon'),
				);
		$this->db->insert("form_beasiswa_bpp",$data);
	}
}
