<div class="col-md-12" style="background:none;">
	<div class="col-md-6" style="background:none;">
		<a href="<?php echo  base_url();?>pegawai/hasil_seleksi_ppa"><h4 class="tipe" style="float:right;">Beasiswa PPA</h4></a>
	</div>
	<div class="col-md-6" style="background:none;">
		<a href="<?php echo  base_url();?>pegawai/hasil_seleksi_bpp"><h4 class="tipe" style="float:left;background-color:#B9B9B9;color:white;">Beasiswa BPP</h4></a>
	</div>
</div>
<br><br><br><br><br>
<div class="col-md-12" style="background:none;">
	<div class="col-md-4" style="background:none;">
		<a href="<?php echo base_url();?>pegawai/save_as_excel/bpp/simple" class="btn col-sm-12" style="color:white;background-color:#B9B9B9;margin:20px;border:0px;">Download Daftar Penerima Beasiswa</a>
	</div>
	<div class="col-md-4" style="background:none;">
		<a href="<?php echo base_url();?>pegawai/save_as_excel/bpp/full" class="btn col-sm-12" style="text-align:center;color:white;background-color:#B9B9B9;margin:20px;border:0px;">Download Hasil Proses Seleksi</a>
	</div>
	<div class="col-md-4" style="background:none;">
		<a href="<?php echo base_url();?>pegawai/matriks_excel/bpp/" class="btn col-sm-12" style="text-align:center;color:white;background-color:#B9B9B9;margin:20px;border:0px;">Download Nilai Matriks Promethe</a>
	</div>
	<table class="table" style="text-align:center;">
		<thead  style="text-align:center;">
			<tr  style="text-align:center;">
	            <th  style="text-align:center;">Peringkat</th>
	            <th  style="text-align:center;">Nama Mahasiswa Pendaftar</th>
	            <th  style="text-align:center;">Entering Flow</th>
	            <th  style="text-align:center;">Leaving Flow</th>
	            <th  style="text-align:center;">Net Flow</th>
            </tr>
		</thead>
		<tbody>
		<?php foreach ($data as $key => $value) {?>
			<tr>
				<td> <?php echo $value['no'];?></td>
				<td><a href="<?php echo base_url().'pegawai/nilai_preferensi/bpp/'.$value['id_form'];?>"><?php echo $value['nama'];?></a></td>
				<td> <?php echo $value['entering_flow'];?></td>
				<td> <?php echo $value['leaving_flow'];?></td>
				<td> <?php echo $value['net_flow'];?></td>
			</tr>
		<?php }?>
		</tbody>
	</table>
</div>