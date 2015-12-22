<div class="col-md-12" style="background:none;text-align:center;">
	<h3>Nilai Matriks perbandingan saat ini</h3><br><br>
	<table class="table" style="text-align:center;">
		<thead>
			<tr>
				<th style="text-align:center;">Kriteria Beasiswa</th>
				<th style="text-align:center;">IPK</th>
				<th style="text-align:center;">Semester</th>
				<th style="text-align:center;">Gaji Orang Tua</th>
				<th style="text-align:center;">Tanggungan</th>
				<th style="text-align:center;">Keaktifan Organisasi</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($data as $key => $value) { 
			if ($value['kriteria']!='cr') {?>
			<tr>
				<td><?php echo $value['kriteria'];?></td>
				<td><?php echo $value['ipk'];?></td>
				<td><?php echo $value['semester'];?></td>
				<td><?php echo $value['gaji'];?></td>
				<td><?php echo $value['tanggungan'];?></td>
				<td><?php echo $value['keaktifan'];?></td>
			</tr>
			<?php }else{?>
			<tr>
				<td rowspan="6"><?php echo "Nilai CR (Rasio konsistensi) = ".$value['ipk']." ";?></td>
			</tr>
		<?php }}?>
		</tbody>
	</table>
	<a id="submit-btn" class="btn col-sm-12" style="color:white;background-color:#B9B9B9;margin-top:20px;" href="<?php echo base_url(); ?>admin/setting_matriks"> Ubah Data</a>
</div>