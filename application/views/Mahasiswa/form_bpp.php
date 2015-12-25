<div class="col-md-12" style="background:none;">
	<h3 class="box-title">Formulir Pendaftaran Beasiswa BPP</h3>
	<form action="<?php echo base_url(); ?>Mahasiswa/insert_data/bpp" method="post" enctype="multipart/form-data">
		<div class="col-md-6" style="height:541px;background:none;">
			<div class="form-group">
				<label>NPM :</label><input type="text" class="form-control" name="npm" placeholder="NPM">
			</div>
			<div class="form-group">
				<label>Nama :</label><input type="text" class="form-control" name="nama_mhs" placeholder="Nama">
			</div>
			<div class="form-group">
				<label>JK :</label>
				<select name="jk" class="form-control">
					<option value="Laki-laki">Laki-laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</div>
			<div class="form-group">
				<label>Prodi :</label><input type="text" class="form-control" name="prodi" placeholder="Prodi">
			</div>
			<div class="form-group">
				<label>Jenjang :</label>
				<select name="jenjang" class="form-control">
					<option value="D3">D3</option>
					<option value="S1">S1</option>
					<option value="S2">S2</option>
					<option value="S3">S3</option>
				</select>
			</div>
			<div class="form-group">
				<label>Semester :</label>
				<select name="smt" class="form-control">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
				</select>
			</div>
			<div class="form-group">
				<label>IPK :</label>
				<input type="text" class="form-control" name="ipk" placeholder="IPK">
			</div>
		</div>
		<div class="col-md-6" style="height:541px;background:none;">
			<div class="form-group">
				<label>Pekerjaan Kepala rumah tangga :</label>
				<input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan">
			</div>
			<div class="form-group">
				<label>Tanggungan :</label>
				<div>
					<input name="jml_tanggungan" type="text" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label>Penghasilan Ortu :</label>
				<div>
					<select name="penghasilan" class="form-control">
						<option value="1">Golongan 1 ( < Rp 500.000,00 )</option>
						<option value="2">Golongan 2 ( Rp 500.000,00 s/d Rp 1.500.000,00 )</option>
						<option value="3">Golongan 3 ( Rp 1.500.000,00 s/d Rp 3.000.000,00 )</option>
						<option value="4">Golongan 4 ( Rp 3.000.000,00 s/d Rp 5.000.000,00 )</option>
						<option value="5">Golongan 5 ( > Rp 5.000.000,00 )</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label>Prestasi :</label>
				<input type="file" name="userfile" class="form-control">
			</div>
			<div class="form-group">
				<label>Alamat :</label><input type="text" class="form-control" name="alamat" placeholder="Alamat">
			</div>
			<div class="form-group">
				<label>Telepon :</label>
				<input type="text" class="form-control" name="telepon" placeholder="Telepon">
			</div>
		</div>
	<input id="submit-btn" class="btn col-sm-12" style="background-color:#B9B9B9;color:white;" type="submit" value="Kirim formulir">
	</form>
</div>