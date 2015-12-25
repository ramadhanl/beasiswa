<?php

class Beasiswa_models extends CI_Model {

   
   public function __construct()
   {
      // Call the CI_Model constructor
      parent::__construct();
   }

   public function login($username,$password)
   {
      $sql=$this->db->get_where('user',array('username'=>$username,'password'=>$password));
      if($sql->num_rows()!=0){
         $session = array(
            'username' => $sql->row()->username,
            'name' => $sql->row()->name,
            'password' => $sql->row()->password,
            'privilege' =>$sql->row()->privilege
         );
         $this->session->set_userdata($session);
         return 1;
      }
      else return 0;
   }

   //MAHASISWA
   public function insert_data($par,$data)
   {
      if($par=='ppa')
         $this->db->insert('form_beasiswa_ppa', $data); 
      else
         $this->db->insert('form_beasiswa_bpp', $data); 
   }

   //PEGAWAI
   public function pendaftar_beasiswa($tipe,$stat)
   {
      if($stat=='after')
         $this->db->order_by("ranking", "asc");
      if($tipe=='ppa')
         $sql = $this->db->get_where('form_beasiswa_ppa');
      else
         $sql = $this->db->get_where('form_beasiswa_bpp');
      $count=0;
      foreach ($sql->result() as $row) {
         $count++;
         $id_form = $row->id_form;
         $no = $count;
         $nama = $row->nama_mhs;
         $ipk = $row->ipk;
         $semester = $row->smt;
         $gaji = $row->penghasilan;
         $tanggungan = $row->jml_tanggungan;
         $keaktifan = $row->prestasi;
         $leaving_flow = $row->leaving_flow;
         $entering_flow = $row->entering_flow;
         $net_flow = $row->net_flow;
         $status_lolos = $row->status_lolos;
         $mahasiswa[$count] = array('id_form'=>$id_form,'leaving_flow' => $leaving_flow,'entering_flow' => $entering_flow,'net_flow' => $net_flow,'status_lolos' => $status_lolos,'no' => $no,'nama'=> $nama,'ipk'=> $ipk,'semester'=> $gaji,'gaji'=> $gaji,'tanggungan'=> $tanggungan,'keaktifan'=>$keaktifan );
      }
      return $mahasiswa;
   }

   public function hitung_skor($tipe_beasiswa)
   {
      $this->db->select_max('id_form');
      if($tipe_beasiswa=='ppa')
         $result = $this->db->get('form_beasiswa_ppa')->row_array();
      else
         $result = $this->db->get('form_beasiswa_bpp')->row_array();
      $total=$result['id_form'];
      $leaving_flow=0;$entering_flow=0;$indeks=0;$indeks2=0;
      for ($id1=1; $id1<=$total; $id1++) { 
         for ($id2=1; $id2<=$total ; $id2++) { 
            if($id2!=$id1){
               if($tipe_beasiswa=='ppa')
                  $row1=$this->db->get_where('form_beasiswa_ppa', array('id_form' => $id1))->row();
               else
                  $row1=$this->db->get_where('form_beasiswa_bpp', array('id_form' => $id1))->row();
               $atr1[1]=$row1->ipk;
               $atr1[2]=$row1->smt;
               $atr1[3]=$row1->penghasilan;
               $atr1[4]=$row1->jml_tanggungan;
               $atr1[5]=$row1->prestasi;
               
               if($tipe_beasiswa=='ppa')
                  $row2=$this->db->get_where('form_beasiswa_ppa', array('id_form' => $id2))->row();
               else
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
                  if($tipe_beasiswa=='ppa')
                     $par=$this->db->get_where('parameter_ppa', array('id_parameter' => $i))->row();
                  else
                     $par=$this->db->get_where('parameter_bpp', array('id_parameter' => $i))->row();
                  if($par->kaidah=='minimasi'){
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
               $indeks=($hd[$i]*$par->bobot)+$indeks;
               $indeks2=($hd2[$i]*$par->bobot)+$indeks2;

               }
               $leaving_flow=$leaving_flow+$indeks;
               $entering_flow=$entering_flow+$indeks2;
            }
      }
         $leaving_flow=(1/($total-1))*$leaving_flow;
         //echo $leaving_flow."<br>";
         $entering_flow=(1/($total-1))*$entering_flow;
         $net_flow=$leaving_flow-$entering_flow;
         $data = array('leaving_flow' => $leaving_flow,'entering_flow' =>$entering_flow,'net_flow' =>$leaving_flow-$entering_flow);
         //var_dump($data);
         $this->db->where('id_form', $id1);
         if($tipe_beasiswa=='ppa')
            $this->db->update('form_beasiswa_ppa', $data);
         else
            $this->db->update('form_beasiswa_bpp', $data);
         $leaving_flow=0;
         $entering_flow=0;
      }
      $this->db->select('*');
      if($tipe_beasiswa=='ppa')
         $this->db->from('form_beasiswa_ppa');
      else
         $this->db->from('form_beasiswa_bpp');
      $this->db->order_by("net_flow","desc");
      $result = $this->db->get()->result();
      $count=1;
      foreach ($result as $row) {
         if($count<=50)
            $data = array('status_lolos' => 1,'ranking' =>$count);
         else
            $data = array('status_lolos' => 0,'ranking' =>$count);
         $this->db->where('id_form', $row->id_form);
         if($tipe_beasiswa=='ppa')
            $this->db->update('form_beasiswa_ppa', $data);
         else
            $this->db->update('form_beasiswa_bpp', $data);
         $count++;
      }
   }

