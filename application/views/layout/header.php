<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Beasiswa</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<script type='text/javascript' src='//code.jquery.com/jquery-1.9.1.js'></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,400italic,600,600italic' rel='stylesheet' type='text/css'>
	<link href='<?php echo base_url(); ?>static/css/rbtc.css' rel='stylesheet' type='text/css'>
	<link href='<?php echo base_url(); ?>static/css/kp.css' rel='stylesheet' type='text/css'>
</head>
<body style="padding-top: 20px;">
	<div class="container">
			<div class="top_box" style="background-color:#ED1C24;"></div>
			<h1 class="title text-center" >Sistem Informasi Beasiswa</h1>
			<nav style="margin-top:60px;"  class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<?php if($this->session->userdata('privilege') && $this->session->userdata('privilege')=='pegawai'){?>
							<li><a <?php if($display=='proses_seleksi') echo "class='active'";?> href="<?php echo base_url(); ?>pegawai/proses_seleksi_ppa">Proses Seleksi</a></li>
							<li><a <?php if($display=='hasil_seleksi') echo "class='active'";?> href="<?php echo base_url(); ?>pegawai/hasil_seleksi_ppa">Hasil Seleksi</a></li>
						<?php }else if($this->session->userdata('privilege') && $this->session->userdata('privilege')=='admin'){ ?>
							<li><a <?php if($display=='setting_matriks') echo "class='active'";?> href="<?php echo base_url();?>admin/matriks_ahp">Setting Matriks AHP</a></li>
							<li><a <?php if($display=='set_parameter') echo "class='active'";?> href="<?php echo base_url(); ?>admin/parameter_ppa">Penentuan Nilai Parameter</a></li>
						<?php }else{ ?>
							<li><a <?php if($display=='form_ppa') echo "class='active'";?> href="<?php echo base_url(); ?>mahasiswa/form_ppa">Pendaftaran Beasiswa PPA</a></li>
							<li><a <?php if($display=='form_bpp') echo "class='active'";?> href="<?php echo base_url(); ?>mahasiswa/form_bpp">Pendaftaran Beasiswa BPP</a></li>
						<?php }?>
						<li style="float:right;z-index:99999;ba">
							<div style="margin-right:-10px;margin-top:<?php if($this->session->userdata('privilege')) echo "5px"; else echo "1px";?>;margin-bottom:-400px;" class="panel-group" role="tablist">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" style="text-align:center;">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" href="#collapseListGroup" aria-expanded="false" aria-controls="collapseListGroup1">
												<?php if($this->session->userdata('privilege') && $this->session->userdata('privilege')=='pegawai'){?>
													Pegawai
												<?php }else if($this->session->userdata('privilege') && $this->session->userdata('privilege')=='admin'){?>
													Admin
												<?php }else{?>
													<img style="width:25px;height:25px;" src="<?php echo base_url();?>static/img/login.png">
												<?php }?>
											</a>
										</h4>
									</div>
									<div id="collapseListGroup" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading1">
										<ul class="list-group">
										<?php if($this->session->userdata('privilege')){?>
											<li class="list-group-item" style="text-align:center;"><a href="<?php echo base_url(); ?>Welcome/logout"> Logout </a></li>
										<?php }else{?>
											<form action="<?php echo base_url(); ?>Welcome/login" method="post">
												<li class="list-group-item" style="text-align:center;">
													<input placeholder="<Username>" type="text" name="username" style="text-align:center;width:100%;height:40px;font-size:28px;padding:2px;border:0px;border-bottom: solid grey;">
												</li>
												<li class="list-group-item" style="text-align:center">
													<input placeholder="<Password>" type="password" name="password" style="border:0px;border-bottom: solid grey;text-align:center;width:100%;height:40px;font-size:28px;padding:2px;">
												</li>
												<li class="list-group-item" style="text-align:center" >
													<input value="LOGIN" type="submit" style="width:100%;height:40px;font-size:28px;padding:2px;border:2px;background-color:white;">
												</li>
											</form>
										<?php }?>
										</ul>
									</div>
								</div>
							</div>
						</li>
					</ul>
					</div>
				</div>
			</nav>
			<div class="row">