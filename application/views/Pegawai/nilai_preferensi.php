<div class="col-md-12" style="background:none;height:100%;">
	<div class="col-md-3" style="height:541px;background:none;">
		<div class="panel-group" role="tablist">
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" style="text-align:center;">
					<h4 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" href="#collapseListGroup1" aria-expanded="false" aria-controls="collapseListGroup1">
						Data Lengkap
						</a>
					</h4>
				</div>
				<div id="collapseListGroup1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading1">
					<ul class="list-group">
						<li class="list-group-item" style="text-align:center">
							<label>NPM :</label><p style="width:100%;"><?php echo $data['data_mhs']->npm;?></p>
						</li>
						<li class="list-group-item" style="text-align:center">
							<label>Nama :</label><p style="width:100%;"><?php echo $data['data_mhs']->nama_mhs;?></p>
						</li>
						<li class="list-group-item" style="text-align:center">
							<label>JK :</label><p style="width:100%;"><?php echo $data['data_mhs']->jk;?></p>
						</li>
						<li class="list-group-item" style="text-align:center">
							<label>Prodi :</label><p style="width:100%;"><?php echo $data['data_mhs']->prodi;?></p>
						</li>
						<li class="list-group-item" style="text-align:center">
							<label>Jenjang :</label><p style="width:100%;"><?php echo $data['data_mhs']->jenjang;?></p>
						</li>
						<li class="list-group-item" style="text-align:center">
							<label>Semester :</label><p style="width:100%;"><?php echo $data['data_mhs']->smt;?></p>
						</li>
						<li class="list-group-item" style="text-align:center">
							<label>IPK :</label><p style="width:100%;"><?php echo $data['data_mhs']->ipk;?></p>
						</li>
						<li class="list-group-item" style="text-align:center">
							<label>Pekerjaan :</label><p style="width:100%;"><?php echo $data['data_mhs']->pekerjaan;?></p>
						</li>
						<li class="list-group-item" style="text-align:center">
							<label>Tanggungan :</label><p style="width:100%;"><?php echo $data['data_mhs']->jml_tanggungan;?></p>
						</li>
						<li class="list-group-item" style="text-align:center">
							<label>Penghasilan Ortu :</label><p style="width:100%;">
							<?php 
								if($data['data_mhs']->penghasilan==1)
									echo "Golongan 1 <br>( < Rp 500.000,00 )";
								else if($data['data_mhs']->penghasilan==2)
									echo "Golongan 2 <br>( Rp 500.000,00 s/d Rp 1.500.000,00 )";
								else if($data['data_mhs']->penghasilan==3)
									echo "Golongan 3 <br>( Rp 1.500.000,00 s/d Rp 3.000.000,00 )";
								else if($data['data_mhs']->penghasilan==4)
									echo "Golongan 4 <br>( Rp 3.000.000,00 s/d Rp 5.000.000,00 )";
								else if($data['data_mhs']->penghasilan==5)
									echo "Golongan 5 <br>( > Rp 5.000.000,00 )";
							?></p>
						</li>
						<li class="list-group-item" style="text-align:center">
							<label>Prestasi :</label><p style="width:100%;">
							<?php if($data['data_mhs']->prestasi==1) echo "Ada"; else echo "Tidak ada";?></p>
						</li>
						<li class="list-group-item" style="text-align:center">
							<label>Alamat :</label><p style="width:100%;"><?php if($data['data_mhs']->alamat==NULL) echo " - ";else echo $data['data_mhs']->alamat;?></p>
						</li>
						<li class="list-group-item" style="text-align:center">
							<label>Telepon :</label><p style="width:100%;"><?php echo $data['data_mhs']->telepon;?></p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-9" style="background:none;">
		<h3 style="text-align:center;">Nilai Preferensi <?php echo "Mahasiswa Beasiswa ".strtoupper($par)."<br>".$data['data_mhs']->nama_mhs;?></h3>
		<table class="table" style="text-align:center;">
			<thead  style="text-align:center;">
				<tr  style="text-align:center;">
					<th rowspan="2" style="text-align:center;">No</th>
					<th rowspan="2" style="text-align:center;">Nama Mahasiswa</th>
		            <th colspan="5" style="text-align:center;">Parameter</th>
		            <th rowspan="2" style="text-align:center;">Indeks Preferensi</th>
	            </tr>
	            <tr>
	            	<th style="text-align:center;">IPK</th>
	            	<th style="text-align:center;">Semester</th>
	            	<th style="text-align:center;">Gaji</th>
	            	<th style="text-align:center;">Tanggungan</th>
	            	<th style="text-align:center;">Keaktifan</th>
	            </tr>
			</thead>
			<tbody>
				<?php foreach ($data['data_preferensi'] as $key => $value) {?>
				<tr>
					<td style="text-align:center;"><?php echo $value['no'];?></td>
					<td><a href="<?php echo base_url().'pegawai/nilai_preferensi/'.$par.'/'.$value['no'];?>"><?php echo $value['nama'];?></a></td>
					<td style="text-align:center;"><?php echo $value['indeks_ipk'];?></td>
					<td style="text-align:center;"><?php echo $value['indeks_semester'];?></td>
					<td style="text-align:center;"><?php echo $value['indeks_gaji'];?></td>
					<td style="text-align:center;"><?php echo $value['indeks_tanggungan'];?></td>
					<td style="text-align:center;"><?php echo $value['indeks_keaktifan'];?></td>
					<td style="text-align:center;"><?php echo $value['indeks_preferensi'];?></td>
				</tr>
				<?php }?>
			</tbody>
		</table>
	</div>
</div>