   public function save_as_excel($par,$versi)
   {
      $this->load->library('excel');
      $sheet = new PHPExcel();
      $active_sheet = $sheet->getActiveSheet();
      if($versi=='simple'){
         $active_sheet->setCellValue('A1','Peringkat')->getColumnDimension()->setAutoSize(true);
         $active_sheet->setCellValue('B1','NPM')->getColumnDimension()->setAutoSize(true);
         $active_sheet->setCellValue('C1','Nama Mahasiswa')->getColumnDimension()->setAutoSize(true);
         $this->db->order_by("ranking", "asc");
         if($par=='ppa')
            $sql=$this->db->get_where('form_beasiswa_ppa',array('status_lolos' => 1, ));
         else
            $sql=$this->db->get_where('form_beasiswa_bpp',array('status_lolos' => 1, ));
         foreach ($sql->result() as $row) {
            $peringkat='A'.($row->ranking+1);
            $active_sheet->setCellValue($peringkat,$row->ranking)->getColumnDimension('A')->setAutoSize(true);
            $active_sheet->setCellValue("B".($row->ranking+1),$row->npm)->getColumnDimension('B')->setAutoSize(true);
            $active_sheet->setCellValue("C".($row->ranking+1),$row->nama_mhs)->getColumnDimension('C')->setAutoSize(true);
         }
         header('Content-Type: application/vnd.openxmlformats-officedocuments.spreadsheetml.sheet');
         if($par=='ppa')
            header('Content-Disposition: attachment;filename="Daftar Penerima Beasiswa PPA.xlsx');
         else
            header('Content-Disposition: attachment;filename="Daftar Penerima Beasiswa BPP.xlsx');
      }
      else{
         $active_sheet->setCellValue('A1','Peringkat')->getColumnDimension()->setAutoSize(true);
         $active_sheet->setCellValue('B1','NPM')->getColumnDimension()->setAutoSize(true);
         $active_sheet->setCellValue('C1','Nama Mahasiswa')->getColumnDimension()->setAutoSize(true);
         $active_sheet->setCellValue('D1','Leaving Flow')->getColumnDimension()->setAutoSize(true);
         $active_sheet->setCellValue('E1','Entering Flow')->getColumnDimension()->setAutoSize(true);
         $active_sheet->setCellValue('F1','Net Flow')->getColumnDimension()->setAutoSize(true);
         $active_sheet->setCellValue('G1','Id Formulir')->getColumnDimension()->setAutoSize(true);
         $this->db->order_by("ranking", "asc");
         if($par=='ppa')
            $sql=$this->db->get('form_beasiswa_ppa');
         else
            $sql=$this->db->get('form_beasiswa_bpp');
         foreach ($sql->result() as $row) {
            $peringkat='A'.($row->ranking+1);
            $active_sheet->setCellValue($peringkat,$row->ranking)->getColumnDimension('A')->setAutoSize(true);
            $active_sheet->setCellValue("B".($row->ranking+1),$row->npm)->getColumnDimension('B')->setAutoSize(true);
            $active_sheet->setCellValue("C".($row->ranking+1),$row->nama_mhs)->getColumnDimension('C')->setAutoSize(true);
            $active_sheet->setCellValue("D".($row->ranking+1),$row->leaving_flow)->getColumnDimension('D')->setAutoSize(true);
            $active_sheet->setCellValue("E".($row->ranking+1),$row->entering_flow)->getColumnDimension('E')->setAutoSize(true);
            $active_sheet->setCellValue("F".($row->ranking+1),$row->net_flow)->getColumnDimension('F')->setAutoSize(true);
            $active_sheet->setCellValue("G".($row->ranking+1),$row->id_form)->getColumnDimension('G')->setAutoSize(true);
         }
         header('Content-Type: application/vnd.openxmlformats-officedocuments.spreadsheetml.sheet');
         if($par=='ppa')
            header('Content-Disposition: attachment;filename="Hasil Proses Seleksi Beasiswa PPA.xlsx');
         else
            header('Content-Disposition: attachment;filename="Hasil Proses Seleksi Beasiswa BPP.xlsx');
      }
      
      header('Cache-Control: max-age=0'); 
      $objWriter = PHPExcel_IOFactory::createWriter($sheet, "Excel2007");
      $objWriter->save('php://output');
   }

