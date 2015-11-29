<?php

class Data extends CI_Controller {
	public function index()
	{
		$this->load->library('excel');
		$file = 'C:\wamp\www\beasiswa\assets\files\data_pengaju_beasiswa.xlsx';
		$objPHPExcel = PHPExcel_IOFactory::load($file);
		$this->db->empty_table('form_beasiswa_ppa'); 
		$this->db->query('ALTER TABLE form_beasiswa_ppa AUTO_INCREMENT = 1');

		$cell_collection = $objPHPExcel->getSheetByName('PPA')->getCellCollection();
		//extract to a PHP readable array format
		$flag=2;
		foreach ($cell_collection as $cell) {
		    $column = $objPHPExcel->getSheetByName('PPA')->getCell($cell)->getColumn();
		    $row = $objPHPExcel->getSheetByName('PPA')->getCell($cell)->getRow();
		    $data_value = $objPHPExcel->getSheetByName('PPA')->getCell($cell)->getValue();
		    //header will/should be in row 1 only. of course this can be modified to suit your need.
		    if ($row != $flag && $row>1) {
		    	$flag++;
		    	$data = array(
					'npm' => $npm,
					'nama_mhs'=> $nama_mhs,
					'jk'=>$jk,
					'prodi'=>$prodi,
					'jenjang'=>$jenjang,
					'smt'=>$smt,
					'ipk'=>$ipk,
					'pekerjaan'=>$pekerjaan,
					'jml_tanggungan'=>$jml_tanggungan,
					'penghasilan'=>$penghasilan,
					'prestasi'=>$prestasi,
					'alamat'=>$alamat,
					'telepon'=>$telepon,
				);
				$this->db->insert('form_beasiswa_ppa', $data);
		    } 
		    if($column=='A')
		    	$npm = $data_value;
		    if($column=='B')
		    	$nama_mhs = $data_value;
		    if($column=='C')
		    	$jk = $data_value;
		    if($column=='D')
		    	$prodi = $data_value;
		    if($column=='E')
		    	$jenjang = $data_value;
		    if($column=='F')
		    	$smt = $data_value;
		    if($column=='G')
		    	$ipk = $data_value;
		    if($column=='H')
		    	$pekerjaan = $data_value;
		    if($column=='I')
		    	$jml_tanggungan = $data_value;
		    if($column=='J')
		    	$penghasilan = $data_value;
		    if($column=='K')
		    	$prestasi = $data_value;
		     if($column=='L')
		    	$alamat = $data_value;
		    if($column=='M')
		    	$alamat_rumah = $data_value;
		    if($column=='N')
		    	$telepon = $data_value;
		}
		$data = array(
					'npm' => $npm,
					'nama_mhs'=> $nama_mhs,
					'jk'=>$jk,
					'prodi'=>$prodi,
					'jenjang'=>$jenjang,
					'smt'=>$smt,
					'ipk'=>$ipk,
					'pekerjaan'=>$pekerjaan,
					'jml_tanggungan'=>$jml_tanggungan,
					'penghasilan'=>$penghasilan,
					'prestasi'=>$prestasi,
					'alamat'=>$alamat,
					'telepon'=>$telepon,
				);
		$this->db->insert('form_beasiswa_ppa', $data);
		echo "Selesai mengimport data ppa dari excel";

		//BPP
		$this->db->empty_table('form_beasiswa_bpp'); 
		$this->db->query('ALTER TABLE form_beasiswa_bpp AUTO_INCREMENT = 1');

		$cell_collection = $objPHPExcel->getSheetByName('BPP')->getCellCollection();
		//extract to a PHP readable array format
		$flag=2;
		foreach ($cell_collection as $cell) {
		    $column = $objPHPExcel->getSheetByName('BPP')->getCell($cell)->getColumn();
		    $row = $objPHPExcel->getSheetByName('BPP')->getCell($cell)->getRow();
		    $data_value = $objPHPExcel->getSheetByName('BPP')->getCell($cell)->getValue();
		    //header will/should be in row 1 only. of course this can be modified to suit your need.
		    if ($row != $flag && $row>1) {
		    	$flag++;
		    	$data = array(
					'npm' => $npm,
					'nama_mhs'=> $nama_mhs,
					'jk'=>$jk,
					'prodi'=>$prodi,
					'jenjang'=>$jenjang,
					'smt'=>$smt,
					'ipk'=>$ipk,
					'pekerjaan'=>$pekerjaan,
					'jml_tanggungan'=>$jml_tanggungan,
					'penghasilan'=>$penghasilan,
					'prestasi'=>$prestasi,
					'alamat'=>$alamat,
					'telepon'=>$telepon,
				);
				$this->db->insert('form_beasiswa_bpp', $data);
		    } 
		    if($column=='A')
		    	$npm = $data_value;
		    if($column=='B')
		    	$nama_mhs = $data_value;
		    if($column=='C')
		    	$jk = $data_value;
		    if($column=='D')
		    	$prodi = $data_value;
		    if($column=='E')
		    	$jenjang = $data_value;
		    if($column=='F')
		    	$smt = $data_value;
		    if($column=='G')
		    	$ipk = $data_value;
		    if($column=='H')
		    	$pekerjaan = $data_value;
		    if($column=='I')
		    	$jml_tanggungan = $data_value;
		    if($column=='J')
		    	$penghasilan = $data_value;
		    if($column=='K')
		    	$prestasi = $data_value;
		     if($column=='L')
		    	$alamat = $data_value;
		    if($column=='M')
		    	$alamat_rumah = $data_value;
		    if($column=='N')
		    	$telepon = $data_value;
		}
		$data = array(
					'npm' => $npm,
					'nama_mhs'=> $nama_mhs,
					'jk'=>$jk,
					'prodi'=>$prodi,
					'jenjang'=>$jenjang,
					'smt'=>$smt,
					'ipk'=>$ipk,
					'pekerjaan'=>$pekerjaan,
					'jml_tanggungan'=>$jml_tanggungan,
					'penghasilan'=>$penghasilan,
					'prestasi'=>$prestasi,
					'alamat'=>$alamat,
					'telepon'=>$telepon,
				);
		$this->db->insert('form_beasiswa_bpp', $data);
		echo "<br>Selesai mengimport data bpp dari excel";
	}
}
