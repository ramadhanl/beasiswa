<div class="col-md-12" style="background:none;">
	<div class="col-md-6" style="background:none;">
		<a href="<?php echo  base_url();?>pegawai/proses_seleksi_ppa"><h4 class="tipe" style="float:right;background-color:#B9B9B9;color:white;">Beasiswa PPA</h4></a>
	</div>
	<div class="col-md-6" style="background:none;">
		<a href="<?php echo  base_url();?>pegawai/proses_seleksi_bpp"><h4 class="tipe" style="float:left;">Beasiswa BPP</h4></a>
	</div>
</div>
<br><br><br><br><br>
<div class="col-md-12" style="background:none;">
	<a href="<?php echo base_url();?>pegawai/hitung_skor/ppa" class="btn col-sm-12" style="color:white;background-color:#B9B9B9;margin-top:20px;border:0px;">Proses Data</a>	
	<table class="table" style="text-align:center;">
		<thead  style="text-align:center;">
			<tr  style="text-align:center;">
	            <th  style="text-align:center;">No</th>
	            <th  style="text-align:center;">Nama Mahasiswa Pendaftar</th>
	            <th  style="text-align:center;">IPK</th>
	            <th  style="text-align:center;">Semester</th>
	            <th  style="text-align:center;">Gaji Orang Tua</th>
	            <th  style="text-align:center;">Tanggungan</th>
	            <th  style="text-align:center;">Keaktifan Organisasi</th>
            </tr>
		</thead>
		<tbody>
		<?php foreach ($data as $key => $value) {?>
			<tr>
				<td> <?php echo $value['no'];?></td>
				<td> <?php echo $value['nama'];?></td>
				<td> <?php echo $value['ipk'];?></td>
				<td> <?php echo $value['semester'];?></td>
				<td> <?php echo $value['gaji'];?></td>
				<td> <?php echo $value['tanggungan'];?></td>
				<td> <?php echo $value['keaktifan'];?></td>
			</tr>
		<?php }?>
		</tbody>
	</table>
</div>