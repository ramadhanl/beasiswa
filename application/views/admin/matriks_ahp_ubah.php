<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pendaftaran Beasiswa</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/icon.png">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/bootstrap/css/bootstrap.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/dist/css/AdminLTE.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/table_admin.css">
  </head>
    <body class="skin-purple">
    <div class="wrapper">

      <header class="main-header">
        
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <div class="navbar-custom-menu" style="float:left;margin-left:10px;">
              <ul class="nav navbar-nav menu-nav2">
                  <li><a style="padding:7px;height:58px;" href="<?php echo base_url(); ?>admin">Sistem Informasi Beasiswa<p style="text-align:center;">[Admin]</p></a></li>
              </ul>
          </div>
          <div class="navbar-custom-menu" style="float:left;margin-left:50px;">
              <ul class="nav navbar-nav menu-nav2">
                  <li><a style="padding:15px;height:58px;background-color:#C64332;" href="<?php echo base_url(); ?>admin/matriks_ahp">Setting Matriks AHP</a></li>
                  <li><a style="padding:15px;height:58px;" href="<?php echo base_url(); ?>admin/parameter_ppa">Penentuan Nilai Parameter</a></li>
              </ul>
          </div>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav" >
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a style="height:58px;" href="<?php echo base_url(); ?>pegawai/logout">
                  Logout
                </a>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a style="height:58px;padding-left:20px;" href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
         </section>
        <!-- Main content -->
        <section class="content">
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-sm-12 col-lg-12">
              <table class="display" style="margin-bottom:0px;">
                <thead>
                  <tr>
                    <th style="background-color:#ECF0F5;color:black;">Nilai Matriks Perbandingan Saat Ini</th>
                  </tr>
                </thead>
              </table>
              <table class="display" style="border:1px solid black;">
                <thead>
                  <tr>
                    <th style="background-color:#DD4B39;">Kriteria Beasiswa</th>
                    <th style="background-color:#DD4B39;">IPK</th>
                    <th style="background-color:#DD4B39;">Semester</th>
                    <th style="background-color:#DD4B39;">Gaji Orang Tua</th>
                    <th style="background-color:#DD4B39;">Tanggungan</th>
                    <th style="background-color:#DD4B39;">Keaktifan Organisasi</th>
                  </tr>
                </thead>
                <tbody>
                <form action="<?php echo base_url(); ?>admin/proses_ubah_matriks" method="POST">
                  <tr class="odd">
                    <td>IPK</td>
                    <td>
                    <select class="form-control" name="ipk_ipk" value="<?php echo $ipk_ipk;?>">
                      <option value="9" <?php  if($ipk_ipk==9)echo "selected";?>>9</option>
                      <option value="8" <?php  if($ipk_ipk==8)echo "selected";?>>8</option>
                      <option value="7"<?php  if($ipk_ipk==7)echo "selected";?>>7</option>
                      <option value="6"<?php  if($ipk_ipk==6)echo "selected";?>>6</option>
                      <option value="5"<?php  if($ipk_ipk==5)echo "selected";?>>5</option>
                      <option value="4"<?php  if($ipk_ipk==4)echo "selected";?>>4</option>
                      <option value="3"<?php  if($ipk_ipk==3)echo "selected";?>>3</option>
                      <option value="2"<?php  if($ipk_ipk==2)echo "selected";?>>2</option>
                      <option value="1"<?php  if($ipk_ipk==1)echo "selected";?>>1</option>
                      <option value="<?php echo 1/2?>"<?php  if($ipk_ipk==1/2)echo "selected";?>>1/2</option>
                      <option value="<?php echo 1/3?>"<?php  if($ipk_ipk==1/3)echo "selected";?>>1/3</option>
                      <option value="<?php echo 1/4?>"<?php  if($ipk_ipk==1/4)echo "selected";?>>1/4</option>
                      <option value="<?php echo 1/5?>"<?php  if($ipk_ipk==1/5)echo "selected";?>>1/5</option>
                      <option value="<?php echo 1/6?>"<?php  if($ipk_ipk==1/6)echo "selected";?>>1/6</option>
                      <option value="<?php echo 1/7?>"<?php  if($ipk_ipk==1/7)echo "selected";?>>1/7</option>
                      <option value="<?php echo 1/8?>"<?php  if($ipk_ipk==1/8)echo "selected";?>>1/8</option>
                      <option value="<?php echo 1/9?>"<?php  if($ipk_ipk==1/9)echo "selected";?>>1/9</option>
                    </select>
                    </td>
                    <td>
                    <select class="form-control" name="ipk_semester">
                      <option value="9" <?php  if($ipk_semester==9)echo "selected";?>>9</option>
                      <option value="8" <?php  if($ipk_semester==8)echo "selected";?>>8</option>
                      <option value="7"<?php  if($ipk_semester==7)echo "selected";?>>7</option>
                      <option value="6"<?php  if($ipk_semester==6)echo "selected";?>>6</option>
                      <option value="5"<?php  if($ipk_semester==5)echo "selected";?>>5</option>
                      <option value="4"<?php  if($ipk_semester==4)echo "selected";?>>4</option>
                      <option value="3"<?php  if($ipk_semester==3)echo "selected";?>>3</option>
                      <option value="2"<?php  if($ipk_semester==2)echo "selected";?>>2</option>
                      <option value="1"<?php  if($ipk_semester==1)echo "selected";?>>1</option>
                      <option value="<?php echo 1/2?>"<?php  if($ipk_semester==1/2)echo "selected";?>>1/2</option>
                      <option value="<?php echo 1/3?>"<?php  if($ipk_semester==1/3)echo "selected";?>>1/3</option>
                      <option value="<?php echo 1/4?>"<?php  if($ipk_semester==1/4)echo "selected";?>>1/4</option>
                      <option value="<?php echo 1/5?>"<?php  if($ipk_semester==1/5)echo "selected";?>>1/5</option>
                      <option value="<?php echo 1/6?>"<?php  if($ipk_semester==1/6)echo "selected";?>>1/6</option>
                      <option value="<?php echo 1/7?>"<?php  if($ipk_semester==1/7)echo "selected";?>>1/7</option>
                      <option value="<?php echo 1/8?>"<?php  if($ipk_semester==1/8)echo "selected";?>>1/8</option>
                      <option value="<?php echo 1/9?>"<?php  if($ipk_semester==1/9)echo "selected";?>>1/9</option>
                    </select>
                    </td>
                    <td>
                    <select class="form-control" name="ipk_gaji">
                      <option value="9" <?php  if($ipk_gaji==9)echo "selected";?>>9</option>
                      <option value="8" <?php  if($ipk_gaji==8)echo "selected";?>>8</option>
                      <option value="7"<?php  if($ipk_gaji==7)echo "selected";?>>7</option>
                      <option value="6"<?php  if($ipk_gaji==6)echo "selected";?>>6</option>
                      <option value="5"<?php  if($ipk_gaji==5)echo "selected";?>>5</option>
                      <option value="4"<?php  if($ipk_gaji==4)echo "selected";?>>4</option>
                      <option value="3"<?php  if($ipk_gaji==3)echo "selected";?>>3</option>
                      <option value="2"<?php  if($ipk_gaji==2)echo "selected";?>>2</option>
                      <option value="1"<?php  if($ipk_gaji==1)echo "selected";?>>1</option>
                      <option value="<?php echo 1/2?>"<?php  if($ipk_gaji==1/2)echo "selected";?>>1/2</option>
                      <option value="<?php echo 1/3?>"<?php  if($ipk_gaji==1/3)echo "selected";?>>1/3</option>
                      <option value="<?php echo 1/4?>"<?php  if($ipk_gaji==1/4)echo "selected";?>>1/4</option>
                      <option value="<?php echo 1/5?>"<?php  if($ipk_gaji==1/5)echo "selected";?>>1/5</option>
                      <option value="<?php echo 1/6?>"<?php  if($ipk_gaji==1/6)echo "selected";?>>1/6</option>
                      <option value="<?php echo 1/7?>"<?php  if($ipk_gaji==1/7)echo "selected";?>>1/7</option>
                      <option value="<?php echo 1/8?>"<?php  if($ipk_gaji==1/8)echo "selected";?>>1/8</option>
                      <option value="<?php echo 1/9?>"<?php  if($ipk_gaji==1/9)echo "selected";?>>1/9</option>
                    </select>
                    </td>
                    <td>
                    <select class="form-control" name="ipk_tanggungan">
                      <option value="9" <?php  if($ipk_tanggungan==9)echo "selected";?>>9</option>
                      <option value="8" <?php  if($ipk_tanggungan==8)echo "selected";?>>8</option>
                      <option value="7"<?php  if($ipk_tanggungan==7)echo "selected";?>>7</option>
                      <option value="6"<?php  if($ipk_tanggungan==6)echo "selected";?>>6</option>
                      <option value="5"<?php  if($ipk_tanggungan==5)echo "selected";?>>5</option>
                      <option value="4"<?php  if($ipk_tanggungan==4)echo "selected";?>>4</option>
                      <option value="3"<?php  if($ipk_tanggungan==3)echo "selected";?>>3</option>
                      <option value="2"<?php  if($ipk_tanggungan==2)echo "selected";?>>2</option>
                      <option value="1"<?php  if($ipk_tanggungan==1)echo "selected";?>>1</option>
                      <option value="<?php echo 1/2?>"<?php  if($ipk_tanggungan==1/2)echo "selected";?>>1/2</option>
                      <option value="<?php echo 1/3?>"<?php  if($ipk_tanggungan==1/3)echo "selected";?>>1/3</option>
                      <option value="<?php echo 1/4?>"<?php  if($ipk_tanggungan==1/4)echo "selected";?>>1/4</option>
                      <option value="<?php echo 1/5?>"<?php  if($ipk_tanggungan==1/5)echo "selected";?>>1/5</option>
                      <option value="<?php echo 1/6?>"<?php  if($ipk_tanggungan==1/6)echo "selected";?>>1/6</option>
                      <option value="<?php echo 1/7?>"<?php  if($ipk_tanggungan==1/7)echo "selected";?>>1/7</option>
                      <option value="<?php echo 1/8?>"<?php  if($ipk_tanggungan==1/8)echo "selected";?>>1/8</option>
                      <option value="<?php echo 1/9?>"<?php  if($ipk_tanggungan==1/9)echo "selected";?>>1/9</option>
                    </select>
                    </td>
                    <td>
                    <select class="form-control" name="ipk_keaktifan">
                      <option value="9" <?php  if($ipk_keaktifan==9)echo "selected";?>>9</option>
                      <option value="8" <?php  if($ipk_keaktifan==8)echo "selected";?>>8</option>
                      <option value="7"<?php  if($ipk_keaktifan==7)echo "selected";?>>7</option>
                      <option value="6"<?php  if($ipk_keaktifan==6)echo "selected";?>>6</option>
                      <option value="5"<?php  if($ipk_keaktifan==5)echo "selected";?>>5</option>
                      <option value="4"<?php  if($ipk_keaktifan==4)echo "selected";?>>4</option>
                      <option value="3"<?php  if($ipk_keaktifan==3)echo "selected";?>>3</option>
                      <option value="2"<?php  if($ipk_keaktifan==2)echo "selected";?>>2</option>
                      <option value="1"<?php  if($ipk_keaktifan==1)echo "selected";?>>1</option>
                      <option value="<?php echo 1/2?>"<?php  if($ipk_keaktifan==1/2)echo "selected";?>>1/2</option>
                      <option value="<?php echo 1/3?>"<?php  if($ipk_keaktifan==1/3)echo "selected";?>>1/3</option>
                      <option value="<?php echo 1/4?>"<?php  if($ipk_keaktifan==1/4)echo "selected";?>>1/4</option>
                      <option value="<?php echo 1/5?>"<?php  if($ipk_keaktifan==1/5)echo "selected";?>>1/5</option>
                      <option value="<?php echo 1/6?>"<?php  if($ipk_keaktifan==1/6)echo "selected";?>>1/6</option>
                      <option value="<?php echo 1/7?>"<?php  if($ipk_keaktifan==1/7)echo "selected";?>>1/7</option>
                      <option value="<?php echo 1/8?>"<?php  if($ipk_keaktifan==1/8)echo "selected";?>>1/8</option>
                      <option value="<?php echo 1/9?>"<?php  if($ipk_keaktifan==1/9)echo "selected";?>>1/9</option>
                    </select>
                    </td>

                  </tr>
                  <tr class="even">
                    <td>Semester</td>
                    <td></td>
                    <td>
                    <select class="form-control" name="semester_semester">
                      <option value="9" <?php  if($semester_semester==9)echo "selected";?>>9</option>
                      <option value="8" <?php  if($semester_semester==8)echo "selected";?>>8</option>
                      <option value="7"<?php  if($semester_semester==7)echo "selected";?>>7</option>
                      <option value="6"<?php  if($semester_semester==6)echo "selected";?>>6</option>
                      <option value="5"<?php  if($semester_semester==5)echo "selected";?>>5</option>
                      <option value="4"<?php  if($semester_semester==4)echo "selected";?>>4</option>
                      <option value="3"<?php  if($semester_semester==3)echo "selected";?>>3</option>
                      <option value="2"<?php  if($semester_semester==2)echo "selected";?>>2</option>
                      <option value="1"<?php  if($semester_semester==1)echo "selected";?>>1</option>
                      <option value="<?php echo 1/2?>"<?php  if($semester_semester==1/2)echo "selected";?>>1/2</option>
                      <option value="<?php echo 1/3?>"<?php  if($semester_semester==1/3)echo "selected";?>>1/3</option>
                      <option value="<?php echo 1/4?>"<?php  if($semester_semester==1/4)echo "selected";?>>1/4</option>
                      <option value="<?php echo 1/5?>"<?php  if($semester_semester==1/5)echo "selected";?>>1/5</option>
                      <option value="<?php echo 1/6?>"<?php  if($semester_semester==1/6)echo "selected";?>>1/6</option>
                      <option value="<?php echo 1/7?>"<?php  if($semester_semester==1/7)echo "selected";?>>1/7</option>
                      <option value="<?php echo 1/8?>"<?php  if($semester_semester==1/8)echo "selected";?>>1/8</option>
                      <option value="<?php echo 1/9?>"<?php  if($semester_semester==1/9)echo "selected";?>>1/9</option>
                    </select>
                    </td>
                    <td>
                    <select class="form-control" name="semester_gaji">
                      <option value="9" <?php  if($semester_gaji==9)echo "selected";?>>9</option>
                      <option value="8" <?php  if($semester_gaji==8)echo "selected";?>>8</option>
                      <option value="7"<?php  if($semester_gaji==7)echo "selected";?>>7</option>
                      <option value="6"<?php  if($semester_gaji==6)echo "selected";?>>6</option>
                      <option value="5"<?php  if($semester_gaji==5)echo "selected";?>>5</option>
                      <option value="4"<?php  if($semester_gaji==4)echo "selected";?>>4</option>
                      <option value="3"<?php  if($semester_gaji==3)echo "selected";?>>3</option>
                      <option value="2"<?php  if($semester_gaji==2)echo "selected";?>>2</option>
                      <option value="1"<?php  if($semester_gaji==1)echo "selected";?>>1</option>
                      <option value="<?php echo 1/2?>"<?php  if($semester_gaji==1/2)echo "selected";?>>1/2</option>
                      <option value="<?php echo 1/3?>"<?php  if($semester_gaji==1/3)echo "selected";?>>1/3</option>
                      <option value="<?php echo 1/4?>"<?php  if($semester_gaji==1/4)echo "selected";?>>1/4</option>
                      <option value="<?php echo 1/5?>"<?php  if($semester_gaji==1/5)echo "selected";?>>1/5</option>
                      <option value="<?php echo 1/6?>"<?php  if($semester_gaji==1/6)echo "selected";?>>1/6</option>
                      <option value="<?php echo 1/7?>"<?php  if($semester_gaji==1/7)echo "selected";?>>1/7</option>
                      <option value="<?php echo 1/8?>"<?php  if($semester_gaji==1/8)echo "selected";?>>1/8</option>
                      <option value="<?php echo 1/9?>"<?php  if($semester_gaji==1/9)echo "selected";?>>1/9</option>
                    </select>
                    </td>
                    <td>
                    <select class="form-control" name="semester_tanggungan">
                      <option value="9" <?php  if($semester_tanggungan==9)echo "selected";?>>9</option>
                      <option value="8" <?php  if($semester_tanggungan==8)echo "selected";?>>8</option>
                      <option value="7"<?php  if($semester_tanggungan==7)echo "selected";?>>7</option>
                      <option value="6"<?php  if($semester_tanggungan==6)echo "selected";?>>6</option>
                      <option value="5"<?php  if($semester_tanggungan==5)echo "selected";?>>5</option>
                      <option value="4"<?php  if($semester_tanggungan==4)echo "selected";?>>4</option>
                      <option value="3"<?php  if($semester_tanggungan==3)echo "selected";?>>3</option>
                      <option value="2"<?php  if($semester_tanggungan==2)echo "selected";?>>2</option>
                      <option value="1"<?php  if($semester_tanggungan==1)echo "selected";?>>1</option>
                      <option value="<?php echo 1/2?>"<?php  if($semester_tanggungan==1/2)echo "selected";?>>1/2</option>
                      <option value="<?php echo 1/3?>"<?php  if($semester_tanggungan==1/3)echo "selected";?>>1/3</option>
                      <option value="<?php echo 1/4?>"<?php  if($semester_tanggungan==1/4)echo "selected";?>>1/4</option>
                      <option value="<?php echo 1/5?>"<?php  if($semester_tanggungan==1/5)echo "selected";?>>1/5</option>
                      <option value="<?php echo 1/6?>"<?php  if($semester_tanggungan==1/6)echo "selected";?>>1/6</option>
                      <option value="<?php echo 1/7?>"<?php  if($semester_tanggungan==1/7)echo "selected";?>>1/7</option>
                      <option value="<?php echo 1/8?>"<?php  if($semester_tanggungan==1/8)echo "selected";?>>1/8</option>
                      <option value="<?php echo 1/9?>"<?php  if($semester_tanggungan==1/9)echo "selected";?>>1/9</option>
                    </select>
                    </td>
                    <td>
                    <select class="form-control" name="semester_keaktifan">
                      <option value="9" <?php  if($semester_keaktifan==9)echo "selected";?>>9</option>
                      <option value="8" <?php  if($semester_keaktifan==8)echo "selected";?>>8</option>
                      <option value="7"<?php  if($semester_keaktifan==7)echo "selected";?>>7</option>
                      <option value="6"<?php  if($semester_keaktifan==6)echo "selected";?>>6</option>
                      <option value="5"<?php  if($semester_keaktifan==5)echo "selected";?>>5</option>
                      <option value="4"<?php  if($semester_keaktifan==4)echo "selected";?>>4</option>
                      <option value="3"<?php  if($semester_keaktifan==3)echo "selected";?>>3</option>
                      <option value="2"<?php  if($semester_keaktifan==2)echo "selected";?>>2</option>
                      <option value="1"<?php  if($semester_keaktifan==1)echo "selected";?>>1</option>
                      <option value="<?php echo 1/2?>"<?php  if($semester_keaktifan==1/2)echo "selected";?>>1/2</option>
                      <option value="<?php echo 1/3?>"<?php  if($semester_keaktifan==1/3)echo "selected";?>>1/3</option>
                      <option value="<?php echo 1/4?>"<?php  if($semester_keaktifan==1/4)echo "selected";?>>1/4</option>
                      <option value="<?php echo 1/5?>"<?php  if($semester_keaktifan==1/5)echo "selected";?>>1/5</option>
                      <option value="<?php echo 1/6?>"<?php  if($semester_keaktifan==1/6)echo "selected";?>>1/6</option>
                      <option value="<?php echo 1/7?>"<?php  if($semester_keaktifan==1/7)echo "selected";?>>1/7</option>
                      <option value="<?php echo 1/8?>"<?php  if($semester_keaktifan==1/8)echo "selected";?>>1/8</option>
                      <option value="<?php echo 1/9?>"<?php  if($semester_keaktifan==1/9)echo "selected";?>>1/9</option>
                    </select>
                    </td>
                  </tr>
                  <tr class="odd">
                    <td>Gaji Orang Tua</td>
                    <td></td>
                    <td></td>
                    <td>
                    <select class="form-control" name="gaji_gaji">
                      <option value="9" <?php  if($gaji_gaji==9)echo "selected";?>>9</option>
                      <option value="8" <?php  if($gaji_gaji==8)echo "selected";?>>8</option>
                      <option value="7"<?php  if($gaji_gaji==7)echo "selected";?>>7</option>
                      <option value="6"<?php  if($gaji_gaji==6)echo "selected";?>>6</option>
                      <option value="5"<?php  if($gaji_gaji==5)echo "selected";?>>5</option>
                      <option value="4"<?php  if($gaji_gaji==4)echo "selected";?>>4</option>
                      <option value="3"<?php  if($gaji_gaji==3)echo "selected";?>>3</option>
                      <option value="2"<?php  if($gaji_gaji==2)echo "selected";?>>2</option>
                      <option value="1"<?php  if($gaji_gaji==1)echo "selected";?>>1</option>
                      <option value="<?php echo 1/2?>"<?php  if($gaji_gaji==1/2)echo "selected";?>>1/2</option>
                      <option value="<?php echo 1/3?>"<?php  if($gaji_gaji==1/3)echo "selected";?>>1/3</option>
                      <option value="<?php echo 1/4?>"<?php  if($gaji_gaji==1/4)echo "selected";?>>1/4</option>
                      <option value="<?php echo 1/5?>"<?php  if($gaji_gaji==1/5)echo "selected";?>>1/5</option>
                      <option value="<?php echo 1/6?>"<?php  if($gaji_gaji==1/6)echo "selected";?>>1/6</option>
                      <option value="<?php echo 1/7?>"<?php  if($gaji_gaji==1/7)echo "selected";?>>1/7</option>
                      <option value="<?php echo 1/8?>"<?php  if($gaji_gaji==1/8)echo "selected";?>>1/8</option>
                      <option value="<?php echo 1/9?>"<?php  if($gaji_gaji==1/9)echo "selected";?>>1/9</option>
                    </select></td>
                    <td>
                    <select class="form-control" name="gaji_tanggungan">
                      <option value="9" <?php  if($gaji_tanggungan==9)echo "selected";?>>9</option>
                      <option value="8" <?php  if($gaji_tanggungan==8)echo "selected";?>>8</option>
                      <option value="7"<?php  if($gaji_tanggungan==7)echo "selected";?>>7</option>
                      <option value="6"<?php  if($gaji_tanggungan==6)echo "selected";?>>6</option>
                      <option value="5"<?php  if($gaji_tanggungan==5)echo "selected";?>>5</option>
                      <option value="4"<?php  if($gaji_tanggungan==4)echo "selected";?>>4</option>
                      <option value="3"<?php  if($gaji_tanggungan==3)echo "selected";?>>3</option>
                      <option value="2"<?php  if($gaji_tanggungan==2)echo "selected";?>>2</option>
                      <option value="1"<?php  if($gaji_tanggungan==1)echo "selected";?>>1</option>
                      <option value="<?php echo 1/2?>"<?php  if($gaji_tanggungan==1/2)echo "selected";?>>1/2</option>
                      <option value="<?php echo 1/3?>"<?php  if($gaji_tanggungan==1/3)echo "selected";?>>1/3</option>
                      <option value="<?php echo 1/4?>"<?php  if($gaji_tanggungan==1/4)echo "selected";?>>1/4</option>
                      <option value="<?php echo 1/5?>"<?php  if($gaji_tanggungan==1/5)echo "selected";?>>1/5</option>
                      <option value="<?php echo 1/6?>"<?php  if($gaji_tanggungan==1/6)echo "selected";?>>1/6</option>
                      <option value="<?php echo 1/7?>"<?php  if($gaji_tanggungan==1/7)echo "selected";?>>1/7</option>
                      <option value="<?php echo 1/8?>"<?php  if($gaji_tanggungan==1/8)echo "selected";?>>1/8</option>
                      <option value="<?php echo 1/9?>"<?php  if($gaji_tanggungan==1/9)echo "selected";?>>1/9</option>
                    </select>
                    </td>
                    <td>
                    <select class="form-control" name="gaji_keaktifan">
                      <option value="9" <?php  if($gaji_keaktifan==9)echo "selected";?>>9</option>
                      <option value="8" <?php  if($gaji_keaktifan==8)echo "selected";?>>8</option>
                      <option value="7"<?php  if($gaji_keaktifan==7)echo "selected";?>>7</option>
                      <option value="6"<?php  if($gaji_keaktifan==6)echo "selected";?>>6</option>
                      <option value="5"<?php  if($gaji_keaktifan==5)echo "selected";?>>5</option>
                      <option value="4"<?php  if($gaji_keaktifan==4)echo "selected";?>>4</option>
                      <option value="3"<?php  if($gaji_keaktifan==3)echo "selected";?>>3</option>
                      <option value="2"<?php  if($gaji_keaktifan==2)echo "selected";?>>2</option>
                      <option value="1"<?php  if($gaji_keaktifan==1)echo "selected";?>>1</option>
                      <option value="<?php echo 1/2?>"<?php  if($gaji_keaktifan==1/2)echo "selected";?>>1/2</option>
                      <option value="<?php echo 1/3?>"<?php  if($gaji_keaktifan==1/3)echo "selected";?>>1/3</option>
                      <option value="<?php echo 1/4?>"<?php  if($gaji_keaktifan==1/4)echo "selected";?>>1/4</option>
                      <option value="<?php echo 1/5?>"<?php  if($gaji_keaktifan==1/5)echo "selected";?>>1/5</option>
                      <option value="<?php echo 1/6?>"<?php  if($gaji_keaktifan==1/6)echo "selected";?>>1/6</option>
                      <option value="<?php echo 1/7?>"<?php  if($gaji_keaktifan==1/7)echo "selected";?>>1/7</option>
                      <option value="<?php echo 1/8?>"<?php  if($gaji_keaktifan==1/8)echo "selected";?>>1/8</option>
                      <option value="<?php echo 1/9?>"<?php  if($gaji_keaktifan==1/9)echo "selected";?>>1/9</option>
                    </select>
                    </td>
                  </tr>
                  <tr class="even">
                    <td>Tanggungan</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                    <select class="form-control" name="tanggungan_tanggungan">
                      <option value="9" <?php  if($tanggungan_tanggungan==9)echo "selected";?>>9</option>
                      <option value="8" <?php  if($tanggungan_tanggungan==8)echo "selected";?>>8</option>
                      <option value="7"<?php  if($tanggungan_tanggungan==7)echo "selected";?>>7</option>
                      <option value="6"<?php  if($tanggungan_tanggungan==6)echo "selected";?>>6</option>
                      <option value="5"<?php  if($tanggungan_tanggungan==5)echo "selected";?>>5</option>
                      <option value="4"<?php  if($tanggungan_tanggungan==4)echo "selected";?>>4</option>
                      <option value="3"<?php  if($tanggungan_tanggungan==3)echo "selected";?>>3</option>
                      <option value="2"<?php  if($tanggungan_tanggungan==2)echo "selected";?>>2</option>
                      <option value="1"<?php  if($tanggungan_tanggungan==1)echo "selected";?>>1</option>
                      <option value="<?php echo 1/2?>"<?php  if($tanggungan_tanggungan==1/2)echo "selected";?>>1/2</option>
                      <option value="<?php echo 1/3?>"<?php  if($tanggungan_tanggungan==1/3)echo "selected";?>>1/3</option>
                      <option value="<?php echo 1/4?>"<?php  if($tanggungan_tanggungan==1/4)echo "selected";?>>1/4</option>
                      <option value="<?php echo 1/5?>"<?php  if($tanggungan_tanggungan==1/5)echo "selected";?>>1/5</option>
                      <option value="<?php echo 1/6?>"<?php  if($tanggungan_tanggungan==1/6)echo "selected";?>>1/6</option>
                      <option value="<?php echo 1/7?>"<?php  if($tanggungan_tanggungan==1/7)echo "selected";?>>1/7</option>
                      <option value="<?php echo 1/8?>"<?php  if($tanggungan_tanggungan==1/8)echo "selected";?>>1/8</option>
                      <option value="<?php echo 1/9?>"<?php  if($tanggungan_tanggungan==1/9)echo "selected";?>>1/9</option>
                    </select>
                    </td>
                    <td>
                    <select class="form-control" name="tanggungan_keaktifan">
                      <option value="9" <?php  if($tanggungan_keaktifan==9)echo "selected";?>>9</option>
                      <option value="8" <?php  if($tanggungan_keaktifan==8)echo "selected";?>>8</option>
                      <option value="7"<?php  if($tanggungan_keaktifan==7)echo "selected";?>>7</option>
                      <option value="6"<?php  if($tanggungan_keaktifan==6)echo "selected";?>>6</option>
                      <option value="5"<?php  if($tanggungan_keaktifan==5)echo "selected";?>>5</option>
                      <option value="4"<?php  if($tanggungan_keaktifan==4)echo "selected";?>>4</option>
                      <option value="3"<?php  if($tanggungan_keaktifan==3)echo "selected";?>>3</option>
                      <option value="2"<?php  if($tanggungan_keaktifan==2)echo "selected";?>>2</option>
                      <option value="1"<?php  if($tanggungan_keaktifan==1)echo "selected";?>>1</option>
                      <option value="<?php echo 1/2?>"<?php  if($tanggungan_keaktifan==1/2)echo "selected";?>>1/2</option>
                      <option value="<?php echo 1/3?>"<?php  if($tanggungan_keaktifan==1/3)echo "selected";?>>1/3</option>
                      <option value="<?php echo 1/4?>"<?php  if($tanggungan_keaktifan==1/4)echo "selected";?>>1/4</option>
                      <option value="<?php echo 1/5?>"<?php  if($tanggungan_keaktifan==1/5)echo "selected";?>>1/5</option>
                      <option value="<?php echo 1/6?>"<?php  if($tanggungan_keaktifan==1/6)echo "selected";?>>1/6</option>
                      <option value="<?php echo 1/7?>"<?php  if($tanggungan_keaktifan==1/7)echo "selected";?>>1/7</option>
                      <option value="<?php echo 1/8?>"<?php  if($tanggungan_keaktifan==1/8)echo "selected";?>>1/8</option>
                      <option value="<?php echo 1/9?>"<?php  if($tanggungan_keaktifan==1/9)echo "selected";?>>1/9</option>
                    </select>
                    </td>
                  </tr>
                  <tr class="odd">
                    <td>Keaktifan Organisasi</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                    <select class="form-control" name="keaktifan_keaktifan">
                      <option value="9" <?php  if($keaktifan_keaktifan==9)echo "selected";?>>9</option>
                      <option value="8" <?php  if($keaktifan_keaktifan==8)echo "selected";?>>8</option>
                      <option value="7"<?php  if($keaktifan_keaktifan==7)echo "selected";?>>7</option>
                      <option value="6"<?php  if($keaktifan_keaktifan==6)echo "selected";?>>6</option>
                      <option value="5"<?php  if($keaktifan_keaktifan==5)echo "selected";?>>5</option>
                      <option value="4"<?php  if($keaktifan_keaktifan==4)echo "selected";?>>4</option>
                      <option value="3"<?php  if($keaktifan_keaktifan==3)echo "selected";?>>3</option>
                      <option value="2"<?php  if($keaktifan_keaktifan==2)echo "selected";?>>2</option>
                      <option value="1"<?php  if($keaktifan_keaktifan==1)echo "selected";?>>1</option>
                      <option value="<?php echo 1/2?>"<?php  if($keaktifan_keaktifan==1/2)echo "selected";?>>1/2</option>
                      <option value="<?php echo 1/3?>"<?php  if($keaktifan_keaktifan==1/3)echo "selected";?>>1/3</option>
                      <option value="<?php echo 1/4?>"<?php  if($keaktifan_keaktifan==1/4)echo "selected";?>>1/4</option>
                      <option value="<?php echo 1/5?>"<?php  if($keaktifan_keaktifan==1/5)echo "selected";?>>1/5</option>
                      <option value="<?php echo 1/6?>"<?php  if($keaktifan_keaktifan==1/6)echo "selected";?>>1/6</option>
                      <option value="<?php echo 1/7?>"<?php  if($keaktifan_keaktifan==1/7)echo "selected";?>>1/7</option>
                      <option value="<?php echo 1/8?>"<?php  if($keaktifan_keaktifan==1/8)echo "selected";?>>1/8</option>
                      <option value="<?php echo 1/9?>"<?php  if($keaktifan_keaktifan==1/9)echo "selected";?>>1/9</option>
                    </select>
                    </td>
                  </tr>
                </tbody>
              </table>
              <input id="submit-btn" class="btn btn-primary col-sm-12" style="background-color:#DD4B39;margin-top:20px;" type="submit" value="Simpan Perubahan">
              <?php if($salah==1)
                    echo "<p style='text-align:center;padding-top:70px;'> Nilai Rasio Konsistensi lebih besar dari 10% </p>";?>
              </form>
            </div>
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b></b>
        </div>
        <strong>Tugas Akhir - Jurusan Sistem Informasi Institut Teknologi Sepuluh Nopember.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-light">
        <div class="tab-content">
            <div class="tab-pane" id="control-sidebar-home-tab">
            </div><!-- /.tab-pane -->
        </div>
      </aside>
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>assets/adminlte/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url(); ?>assets/adminlte/bootstrap/js/bootstrap.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="<?php echo base_url(); ?>assets/adminlte/plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url(); ?>assets/adminlte/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url(); ?>assets/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url(); ?>assets/adminlte/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url(); ?>assets/adminlte/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url(); ?>assets/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url(); ?>assets/adminlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>assets/adminlte/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/adminlte/dist/js/app.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url(); ?>assets/adminlte/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>assets/adminlte/dist/js/demo.js"></script>
  </body>
    
</html>