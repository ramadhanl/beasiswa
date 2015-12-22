<div class="col-md-12" style="background:none;">
	<div class="col-md-6" style="background:none;">
		<a href="<?php echo  base_url();?>admin/set_parameter_ppa"><h4 class="tipe" style="float:right;background-color:#B9B9B9;color:white;">Beasiswa PPA</h4></a>
	</div>
	<div class="col-md-6" style="background:none;">
		<a href="<?php echo  base_url();?>admin/set_parameter_bpp"><h4 class="tipe" style="float:left;">Beasiswa BPP</h4></a>
	</div>
</div>
<br><br><br><br><br>
<div class="col-md-12" style="background:none;text-align:center;">
	<h3>Set Nilai Parameter Beasiswa PPA</h3><br><br>
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
		<form action="<?php echo base_url(); ?>admin/simpan_parameter/ppa" method="POST">
			<?php foreach ($data as $key => $value) { ?>
			<tr>
				<td style="text-align:center;"><?php echo $value['no'];?></td>
				<td style="text-align:center;"><?php echo $value['kriteria'];?></td>
				<td style="text-align:center;">
					<select style="width:100%;height:27px;" name="kaidah<?php echo $value['kriteria'];?>">
						<option value="maksimasi" <?php if($value['kaidah']=='maksimasi') echo "selected";?>>Maksimasi</option>
						<option value="minimasi" <?php if($value['kaidah']=='minimasi') echo "selected";?>>Minimasi</option>
					</select>
				</td>
				<td style="text-align:center;">
					<select style="width:100%;height:27px;" name="tipe<?php echo $value['kriteria'];?>">
						<option  value="1" <?php if($value['tipe']==1) echo "selected";?>>I</option>
						<option value="2" <?php if($value['tipe']==2) echo "selected";?>>II</option>
						<option value="3" <?php if($value['tipe']==3) echo "selected";?>>III</option>
						<option value="4" <?php if($value['tipe']==4) echo "selected";?>>IV</option>
						<option value="5" <?php if($value['tipe']==5) echo "selected";?>>V</option>
					</select>
				</td>
				<td style="text-align:center;"><?php echo $value['bobot'];?></td>
				<td style="text-align:center;"><input name="q<?php echo $value['kriteria'];?>" style="text-align:center;" type="text" value="<?php echo $value['q'];?>"></td>
				<td style="text-align:center;"><input name="p<?php echo $value['kriteria'];?>" style="text-align:center;" type="text" value="<?php echo $value['p'];?>"></td>
			</tr>
			<?php }?>
		</tbody>
	</table>
	<input type="submit" id="submit-btn" class="btn col-sm-12" style="color:white;background-color:#B9B9B9;margin-top:20px;" value="Simpan">
	</form>
</div>