   public function matriks_excel($par)
   {
      if($par=='ppa'){
         $parameter_ipk = $this->db->get_where('parameter_ppa', array('nama_kriteria' => 'ipk'))->row();
         $parameter_semester = $this->db->get_where('parameter_ppa', array('nama_kriteria' => 'semester'))->row();
         $parameter_gaji = $this->db->get_where('parameter_ppa', array('nama_kriteria' => 'gaji'))->row();
         $parameter_tanggungan = $this->db->get_where('parameter_ppa', array('nama_kriteria' => 'tanggungan'))->row();
         $parameter_keaktifan = $this->db->get_where('parameter_ppa', array('nama_kriteria' => 'keaktifan'))->row();
      }
      else{
         $parameter_ipk = $this->db->get_where('parameter_bpp', array('nama_kriteria' => 'ipk'))->row();
         $parameter_semester = $this->db->get_where('parameter_bpp', array('nama_kriteria' => 'semester'))->row();
         $parameter_gaji = $this->db->get_where('parameter_bpp', array('nama_kriteria' => 'gaji'))->row();
         $parameter_tanggungan = $this->db->get_where('parameter_bpp', array('nama_kriteria' => 'tanggungan'))->row();
         $parameter_keaktifan = $this->db->get_where('parameter_bpp', array('nama_kriteria' => 'keaktifan'))->row();
      }
      $this->load->library('excel');
      $sheet = new PHPExcel();
      $active_sheet = $sheet->getActiveSheet();
      $active_sheet->setCellValue('A1','ALTERNATIF')->getColumnDimension('A')->setAutoSize(true);
      if($par=='ppa')
         $sql=$this->db->get('form_beasiswa_ppa');
      else
         $sql=$this->db->get('form_beasiswa_bpp');
      $column1='B';$count1=1;$column2='B';$count2=2;
      foreach ($sql->result() as $row) {
         $active_sheet->setCellValue($column1++.'1',"Mhs ".$count1)->getColumnDimension()->setAutoSize(true);
         $active_sheet->setCellValue('A'.$count2,"Mhs ".$count1++)->getColumnDimension()->setAutoSize(true);

         if($par=='ppa')
            $sql2=$this->db->get('form_beasiswa_ppa');
         else
            $sql2=$this->db->get('form_beasiswa_bpp');
         $column_preferensi='B';
         foreach ($sql2->result() as $row2) {
            //indeks ipk
            $d = $row->ipk - $row2->ipk;
            $indeks_ipk = $this->promethe($d,$parameter_ipk->kaidah,$parameter_ipk->tipe,$parameter_ipk->q,$parameter_ipk->p);

            //indeks semester
            $d = $row->smt - $row2->smt;
            $indeks_semester = $this->promethe($d,$parameter_semester->kaidah,$parameter_semester->tipe,$parameter_semester->q,$parameter_semester->p);

            //indeks gaji
            $d = $row->penghasilan - $row2->penghasilan;
            $indeks_gaji = $this->promethe($d,$parameter_gaji->kaidah,$parameter_gaji->tipe,$parameter_gaji->q,$parameter_gaji->p);

            //indeks tanggungan
            $d = $row->jml_tanggungan - $row2->jml_tanggungan;
            $indeks_tanggungan = $this->promethe($d,$parameter_tanggungan->kaidah,$parameter_tanggungan->tipe,$parameter_tanggungan->q,$parameter_tanggungan->p);

            //indeks keaktifan
            $d = $row->prestasi - $row2->prestasi;
            $indeks_keaktifan = $this->promethe($d,$parameter_keaktifan->kaidah,$parameter_keaktifan->tipe,$parameter_keaktifan->q,$parameter_keaktifan->p);

            $indeks_preferensi = $indeks_ipk*$parameter_ipk->bobot + $indeks_semester*$parameter_semester->bobot + $indeks_gaji*$parameter_gaji->bobot + $indeks_tanggungan*$parameter_tanggungan->bobot + $indeks_keaktifan*$parameter_keaktifan->bobot;


            $active_sheet->setCellValue($column_preferensi++.$count2,$indeks_preferensi)->getColumnDimension()->setAutoSize(true);
         }
         $count2++;
      }

      if($par=='ppa')
         $sql=$this->db->get('form_beasiswa_ppa');
      else
         $sql=$this->db->get('form_beasiswa_bpp');
      $column1++;$column1++;$column1++;
      $column=$column1;
      $column1;$column2=++$column;$temp2=$column2;$column3=++$temp2;$temp3=$column3;$column4=++$temp3;$count=1;
      $active_sheet->setCellValue($column1.$count,'Leaving Flow')->getColumnDimension($column1)->setAutoSize(true);
      $active_sheet->setCellValue($column2.$count,'Entering Flow')->getColumnDimension($column2)->setAutoSize(true);
      $active_sheet->setCellValue($column3.$count,'Net Flow')->getColumnDimension($column3)->setAutoSize(true);
      $active_sheet->setCellValue($column4.$count++,'Ranking')->getColumnDimension($column4)->setAutoSize(true);
      foreach ($sql->result() as $row) {
         $active_sheet->setCellValue($column1.$count,$row->leaving_flow)->getColumnDimension()->setAutoSize(true);
         $active_sheet->setCellValue($column2.$count,$row->entering_flow)->getColumnDimension()->setAutoSize(true);
         $active_sheet->setCellValue($column3.$count,$row->net_flow)->getColumnDimension()->setAutoSize(true);
         $active_sheet->setCellValue($column4.$count++,$row->ranking)->getColumnDimension()->setAutoSize(true);
      }

      header('Content-Type: application/vnd.openxmlformats-officedocuments.spreadsheetml.sheet');
      if($par=='ppa')
         header('Content-Disposition: attachment;filename="Matriks PPA.xlsx');
      else
         header('Content-Disposition: attachment;filename="Matriks BPP.xlsx');
      
      header('Cache-Control: max-age=0'); 
      $objWriter = PHPExcel_IOFactory::createWriter($sheet, "Excel2007");
      $objWriter->save('php://output');
   }

