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
		<form action="<?php echo base_url(); ?>admin/simpan_matriks" method="POST">
		<?php $count=5;foreach ($data as $key => $value) { 
			if ($value['kriteria']!='cr') {?>
			<tr>
				<td><?php echo $value['kriteria'];?></td>
				<?php if($count>=5){?>
				<td>
					<select class="form-control" name="ipk<?php echo $count;?>" value="<?php echo $ipk_ipk;?>">
                      <option value="9" <?php  if($value['ipk']==9)echo "selected";?>>9</option>
                      <option value="8" <?php  if($value['ipk']==8)echo "selected";?>>8</option>
                      <option value="7"<?php  if($value['ipk']==7)echo "selected";?>>7</option>
                      <option value="6"<?php  if($value['ipk']==6)echo "selected";?>>6</option>
                      <option value="5"<?php  if($value['ipk']==5)echo "selected";?>>5</option>
                      <option value="4"<?php  if($value['ipk']==4)echo "selected";?>>4</option>
                      <option value="3"<?php  if($value['ipk']==3)echo "selected";?>>3</option>
                      <option value="2"<?php  if($value['ipk']==2)echo "selected";?>>2</option>
                      <option value="1"<?php  if($value['ipk']==1)echo "selected";?>>1</option>
                      <option value="<?php echo 1/2?>"<?php  if($value['ipk']==1/2)echo "selected";?>>1/2</option>
                      <option value="<?php echo 1/3?>"<?php  if($value['ipk']==1/3)echo "selected";?>>1/3</option>
                      <option value="<?php echo 1/4?>"<?php  if($value['ipk']==1/4)echo "selected";?>>1/4</option>
                      <option value="<?php echo 1/5?>"<?php  if($value['ipk']==1/5)echo "selected";?>>1/5</option>
                      <option value="<?php echo 1/6?>"<?php  if($value['ipk']==1/6)echo "selected";?>>1/6</option>
                      <option value="<?php echo 1/7?>"<?php  if($value['ipk']==1/7)echo "selected";?>>1/7</option>
                      <option value="<?php echo 1/8?>"<?php  if($value['ipk']==1/8)echo "selected";?>>1/8</option>
                      <option value="<?php echo 1/9?>"<?php  if($value['ipk']==1/9)echo "selected";?>>1/9</option>
                    </select>
				</td>
				<?php }else{?>
				<td></td>
				<?php }if($count>=4){?>
				<td>
					<select class="form-control" name="semester<?php echo $count;?>" value="<?php echo $ipk_ipk;?>">
                      <option value="9" <?php  if($value['semester']==9)echo "selected";?>>9</option>
                      <option value="8" <?php  if($value['semester']==8)echo "selected";?>>8</option>
                      <option value="7"<?php  if($value['semester']==7)echo "selected";?>>7</option>
                      <option value="6"<?php  if($value['semester']==6)echo "selected";?>>6</option>
                      <option value="5"<?php  if($value['semester']==5)echo "selected";?>>5</option>
                      <option value="4"<?php  if($value['semester']==4)echo "selected";?>>4</option>
                      <option value="3"<?php  if($value['semester']==3)echo "selected";?>>3</option>
                      <option value="2"<?php  if($value['semester']==2)echo "selected";?>>2</option>
                      <option value="1"<?php  if($value['semester']==1)echo "selected";?>>1</option>
                      <option value="<?php echo 1/2?>"<?php  if($value['semester']==1/2)echo "selected";?>>1/2</option>
                      <option value="<?php echo 1/3?>"<?php  if($value['semester']==1/3)echo "selected";?>>1/3</option>
                      <option value="<?php echo 1/4?>"<?php  if($value['semester']==1/4)echo "selected";?>>1/4</option>
                      <option value="<?php echo 1/5?>"<?php  if($value['semester']==1/5)echo "selected";?>>1/5</option>
                      <option value="<?php echo 1/6?>"<?php  if($value['semester']==1/6)echo "selected";?>>1/6</option>
                      <option value="<?php echo 1/7?>"<?php  if($value['semester']==1/7)echo "selected";?>>1/7</option>
                      <option value="<?php echo 1/8?>"<?php  if($value['semester']==1/8)echo "selected";?>>1/8</option>
                      <option value="<?php echo 1/9?>"<?php  if($value['semester']==1/9)echo "selected";?>>1/9</option>
                    </select>
				</td>
				<?php }else{?>
				<td></td>
				<?php }if($count>=3){?>
				<td>
					<select class="form-control" name="gaji<?php echo $count;?>" value="<?php echo $ipk_ipk;?>">
                      <option value="9" <?php  if($value['gaji']==9)echo "selected";?>>9</option>
                      <option value="8" <?php  if($value['gaji']==8)echo "selected";?>>8</option>
                      <option value="7"<?php  if($value['gaji']==7)echo "selected";?>>7</option>
                      <option value="6"<?php  if($value['gaji']==6)echo "selected";?>>6</option>
                      <option value="5"<?php  if($value['gaji']==5)echo "selected";?>>5</option>
                      <option value="4"<?php  if($value['gaji']==4)echo "selected";?>>4</option>
                      <option value="3"<?php  if($value['gaji']==3)echo "selected";?>>3</option>
                      <option value="2"<?php  if($value['gaji']==2)echo "selected";?>>2</option>
                      <option value="1"<?php  if($value['gaji']==1)echo "selected";?>>1</option>
                      <option value="<?php echo 1/2?>"<?php  if($value['gaji']==1/2)echo "selected";?>>1/2</option>
                      <option value="<?php echo 1/3?>"<?php  if($value['gaji']==1/3)echo "selected";?>>1/3</option>
                      <option value="<?php echo 1/4?>"<?php  if($value['gaji']==1/4)echo "selected";?>>1/4</option>
                      <option value="<?php echo 1/5?>"<?php  if($value['gaji']==1/5)echo "selected";?>>1/5</option>
                      <option value="<?php echo 1/6?>"<?php  if($value['gaji']==1/6)echo "selected";?>>1/6</option>
                      <option value="<?php echo 1/7?>"<?php  if($value['gaji']==1/7)echo "selected";?>>1/7</option>
                      <option value="<?php echo 1/8?>"<?php  if($value['gaji']==1/8)echo "selected";?>>1/8</option>
                      <option value="<?php echo 1/9?>"<?php  if($value['gaji']==1/9)echo "selected";?>>1/9</option>
                    </select>
				</td>
				<?php }else{?>
				<td></td>
				<?php }if($count>=2){?>
				<td>
					<select class="form-control" name="tanggungan<?php echo $count;?>" value="<?php echo $ipk_ipk;?>">
                      <option value="9" <?php  if($value['tanggungan']==9)echo "selected";?>>9</option>
                      <option value="8" <?php  if($value['tanggungan']==8)echo "selected";?>>8</option>
                      <option value="7"<?php  if($value['tanggungan']==7)echo "selected";?>>7</option>
                      <option value="6"<?php  if($value['tanggungan']==6)echo "selected";?>>6</option>
                      <option value="5"<?php  if($value['tanggungan']==5)echo "selected";?>>5</option>
                      <option value="4"<?php  if($value['tanggungan']==4)echo "selected";?>>4</option>
                      <option value="3"<?php  if($value['tanggungan']==3)echo "selected";?>>3</option>
                      <option value="2"<?php  if($value['tanggungan']==2)echo "selected";?>>2</option>
                      <option value="1"<?php  if($value['tanggungan']==1)echo "selected";?>>1</option>
                      <option value="<?php echo 1/2?>"<?php  if($value['tanggungan']==1/2)echo "selected";?>>1/2</option>
                      <option value="<?php echo 1/3?>"<?php  if($value['tanggungan']==1/3)echo "selected";?>>1/3</option>
                      <option value="<?php echo 1/4?>"<?php  if($value['tanggungan']==1/4)echo "selected";?>>1/4</option>
                      <option value="<?php echo 1/5?>"<?php  if($value['tanggungan']==1/5)echo "selected";?>>1/5</option>
                      <option value="<?php echo 1/6?>"<?php  if($value['tanggungan']==1/6)echo "selected";?>>1/6</option>
                      <option value="<?php echo 1/7?>"<?php  if($value['tanggungan']==1/7)echo "selected";?>>1/7</option>
                      <option value="<?php echo 1/8?>"<?php  if($value['tanggungan']==1/8)echo "selected";?>>1/8</option>
                      <option value="<?php echo 1/9?>"<?php  if($value['tanggungan']==1/9)echo "selected";?>>1/9</option>
                    </select>
				</td>
				<?php }else{?>
				<td></td>
				<?php }if($count>=1){?>
				<td>
					<select class="form-control" name="keaktifan<?php echo $count;?>" value="<?php echo $ipk_ipk;?>">
                      <option value="9" <?php  if($value['keaktifan']==9)echo "selected";?>>9</option>
                      <option value="8" <?php  if($value['keaktifan']==8)echo "selected";?>>8</option>
                      <option value="7"<?php  if($value['keaktifan']==7)echo "selected";?>>7</option>
                      <option value="6"<?php  if($value['keaktifan']==6)echo "selected";?>>6</option>
                      <option value="5"<?php  if($value['keaktifan']==5)echo "selected";?>>5</option>
                      <option value="4"<?php  if($value['keaktifan']==4)echo "selected";?>>4</option>
                      <option value="3"<?php  if($value['keaktifan']==3)echo "selected";?>>3</option>
                      <option value="2"<?php  if($value['keaktifan']==2)echo "selected";?>>2</option>
                      <option value="1"<?php  if($value['keaktifan']==1)echo "selected";?>>1</option>
                      <option value="<?php echo 1/2?>"<?php  if($value['keaktifan']==1/2)echo "selected";?>>1/2</option>
                      <option value="<?php echo 1/3?>"<?php  if($value['keaktifan']==1/3)echo "selected";?>>1/3</option>
                      <option value="<?php echo 1/4?>"<?php  if($value['keaktifan']==1/4)echo "selected";?>>1/4</option>
                      <option value="<?php echo 1/5?>"<?php  if($value['keaktifan']==1/5)echo "selected";?>>1/5</option>
                      <option value="<?php echo 1/6?>"<?php  if($value['keaktifan']==1/6)echo "selected";?>>1/6</option>
                      <option value="<?php echo 1/7?>"<?php  if($value['keaktifan']==1/7)echo "selected";?>>1/7</option>
                      <option value="<?php echo 1/8?>"<?php  if($value['keaktifan']==1/8)echo "selected";?>>1/8</option>
                      <option value="<?php echo 1/9?>"<?php  if($value['keaktifan']==1/9)echo "selected";?>>1/9</option>
                    </select>
				</td>
				<?php }else{?>
				<td></td>
			</tr>
			<?php }}else{?>
			<tr>
				<td rowspan="6"><?php echo "Nilai CR (Rasio konsistensi) = ".$value['ipk']." ";?></td>
			</tr>
		<?php }$count--;}?>
		</tbody>
	</table>
	<h4 style="text-align:center;"><?php if($status==0) echo "Nilai Rasio Konsistensi lebih besar dari 10%";?></h4>
	<input type="submit" id="submit-btn" class="btn col-sm-12" style="color:white;background-color:#B9B9B9;margin-top:20px;" value="Simpan data">
	</form>
	</div>