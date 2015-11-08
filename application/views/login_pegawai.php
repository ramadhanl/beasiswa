<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Penyaluran beasiswa</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/icon.png">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>
	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="<?php echo base_url(); ?>pegawai/login_proses" method="POST">
		        <h2 class="form-login-heading" style="background-color:#CCB490;">Silahkan login</h2>
		        <div class="login-wrap">
		            <input name="email" type="text" class="form-control" placeholder="Email" autofocus>
		            <br>
		            <input name="password" type="password" class="form-control" placeholder="Password">
		            <label class="checkbox">
		            </label>
		            <button class="btn btn-theme btn-block" href="index.html" type="submit" style="background-color:#CCB490;border-color:#CCB490;"><i class="fa fa-lock"></i> Login</button>
		            <hr>
		            
		            <div class="login-social-link centered">
		            Sistem Informasi Penyaluran Beasiswa
		        </div>
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("<?php echo base_url(); ?>assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