   public function nilai_preferensi($par,$id_form)
   {
      if($par=='ppa'){
         $parameter_ipk = $this->db->get_where('parameter_ppa', array('nama_kriteria' => 'ipk'))->row();
         $parameter_semester = $this->db->get_where('parameter_ppa', array('nama_kriteria' => 'semester'))->row();
         $parameter_gaji = $this->db->get_where('parameter_ppa', array('nama_kriteria' => 'gaji'))->row();
         $parameter_tanggungan = $this->db->get_where('parameter_ppa', array('nama_kriteria' => 'tanggungan'))->row();
         $parameter_keaktifan = $this->db->get_where('parameter_ppa', array('nama_kriteria' => 'keaktifan'))->row();
         $mhs = $this->db->get_where('form_beasiswa_ppa', array('id_form' => $id_form))->row();
      }
      else{
         $parameter_ipk = $this->db->get_where('parameter_bpp', array('nama_kriteria' => 'ipk'))->row();
         $parameter_semester = $this->db->get_where('parameter_bpp', array('nama_kriteria' => 'semester'))->row();
         $parameter_gaji = $this->db->get_where('parameter_bpp', array('nama_kriteria' => 'gaji'))->row();
         $parameter_tanggungan = $this->db->get_where('parameter_bpp', array('nama_kriteria' => 'tanggungan'))->row();
         $parameter_keaktifan = $this->db->get_where('parameter_bpp', array('nama_kriteria' => 'keaktifan'))->row();
         $mhs = $this->db->get_where('form_beasiswa_bpp', array('id_form' => $id_form))->row();
      }
      if($par=='ppa')
         $sql = $this->db->get('form_beasiswa_ppa');
      else
         $sql = $this->db->get('form_beasiswa_bpp');
      $count=1;
      foreach ($sql->result() as $row) {
         if($row->id_form!=$id_form){
            //indeks ipk
            $d = $mhs->ipk - $row->ipk;
            $indeks_ipk = $this->promethe($d,$parameter_ipk->kaidah,$parameter_ipk->tipe,$parameter_ipk->q,$parameter_ipk->p);

            //indeks semester
            $d = $mhs->smt - $row->smt;
            $indeks_semester = $this->promethe($d,$parameter_semester->kaidah,$parameter_semester->tipe,$parameter_semester->q,$parameter_semester->p);

            //indeks gaji
            $d = $mhs->penghasilan - $row->penghasilan;
            $indeks_gaji = $this->promethe($d,$parameter_gaji->kaidah,$parameter_gaji->tipe,$parameter_gaji->q,$parameter_gaji->p);

            //indeks tanggungan
            $d = $mhs->jml_tanggungan - $row->jml_tanggungan;
            $indeks_tanggungan = $this->promethe($d,$parameter_tanggungan->kaidah,$parameter_tanggungan->tipe,$parameter_tanggungan->q,$parameter_tanggungan->p);

            //indeks keaktifan
            $d = $mhs->prestasi - $row->prestasi;
            $indeks_keaktifan = $this->promethe($d,$parameter_keaktifan->kaidah,$parameter_keaktifan->tipe,$parameter_keaktifan->q,$parameter_keaktifan->p);

            $indeks_preferensi = $indeks_ipk*$parameter_ipk->bobot + $indeks_semester*$parameter_semester->bobot + $indeks_gaji*$parameter_gaji->bobot + $indeks_tanggungan*$parameter_tanggungan->bobot + $indeks_keaktifan*$parameter_keaktifan->bobot;
            $data_preferensi[$count++]=array('no'=>$row->id_form,'nama'=>$row->nama_mhs,'indeks_ipk'=>$indeks_ipk,'indeks_semester'=>$indeks_semester,'indeks_gaji'=>$indeks_gaji,'indeks_tanggungan'=>$indeks_tanggungan,'indeks_keaktifan'=>$indeks_keaktifan,'indeks_preferensi'=>$indeks_preferensi);
         }
      }
      return array('data_preferensi'=>$data_preferensi,'data_mhs'=>$mhs);

   }
   
