<div class="col-md-12" style="background:none;">
	<div class="col-md-6" style="background:none;">
		<a href="<?php echo  base_url();?>admin/parameter_ppa"><h4 class="tipe" style="float:right;">Beasiswa PPA</h4></a>
	</div>
	<div class="col-md-6" style="background:none;">
		<a href="<?php echo  base_url();?>admin/parameter_bpp"><h4 class="tipe" style="float:left;background-color:#B9B9B9;color:white;">Beasiswa BPP</h4></a>
	</div>
</div>
<br><br><br><br><br>
<div class="col-md-12" style="background:none;text-align:center;">
	<h3>Nilai Parameter Beasiswa BPP</h3><br><br>
	<table class="table" style="text-align:center;">
		 <thead>
	        <tr>
	            <th rowspan="2" style="text-align:center;">No</th>
	            <th rowspan="2" style="text-align:center;">Nama Kriteria</th>
	            <th rowspan="2" style="text-align:center;">Kaidah</th>
	            <th rowspan="2" style="text-align:center;">Tipe Preferensi</th>
	            <th rowspan="2" style="text-align:center;">Bobot</th>
	            <th colspan="2" style="text-align:center;">Nilai Parameter</th>
	        </tr>
          	<tr>
	            <th style="text-align:center;">q</th>
	            <th style="text-align:center;">p</th>
          	</tr>
        </thead>
		<tbody>
			<?php foreach ($data as $key => $value) { ?>
			<tr>
				<td><?php echo $value['no'];?></td>
				<td><?php echo $value['kriteria'];?></td>
				<td><?php echo $value['kaidah'];?></td>
				<td><?php echo $value['tipe'];?></td>
				<td><?php echo $value['bobot'];?></td>
				<td><?php echo $value['q'];?></td>
				<td><?php echo $value['p'];?></td>
			</tr>
			<?php }?>
		</tbody>
	</table>
	<a id="submit-btn" class="btn col-sm-12" style="color:white;background-color:#B9B9B9;margin-top:20px;" href="<?php echo base_url(); ?>admin/set_parameter_bpp"> Ubah Data</a>
</div>