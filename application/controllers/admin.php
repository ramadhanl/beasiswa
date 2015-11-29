<?php

class Admin extends CI_Controller {
	public function index()
	{
		$this->load->view('admin/home_admin');
	}
	public function matriks_ahp()
	{
		$ipk = $this->db->get_where('matriks_perbandingan_ppa', array('id' => 'ipk'))->row();
		$semester = $this->db->get_where('matriks_perbandingan_ppa', array('id' => 'semester'))->row();
		$gaji = $this->db->get_where('matriks_perbandingan_ppa', array('id' => 'gaji'))->row();
		$tanggungan = $this->db->get_where('matriks_perbandingan_ppa', array('id' => 'tanggungan'))->row();
		$keaktifan = $this->db->get_where('matriks_perbandingan_ppa', array('id' => 'keaktifan'))->row();
		$total = $this->db->get_where('matriks_perbandingan_ppa', array('id' => 'total'))->row();
		$bobot = $this->db->get_where('matriks_perbandingan_ppa', array('id' => 'bobot'))->row();
		$cr = $this->db->get_where('matriks_perbandingan_ppa', array('id' => 'cr'))->row();
		$data = array(
			"ipk_ipk"=>$ipk->ipk,
			"ipk_semester"=>$ipk->semester,
			"ipk_gaji"=>$ipk->gaji,
			"ipk_tanggungan"=>$ipk->tanggungan,
			"ipk_keaktifan"=>$ipk->keaktifan,
			"semester_ipk"=>$semester->ipk,
			"semester_semester"=>$semester->semester,
			"semester_gaji"=>$semester->gaji,
			"semester_tanggungan"=>$semester->tanggungan,
			"semester_keaktifan"=>$semester->keaktifan,
			"gaji_ipk"=>$gaji->ipk,
			"gaji_semester"=>$gaji->semester,
			"gaji_gaji"=>$gaji->gaji,
			"gaji_tanggungan"=>$gaji->tanggungan,
			"gaji_keaktifan"=>$gaji->keaktifan,
			"tanggungan_ipk"=>$tanggungan->ipk,
			"tanggungan_semester"=>$tanggungan->semester,
			"tanggungan_gaji"=>$tanggungan->gaji,
			"tanggungan_tanggungan"=>$tanggungan->tanggungan,
			"tanggungan_keaktifan"=>$tanggungan->keaktifan,
			"keaktifan_ipk"=>$keaktifan->ipk,
			"keaktifan_semester"=>$keaktifan->semester,
			"keaktifan_gaji"=>$keaktifan->gaji,
			"keaktifan_tanggungan"=>$keaktifan->tanggungan,
			"keaktifan_keaktifan"=>$keaktifan->keaktifan,
			"total_ipk"=>$total->ipk,
			"total_semester"=>$total->semester,
			"total_gaji"=>$total->gaji,
			"total_tanggungan"=>$total->tanggungan,
			"total_keaktifan"=>$total->keaktifan,
			"bobot_ipk"=>$bobot->ipk,
			"bobot_semester"=>$bobot->semester,
			"bobot_gaji"=>$bobot->gaji,
			"bobot_tanggungan"=>$bobot->tanggungan,
			"bobot_keaktifan"=>$bobot->keaktifan,
			"cr"=>$cr->ipk);
		$this->load->view('admin/matriks_ahp',$data);
	}
	public function matriks_ahp_ubah()
	{
		$ipk = $this->db->get_where('matriks_perbandingan_ppa', array('id' => 'ipk'))->row();
		$semester = $this->db->get_where('matriks_perbandingan_ppa', array('id' => 'semester'))->row();
		$gaji = $this->db->get_where('matriks_perbandingan_ppa', array('id' => 'gaji'))->row();
		$tanggungan = $this->db->get_where('matriks_perbandingan_ppa', array('id' => 'tanggungan'))->row();
		$keaktifan = $this->db->get_where('matriks_perbandingan_ppa', array('id' => 'keaktifan'))->row();
		$total = $this->db->get_where('matriks_perbandingan_ppa', array('id' => 'total'))->row();
		$bobot = $this->db->get_where('matriks_perbandingan_ppa', array('id' => 'bobot'))->row();
		$cr = $this->db->get_where('matriks_perbandingan_ppa', array('id' => 'cr'))->row();
		$data = array(
			"ipk_ipk"=>$ipk->ipk,
			"ipk_semester"=>$ipk->semester,
			"ipk_gaji"=>$ipk->gaji,
			"ipk_tanggungan"=>$ipk->tanggungan,
			"ipk_keaktifan"=>$ipk->keaktifan,
			"semester_ipk"=>$semester->ipk,
			"semester_semester"=>$semester->semester,
			"semester_gaji"=>$semester->gaji,
			"semester_tanggungan"=>$semester->tanggungan,
			"semester_keaktifan"=>$semester->keaktifan,
			"gaji_ipk"=>$gaji->ipk,
			"gaji_semester"=>$gaji->semester,
			"gaji_gaji"=>$gaji->gaji,
			"gaji_tanggungan"=>$gaji->tanggungan,
			"gaji_keaktifan"=>$gaji->keaktifan,
			"tanggungan_ipk"=>$tanggungan->ipk,
			"tanggungan_semester"=>$tanggungan->semester,
			"tanggungan_gaji"=>$tanggungan->gaji,
			"tanggungan_tanggungan"=>$tanggungan->tanggungan,
			"tanggungan_keaktifan"=>$tanggungan->keaktifan,
			"keaktifan_ipk"=>$keaktifan->ipk,
			"keaktifan_semester"=>$keaktifan->semester,
			"keaktifan_gaji"=>$keaktifan->gaji,
			"keaktifan_tanggungan"=>$keaktifan->tanggungan,
			"keaktifan_keaktifan"=>$keaktifan->keaktifan,
			"total_ipk"=>$total->ipk,
			"total_semester"=>$total->semester,
			"total_gaji"=>$total->gaji,
			"total_tanggungan"=>$total->tanggungan,
			"total_keaktifan"=>$total->keaktifan,
			"bobot_ipk"=>$bobot->ipk,
			"bobot_semester"=>$bobot->semester,
			"bobot_gaji"=>$bobot->gaji,
			"bobot_tanggungan"=>$bobot->tanggungan,
			"bobot_keaktifan"=>$bobot->keaktifan,
			"cr"=>$cr->ipk,
			"salah"=>0);
		$this->load->view('admin/matriks_ahp_ubah',$data);
	}
	public function proses_ubah_matriks()
	{
		$data_ipk = array(
               'ipk' => 1,
               'semester' => $this->input->post('ipk_semester'),
               'gaji' => $this->input->post('ipk_gaji'),
               'tanggungan' => $this->input->post('ipk_tanggungan'),
               'keaktifan' => $this->input->post('ipk_keaktifan')
            );
		$this->db->where('id', 'ipk');
		$this->db->update('matriks_perbandingan_ppa', $data_ipk);
		$data_semester = array(
               'ipk' => 1/$this->input->post('ipk_semester'),
               'semester' => 1,
               'gaji' => $this->input->post('semester_gaji'),
               'tanggungan' => $this->input->post('semester_tanggungan'),
               'keaktifan' => $this->input->post('semester_keaktifan')
            );
		$this->db->where('id', 'semester');
		$this->db->update('matriks_perbandingan_ppa', $data_semester);
		$data_gaji = array(
               'ipk' => 1/$this->input->post('ipk_gaji'),
               'semester' => 1/$this->input->post('semester_gaji'),
               'gaji' => $this->input->post('gaji_gaji'),
               'tanggungan' => $this->input->post('gaji_tanggungan'),
               'keaktifan' => $this->input->post('gaji_keaktifan')
            );
		$this->db->where('id', 'gaji');
		$this->db->update('matriks_perbandingan_ppa', $data_gaji);
		$data_tanggungan = array(
               'ipk' => 1/$this->input->post('ipk_tanggungan'),
               'semester' => 1/$this->input->post('semester_tanggungan'),
               'gaji' => 1/$this->input->post('gaji_tanggungan'),
               'tanggungan' => $this->input->post('tanggungan_tanggungan'),
               'keaktifan' => $this->input->post('tanggungan_keaktifan')
            );
		$this->db->where('id', 'tanggungan');
		$this->db->update('matriks_perbandingan_ppa', $data_tanggungan);
		$data_keaktifan = array(
               'ipk' => 1/$this->input->post('ipk_keaktifan'),
               'semester' => 1/$this->input->post('semester_keaktifan'),
               'gaji' => 1/$this->input->post('gaji_keaktifan'),
               'tanggungan' => 1/$this->input->post('tanggungan_keaktifan'),
               'keaktifan' => $this->input->post('keaktifan_keaktifan')
            );
		$this->db->where('id', 'keaktifan');
		$this->db->update('matriks_perbandingan_ppa', $data_keaktifan);

		$ipk = $this->db->get_where('matriks_perbandingan_ppa', array('id' => 'ipk'))->row();
		$semester = $this->db->get_where('matriks_perbandingan_ppa', array('id' => 'semester'))->row();
		$gaji = $this->db->get_where('matriks_perbandingan_ppa', array('id' => 'gaji'))->row();
		$tanggungan = $this->db->get_where('matriks_perbandingan_ppa', array('id' => 'tanggungan'))->row();
		$keaktifan = $this->db->get_where('matriks_perbandingan_ppa', array('id' => 'keaktifan'))->row();
		$data_total = array(
               'ipk' => $ipk->ipk+$semester->ipk+$gaji->ipk+$tanggungan->ipk+$keaktifan->ipk,
               'semester' => $ipk->semester+$semester->semester+$gaji->semester+$tanggungan->semester+$keaktifan->semester,
               'gaji' => $ipk->gaji+$semester->gaji+$gaji->gaji+$tanggungan->gaji+$keaktifan->gaji,
               'tanggungan' => $ipk->tanggungan+$semester->tanggungan+$gaji->tanggungan+$tanggungan->tanggungan+$keaktifan->tanggungan,
               'keaktifan' => $ipk->keaktifan+$semester->keaktifan+$gaji->keaktifan+$tanggungan->keaktifan+$keaktifan->keaktifan
            );
		$this->db->where('id', 'total');
		$this->db->update('matriks_perbandingan_ppa', $data_total);

		$total = $this->db->get_where('matriks_perbandingan_ppa', array('id' => 'total'))->row();
		$data_bobot = array(
               'ipk' => ($ipk->ipk/$total->ipk+$ipk->semester/$total->semester+$ipk->gaji/$total->gaji+$ipk->tanggungan/$total->tanggungan+$ipk->keaktifan/$total->keaktifan)/5,
               'semester' => ($semester->ipk/$total->ipk+$semester->semester/$total->semester+$semester->gaji/$total->gaji+$semester->tanggungan/$total->tanggungan+$semester->keaktifan/$total->keaktifan)/5,
               'gaji' => ($gaji->ipk/$total->ipk+$gaji->semester/$total->semester+$gaji->gaji/$total->gaji+$gaji->tanggungan/$total->tanggungan+$gaji->keaktifan/$total->keaktifan)/5,
               'tanggungan' => ($tanggungan->ipk/$total->ipk+$tanggungan->semester/$total->semester+$tanggungan->gaji/$total->gaji+$tanggungan->tanggungan/$total->tanggungan+$tanggungan->keaktifan/$total->keaktifan)/5,
               'keaktifan' => ($keaktifan->ipk/$total->ipk+$keaktifan->semester/$total->semester+$keaktifan->gaji/$total->gaji+$keaktifan->tanggungan/$total->tanggungan+$keaktifan->keaktifan/$total->keaktifan)/5
            );
		$this->db->where('id', 'bobot');
		$this->db->update('matriks_perbandingan_ppa', $data_bobot);

		$bobot= $this->db->get_where('matriks_perbandingan_ppa', array('id' => 'bobot'))->row();
		$sum_ipk = $ipk->ipk*$bobot->ipk + $ipk->semester*$bobot->semester + $ipk->gaji*$bobot->gaji + $ipk->tanggungan*$bobot->tanggungan + $ipk->keaktifan*$bobot->keaktifan;
		$sum_semester = $semester->ipk*$bobot->ipk + $semester->semester*$bobot->semester + $semester->gaji*$bobot->gaji + $semester->tanggungan*$bobot->tanggungan + $semester->keaktifan*$bobot->keaktifan;  
		$sum_gaji = $gaji->ipk*$bobot->ipk + $gaji->semester*$bobot->semester + $gaji->gaji*$bobot->gaji + $gaji->tanggungan*$bobot->tanggungan + $gaji->keaktifan*$bobot->keaktifan;
		$sum_tanggungan = $tanggungan->ipk*$bobot->ipk + $tanggungan->semester*$bobot->semester + $tanggungan->gaji*$bobot->gaji + $tanggungan->tanggungan*$bobot->tanggungan + $tanggungan->keaktifan*$bobot->keaktifan;
		$sum_keaktifan = $keaktifan->ipk*$bobot->ipk + $keaktifan->semester*$bobot->semester + $keaktifan->gaji*$bobot->gaji + $keaktifan->tanggungan*$bobot->tanggungan + $keaktifan->keaktifan*$bobot->keaktifan;
		$lambda = ($sum_ipk/$bobot->ipk + $sum_semester/$bobot->semester+ $sum_gaji/$bobot->gaji+ $sum_tanggungan/$bobot->tanggungan+ $sum_keaktifan/$bobot->keaktifan)/5;
		$cr = (($lambda-5)/4) / 1.12;
		$data_cr = array('ipk' => $cr);
		$this->db->where('id', 'cr');
		$this->db->update('matriks_perbandingan_ppa', $data_cr);
		if($cr<=0.1)
			redirect('admin/matriks_ahp');
		else{
			$data = array(
			"ipk_ipk"=>$ipk->ipk,
			"ipk_semester"=>$ipk->semester,
			"ipk_gaji"=>$ipk->gaji,
			"ipk_tanggungan"=>$ipk->tanggungan,
			"ipk_keaktifan"=>$ipk->keaktifan,
			"semester_ipk"=>$semester->ipk,
			"semester_semester"=>$semester->semester,
			"semester_gaji"=>$semester->gaji,
			"semester_tanggungan"=>$semester->tanggungan,
			"semester_keaktifan"=>$semester->keaktifan,
			"gaji_ipk"=>$gaji->ipk,
			"gaji_semester"=>$gaji->semester,
			"gaji_gaji"=>$gaji->gaji,
			"gaji_tanggungan"=>$gaji->tanggungan,
			"gaji_keaktifan"=>$gaji->keaktifan,
			"tanggungan_ipk"=>$tanggungan->ipk,
			"tanggungan_semester"=>$tanggungan->semester,
			"tanggungan_gaji"=>$tanggungan->gaji,
			"tanggungan_tanggungan"=>$tanggungan->tanggungan,
			"tanggungan_keaktifan"=>$tanggungan->keaktifan,
			"keaktifan_ipk"=>$keaktifan->ipk,
			"keaktifan_semester"=>$keaktifan->semester,
			"keaktifan_gaji"=>$keaktifan->gaji,
			"keaktifan_tanggungan"=>$keaktifan->tanggungan,
			"keaktifan_keaktifan"=>$keaktifan->keaktifan,
			"total_ipk"=>$total->ipk,
			"total_semester"=>$total->semester,
			"total_gaji"=>$total->gaji,
			"total_tanggungan"=>$total->tanggungan,
			"total_keaktifan"=>$total->keaktifan,
			"bobot_ipk"=>$bobot->ipk,
			"bobot_semester"=>$bobot->semester,
			"bobot_gaji"=>$bobot->gaji,
			"bobot_tanggungan"=>$bobot->tanggungan,
			"bobot_keaktifan"=>$bobot->keaktifan,
			"cr"=>$cr,
			"salah"=>1);
			$this->load->view('admin/matriks_ahp_ubah',$data);
		}
	}
	public function parameter_ppa()
	{
		$this->load->view('admin/parameter_ppa');
	}
	public function parameter_ppa_ubah()
	{
		$this->load->view('admin/parameter_ppa_ubah');
	}
	public function proses_ubah_parameter_ppa()
	{
		for ($i=1; $i <=5 ; $i++) { 
            $row = $this->db->get_where('parameter_ppa', array('id_parameter' => $i))->row();
            $data = array('kaidah' => $this->input->post($row->nama_kriteria.'_kaidah'),
            				'tipe' => $this->input->post($row->nama_kriteria.'_tipe'),
	        				'bobot'=> $this->input->post($row->nama_kriteria.'_bobot'),
	        				'q'=>$this->input->post($row->nama_kriteria.'_q'),
	        				'p'=>$this->input->post($row->nama_kriteria.'_p'));
            $this->db->where('id_parameter', $i);
			$this->db->update('parameter_ppa', $data);
		}
        redirect('admin/parameter_ppa');
	}
	public function parameter_bpp()
	{
		$this->load->view('admin/parameter_bpp');
	}
	public function parameter_bpp_ubah()
	{
		$this->load->view('admin/parameter_bpp_ubah');
	}
	public function proses_ubah_parameter_bpp()
	{
		for ($i=1; $i <=5 ; $i++) { 
            $row = $this->db->get_where('parameter_bpp', array('id_parameter' => $i))->row();
            $data = array('kaidah' => $this->input->post($row->nama_kriteria.'_kaidah'),
            				'tipe' => $this->input->post($row->nama_kriteria.'_tipe'),
	        				'bobot'=> $this->input->post($row->nama_kriteria.'_bobot'),
	        				'q'=>$this->input->post($row->nama_kriteria.'_q'),
	        				'p'=>$this->input->post($row->nama_kriteria.'_p'));
            $this->db->where('id_parameter', $i);
			$this->db->update('parameter_bpp', $data);
		}
        redirect('admin/parameter_bpp');
	}
}