   public function promethe($d,$kaidah,$tipe,$q,$p)
   {
      if($kaidah=='minimasi')
         $d = $d*(-1);
      if($tipe==1){
         if($d<=0) $hd=0;
         else $hd=1;
      }
      else if($tipe==2){
         if($d<=$q) $hd=0;
         else $hd=1;
      }
      else if($tipe==3){
         if($d<=0) $hd=0;
         else if($d<=$p) $hd=$d/$p;
         else $hd=1;
      }
      else if($tipe==4){
         if($d<=$q) $hd=0;
         else if($d<=$p) $hd=1/2;
         else $hd=1;
      }
      else if($tipe==5){
         if($d<=$q) $hd=0;
         else if($d<=$p) $hd=($d-$q)/($p-$q);
         else $hd=1;
      }
      return $hd;
   }
   //ADMIN
   public function nilai_matriks($par)
   {
      $count=1;
      if($par=='value_only')
         $this->db->limit(5);
      $sql = $this->db->get_where('matriks_ahp');
      foreach ($sql->result() as $row) {
            $kriteria[$count++]=array('kriteria'=>$row->id,'ipk'=>$row->ipk,'semester'=>$row->semester,'gaji'=>$row->gaji,'tanggungan'=>$row->tanggungan,'keaktifan'=>$row->keaktifan);
      }
      return $kriteria;
   }

