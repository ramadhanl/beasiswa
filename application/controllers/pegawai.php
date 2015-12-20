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
	public function create_excel_ppa()
	{
		$this->load->library('excel');
		$sheet = new PHPExcel();
		$active_sheet = $sheet->getActiveSheet();
		$active_sheet->setCellValue('A1','Peringkat');
		$active_sheet->setCellValue('B1','NPM');
		$active_sheet->setCellValue('C1','Nama Mahasiswa');
		$this->db->order_by("ranking", "asc");
		$sql=$this->db->get_where('form_beasiswa_ppa',array('status_lolos' => 1, ));
		foreach ($sql->result() as $row) {
			$peringkat='A'.($row->ranking+1);
			$active_sheet->setCellValue($peringkat,$row->ranking);
			$active_sheet->setCellValue("B".($row->ranking+1),$row->npm);
			$active_sheet->setCellValue("C".($row->ranking+1),$row->nama_mhs);
		}
		foreach ($sheet->getWorksheetIterator() as $worksheet) {
		    $sheet->setActiveSheetIndex($sheet->getIndex($worksheet));
			$active_sheet = $sheet->getActiveSheet();
		    $cellIterator = $active_sheet->getRowIterator()->current()->getCellIterator();
		    $cellIterator->setIterateOnlyExistingCells(true);
		    foreach ($cellIterator as $cell) {
		        $active_sheet->getColumnDimension($cell->getColumn())->setAutoSize(true);
		    }
		}
		header('Content-Type: application/vnd.openxmlformats-officedocuments.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="hasil_seleksi_ppa.xlsx');
		header('Cache-Control: max-age=0'); 
		$objWriter = PHPExcel_IOFactory::createWriter($sheet, "Excel2007");
		$objWriter->save('php://output');
	}
	public function create_excel_bpp()
	{
		$this->load->library('excel');
		$sheet = new PHPExcel();
		$active_sheet = $sheet->getActiveSheet();
		$active_sheet->setCellValue('A1','Peringkat');
		$active_sheet->setCellValue('B1','NPM');
		$active_sheet->setCellValue('C1','Nama Mahasiswa');
		$this->db->order_by("ranking", "asc");
		$sql=$this->db->get_where('form_beasiswa_bpp',array('status_lolos' => 1, ));
		foreach ($sql->result() as $row) {
			$peringkat='A'.($row->ranking+1);
			$active_sheet->setCellValue($peringkat,$row->ranking);
			$active_sheet->setCellValue("B".($row->ranking+1),$row->npm);
			$active_sheet->setCellValue("C".($row->ranking+1),$row->nama_mhs);
		}
		header('Content-Type: application/vnd.openxmlformats-officedocuments.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="hasil_seleksi_bpp.xlsx');
		header('Cache-Control: max-age=0'); 
		$objWriter = PHPExcel_IOFactory::createWriter($sheet, "Excel2007");
		$objWriter->save('php://output');
	}
	public function hitung_skor_ppa()
	{
		$this->db->select_max('id_form');
		$result = $this->db->get('form_beasiswa_ppa')->row_array();
		$total=$result['id_form'];
		$leaving_flow=0;
		$entering_flow=0;
		$indeks=0;
		$indeks2=0;
		for ($id1=1; $id1<=$total; $id1++) { 
			for ($id2=1; $id2<=$total ; $id2++) { 
				if($id2!=$id1){
					$row1=$this->db->get_where('form_beasiswa_ppa', array('id_form' => $id1))->row();
					$atr1[1]=$row1->ipk;
					$atr1[2]=$row1->smt;
					$atr1[3]=$row1->penghasilan;
					$atr1[4]=$row1->jml_tanggungan;
					$atr1[5]=$row1->prestasi;
					
					$row2=$this->db->get_where('form_beasiswa_ppa', array('id_form' => $id2))->row();
					$atr2[1]=$row2->ipk;
					$atr2[2]=$row2->smt;
					$atr2[3]=$row2->penghasilan;
					$atr2[4]=$row2->jml_tanggungan;
					$atr2[5]=$row2->prestasi;
					$indeks=0;
					$indeks2=0;
					for ($i=1; $i<=5 ; $i++) { 
						$d[$i]=$atr1[$i]-$atr2[$i];
						$d2[$i]=$atr2[$i]-$atr1[$i];
						$par=$this->db->get_where('parameter_ppa', array('id_parameter' => $i))->row();
						if($par->kaidah==2){
							$d[$i]=$d[$i]*(-1);
							$d2[$i]=$d2[$i]*(-1);
						}
						switch ($par->tipe) {
						    case 1:
						        if($d[$i]<=0)
									$hd[$i]=0;
								else
									$hd[$i]=1;
								
								if($d2[$i]<=0)
									$hd2[$i]=0;
								else
									$hd2[$i]=1;
						        break;
						    case 2:
						        if($d[$i]<=$par->q)
									$hd[$i]=0;
								else
									$hd[$i]=1;

								if($d2[$i]<=$par->q)
									$hd2[$i]=0;
								else
									$hd2[$i]=1;
						        break;
						    case 3:
						        if($d[$i]<=0)
									$hd[$i]=0;
								else if($d[$i]<=$par->p)
									$hd[$i]=$d[$i]/$par->p;
								else
									$hd[$i]=1;

								if($d2[$i]<=0)
									$hd2[$i]=0;
								else if($d2[$i]<=$par->p)
									$hd2[$i]=$d2[$i]/$par->p;
								else
									$hd2[$i]=1;
						        break;
						    case 4:
						    	if($d[$i]<=$par->q)
									$hd[$i]=0;
								else if($d[$i]<=$par->p)
									$hd[$i]=1/2;
								else
									$hd[$i]=1;

								if($d2[$i]<=$par->q)
									$hd2[$i]=0;
								else if($d2[$i]<=$par->p)
									$hd2[$i]=1/2;
								else
									$hd2[$i]=1;
						    	break;
						    case 5:
						    	if($d[$i]<=$par->q){
									$hd[$i]=0;
									//echo "nol";
						    	}
								else if($d[$i]<=$par->p){
									$hd[$i]=($d[$i]-$par->q)/($par->p-$par->q);
									//echo "tengah";
								}
								else{
									$hd[$i]=1;
									//echo "satu";
								}

								if($d2[$i]<=$par->q)
									$hd2[$i]=0;
								else if($d2[$i]<=$par->p)
									$hd2[$i]=($d2[$i]-$par->q)/($par->p-$par->q);
								else
									$hd2[$i]=1;
						    	break;
						}
					//echo "<br>atr1,atr2(".$atr1[$i]." - ".$atr2[$i].")";
					//echo "<br>(hd:".$hd[$i].",tipe:".$par->tipe.",d:".$d[$i].",q:".$par->q.",p:".$par->p.",bobot:".$par->bobot.")<br>";
					//echo "<br>(hd2:".$hd2[$i].",tipe:".$par->tipe.",d:".$d2[$i].",q:".$par->q.",p:".$par->p.",bobot:".$par->bobot.")<br>+ ";
					$indeks=($hd[$i]*$par->bobot)+$indeks;
					$indeks2=($hd2[$i]*$par->bobot)+$indeks2;

					}
					//echo "Mhs".$id2.":".round($indeks,2)."|<br>";
					//echo "(".$hd[1]."+".$hd[2]."+".$hd[3]."+".$hd[4]."+".$hd[5].")"." <br><br> ";
					//echo "<br>|indeks1 = ".round($indeks,3)."|indeks2 = ".round($indeks2,3).")<br><br><br>";
					
					//if($id2%5==0)
						//echo "<br>";
					$leaving_flow=$leaving_flow+$indeks;
					$entering_flow=$entering_flow+$indeks2;
				}
			
			
			//echo "<h4>".$leaving_flow."</h4>";
		}
			//echo "<h4>".$leaving_flow."</h4>";
			$leaving_flow=(1/($total-1))*$leaving_flow;
			$entering_flow=(1/($total-1))*$entering_flow;
			$net_flow=$leaving_flow-$entering_flow;
			//echo "<h3>leaving_flow(Mhs".$id1.") : ".round($leaving_flow,3)."</h3>";
			//echo "<h3>entering_flow(Mhs".$id1.") : ".round($entering_flow,3)."</h3>";
			//echo "<h3>NET_FLOW(Mhs".$id1.") : ".round($leaving_flow-$entering_flow,3)."</h3>";
			$data = array('leaving_flow' => $leaving_flow,'entering_flow' =>$entering_flow,'net_flow' =>$leaving_flow-$entering_flow);
			$this->db->where('id_form', $id1);
			$this->db->update('form_beasiswa_ppa', $data);
			$leaving_flow=0;
			$entering_flow=0;
		}
		$this->db->select('*');
		$this->db->from('form_beasiswa_ppa');
		//$this->db->limit(50);
		$this->db->order_by("net_flow","desc");
		$result = $this->db->get()->result();
		$count=1;
		foreach ($result as $row) {
			if($count<=50)
				$data = array('status_lolos' => 1,'ranking' =>$count);
			else
				$data = array('status_lolos' => 0,'ranking' =>$count);
			$this->db->where('id_form', $row->id_form);
			$this->db->update('form_beasiswa_ppa', $data);
			$count++;
		}
		redirect(base_url("pegawai/hasil_seleksi_ppa"));
	}

	public function random_ppa()
	{
		$this->db->empty_table('form_beasiswa_ppa'); 
		$this->db->query('ALTER TABLE form_beasiswa_ppa AUTO_INCREMENT = 1');
		for ($i=1; $i<=60 ; $i++) { 
			$ipk=mt_rand(1,3)+(mt_rand(1,100)/100);
			$data = array(
			'nama_lengkap' => "Mahasiswa".$i,
			'ipk'=> $ipk,
			'semester'=>mt_rand(1,10),
			'level_gaji_ortu'=> mt_rand(1,5),
			'jumlah_tanggungan_ortu'=>mt_rand(1,15),
			'keaktifan'=>mt_rand(0,1));
			$this->db->insert('form_beasiswa_ppa', $data); 
		}

	}
	public function random_bpp()
	{
		$this->db->empty_table('form_beasiswa_bpp'); 
		$this->db->query('ALTER TABLE form_beasiswa_ppa AUTO_INCREMENT = 1');
		for ($i=1; $i<=60 ; $i++) { 
			$ipk=mt_rand(1,3)+(mt_rand(1,100)/100);
			$data = array(
			'nama_lengkap' => "Mahasiswa".$i,
			'ipk'=> $ipk,
			'semester'=>mt_rand(1,10),
			'level_gaji_ortu'=> mt_rand(1,5),
			'jumlah_tanggungan_ortu'=>mt_rand(1,15),
			'keaktifan'=>mt_rand(0,1));
			$this->db->insert('form_beasiswa_ppa', $data); 
		}

	}
	public function proses_seleksi_bpp()
	{
		$this->load->view('pegawai/proses_seleksi_bpp');
	}

	public function hitung_skor_bpp()
	{
		$this->db->select_max('id_form');
		$result = $this->db->get('form_beasiswa_bpp')->row_array();
		$total=$result['id_form'];
		$leaving_flow=0;
		$entering_flow=0;
		$indeks=0;
		$indeks2=0;
		for ($id1=1; $id1<=$total; $id1++) { 
			for ($id2=1; $id2<=$total ; $id2++) { 
				if($id2!=$id1){
					$row1=$this->db->get_where('form_beasiswa_bpp', array('id_form' => $id1))->row();
					$atr1[1]=$row1->ipk;
					$atr1[2]=$row1->smt;
					$atr1[3]=$row1->penghasilan;
					$atr1[4]=$row1->jml_tanggungan;
					$atr1[5]=$row1->prestasi;
					
					$row2=$this->db->get_where('form_beasiswa_bpp', array('id_form' => $id2))->row();
					$atr2[1]=$row2->ipk;
					$atr2[2]=$row2->smt;
					$atr2[3]=$row2->penghasilan;
					$atr2[4]=$row2->jml_tanggungan;
					$atr2[5]=$row2->prestasi;
					$indeks=0;
					$indeks2=0;
					for ($i=1; $i<=5 ; $i++) { 
						$d[$i]=$atr1[$i]-$atr2[$i];
						$d2[$i]=$atr2[$i]-$atr1[$i];
						$par=$this->db->get_where('parameter_bpp', array('id_parameter' => $i))->row();
						if($par->kaidah==2){
							$d[$i]=$d[$i]*(-1);
							$d2[$i]=$d2[$i]*(-1);
						}
						switch ($par->tipe) {
						    case 1:
						        if($d[$i]<=0)
									$hd[$i]=0;
								else
									$hd[$i]=1;
								
								if($d2[$i]<=0)
									$hd2[$i]=0;
								else
									$hd2[$i]=1;
						        break;
						    case 2:
						        if($d[$i]<=$par->q)
									$hd[$i]=0;
								else
									$hd[$i]=1;

								if($d2[$i]<=$par->q)
									$hd2[$i]=0;
								else
									$hd2[$i]=1;
						        break;
						    case 3:
						        if($d[$i]<=0)
									$hd[$i]=0;
								else if($d[$i]<=$par->p)
									$hd[$i]=$d[$i]/$par->p;
								else
									$hd[$i]=1;

								if($d2[$i]<=0)
									$hd2[$i]=0;
								else if($d2[$i]<=$par->p)
									$hd2[$i]=$d2[$i]/$par->p;
								else
									$hd2[$i]=1;
						        break;
						    case 4:
						    	if($d[$i]<=$par->q)
									$hd[$i]=0;
								else if($d[$i]<=$par->p)
									$hd[$i]=1/2;
								else
									$hd[$i]=1;

								if($d2[$i]<=$par->q)
									$hd2[$i]=0;
								else if($d2[$i]<=$par->p)
									$hd2[$i]=1/2;
								else
									$hd2[$i]=1;
						    	break;
						    case 5:
						    	if($d[$i]<=$par->q){
									$hd[$i]=0;
									//echo "nol";
						    	}
								else if($d[$i]<=$par->p){
									$hd[$i]=($d[$i]-$par->q)/($par->p-$par->q);
									//echo "tengah";
								}
								else{
									$hd[$i]=1;
									//echo "satu";
								}

								if($d2[$i]<=$par->q)
									$hd2[$i]=0;
								else if($d2[$i]<=$par->p)
									$hd2[$i]=($d2[$i]-$par->q)/($par->p-$par->q);
								else
									$hd2[$i]=1;
						    	break;
						}
					//echo "<br>atr1,atr2(".$atr1[$i]." - ".$atr2[$i].")";
					//echo "<br>(hd:".$hd[$i].",tipe:".$par->tipe.",d:".$d[$i].",q:".$par->q.",p:".$par->p.",bobot:".$par->bobot.")<br>";
					//echo "<br>(hd2:".$hd2[$i].",tipe:".$par->tipe.",d:".$d2[$i].",q:".$par->q.",p:".$par->p.",bobot:".$par->bobot.")<br>+ ";
					$indeks=($hd[$i]*$par->bobot)+$indeks;
					$indeks2=($hd2[$i]*$par->bobot)+$indeks2;

					}
					//echo "Mhs".$id2.":".round($indeks,2)."|<br>";
					//echo "(".$hd[1]."+".$hd[2]."+".$hd[3]."+".$hd[4]."+".$hd[5].")"." <br><br> ";
					//echo "<br>|indeks1 = ".round($indeks,3)."|indeks2 = ".round($indeks2,3).")<br><br><br>";
					
					//if($id2%5==0)
						//echo "<br>";
					$leaving_flow=$leaving_flow+$indeks;
					$entering_flow=$entering_flow+$indeks2;
				}
			
			
			//echo "<h4>".$leaving_flow."</h4>";
		}
			//echo "<h4>".$leaving_flow."</h4>";
			$leaving_flow=(1/($total-1))*$leaving_flow;
			$entering_flow=(1/($total-1))*$entering_flow;
			$net_flow=$leaving_flow-$entering_flow;
			//echo "<h3>leaving_flow(Mhs".$id1.") : ".round($leaving_flow,3)."</h3>";
			//echo "<h3>entering_flow(Mhs".$id1.") : ".round($entering_flow,3)."</h3>";
			//echo "<h3>NET_FLOW(Mhs".$id1.") : ".round($leaving_flow-$entering_flow,3)."</h3>";
			$data = array('leaving_flow' => $leaving_flow,'entering_flow' =>$entering_flow,'net_flow' =>$leaving_flow-$entering_flow);
			$this->db->where('id_form', $id1);
			$this->db->update('form_beasiswa_bpp', $data);
			$leaving_flow=0;
			$entering_flow=0;
		}
		$this->db->select('*');
		$this->db->from('form_beasiswa_bpp');
		//$this->db->limit(50);
		$this->db->order_by("net_flow","desc");
		$result = $this->db->get()->result();
		$count=1;
		foreach ($result as $row) {
			if($count<=50)
				$data = array('status_lolos' => 1,'ranking' =>$count);
			else
				$data = array('status_lolos' => 0,'ranking' =>$count);
			$this->db->where('id_form', $row->id_form);
			$this->db->update('form_beasiswa_bpp', $data);
			$count++;
		}
		redirect(base_url("pegawai/hasil_seleksi_bpp"));
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