   public function simpan_matriks($data_ipk,$data_semester,$data_gaji,$data_tanggungan,$data_keaktifan)
   {
      $this->db->where('id', 'ipk');
      $this->db->update('matriks_ahp', $data_ipk);
      $this->db->where('id', 'semester');
      $this->db->update('matriks_ahp', $data_semester);
      $this->db->where('id', 'gaji');
      $this->db->update('matriks_ahp', $data_gaji);
      $this->db->where('id', 'tanggungan');
      $this->db->update('matriks_ahp', $data_tanggungan);
      $this->db->where('id', 'keaktifan');
      $this->db->update('matriks_ahp', $data_keaktifan);

      $this->db->limit(5);
      $total_ipk=0;$total_semester=0;$total_ipk=0;$total_gaji=0;$total_tanggungan=0;$total_keaktifan=0;
      $sql = $this->db->get_where('matriks_ahp');
      foreach ($sql->result() as $row) {
         $total_ipk+=$row->ipk;
         $total_semester+=$row->semester;
         $total_gaji+=$row->gaji;
         $total_tanggungan+=$row->tanggungan;
         $total_keaktifan+=$row->keaktifan;
      }
      $data_total = array('ipk' => $total_ipk,'semester'=>$total_semester,'gaji'=>$total_gaji,'tanggungan'=>$total_tanggungan,'keaktifan'=>$total_keaktifan);
      $this->db->where('id', 'total');
      $this->db->update('matriks_ahp', $data_total);

      $this->db->limit(5);$count=1;
      $sql = $this->db->get_where('matriks_ahp');
      foreach ($sql->result() as $row) {
         $bobot[$count]=($row->ipk/$total_ipk + $row->semester/$total_semester + $row->gaji/$total_gaji + $row->tanggungan/$total_tanggungan + $row->keaktifan/$total_keaktifan)/5;
         $this->db->where('id_parameter', $count);
         $this->db->update('parameter_ppa', array('bobot'=>$bobot[$count]));
         $this->db->where('id_parameter', $count);
         $this->db->update('parameter_bpp', array('bobot'=>$bobot[$count++]));
      }
      $data_bobot = array('ipk' => $bobot[1],'semester'=>$bobot[2],'gaji'=>$bobot[3],'tanggungan'=>$bobot[4],'keaktifan'=>$bobot[5]);
      $this->db->where('id', 'bobot');
      $this->db->update('matriks_ahp', $data_bobot);
      
      $bobot= $this->db->get_where('matriks_ahp', array('id' => 'bobot'))->row();
      $this->db->limit(5);$count=1;
      $sql = $this->db->get_where('matriks_ahp');
      foreach ($sql->result() as $row) {
         $sum[$count++]=($row->ipk*$bobot->ipk + $row->semester*$bobot->semester + $row->gaji*$bobot->gaji + $row->tanggungan*$bobot->tanggungan + $row->keaktifan*$bobot->keaktifan)/5;
      }
      $lambda=($sum[1]/$bobot->ipk + $sum[2]/$bobot->semester + $sum[3]/$bobot->gaji + $sum[4]/$bobot->tanggungan + $sum[5]/$bobot->keaktifan);
      $cr = (($lambda-5)/4) / 1.12;
      $data_cr = array('ipk' => $cr);
      $this->db->where('id', 'cr');
      $this->db->update('matriks_ahp', $data_cr);
      if($cr<=0.1)
         return 1;
      else
         return 0;
   }

   public function nilai_parameter($par)
   {
      $count=1;
      if($par=='ppa')
         $sql = $this->db->get_where('parameter_ppa');
      else
         $sql = $this->db->get_where('parameter_bpp');
      foreach ($sql->result() as $row) {
            $kriteria[$count++]=array('no'=>$row->id_parameter,'kriteria'=>$row->nama_kriteria,'kaidah'=>$row->kaidah,'tipe'=>$row->tipe,'bobot'=>$row->bobot,'q'=>$row->q,'p'=>$row->p);
      }
      return $kriteria;
   }

   public function simpan_parameter($par,$data_ipk,$data_semester,$data_gaji,$data_tanggungan,$data_keaktifan)
   {
      if ($par=='ppa') {
         $this->db->where('nama_kriteria', 'ipk');
         $this->db->update('parameter_ppa', $data_ipk);
         $this->db->where('nama_kriteria', 'semester');
         $this->db->update('parameter_ppa', $data_semester);
         $this->db->where('nama_kriteria', 'gaji');
         $this->db->update('parameter_ppa', $data_gaji);
         $this->db->where('nama_kriteria', 'tanggungan');
         $this->db->update('parameter_ppa', $data_tanggungan);
         $this->db->where('nama_kriteria', 'keaktifan');
         $this->db->update('parameter_ppa', $data_keaktifan);      
      }
      else{
         $this->db->where('nama_kriteria', 'ipk');
         $this->db->update('parameter_bpp', $data_ipk);
         $this->db->where('nama_kriteria', 'semester');
         $this->db->update('parameter_bpp', $data_semester);
         $this->db->where('nama_kriteria', 'gaji');
         $this->db->update('parameter_bpp', $data_gaji);
         $this->db->where('nama_kriteria', 'tanggungan');
         $this->db->update('parameter_bpp', $data_tanggungan);
         $this->db->where('nama_kriteria', 'keaktifan');
         $this->db->update('parameter_bpp', $data_keaktifan);
      }
   }

}
?>