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
                  <li><a style="padding:15px;height:58px;background-color:#575398;" href="<?php echo base_url(); ?>admin/matriks_ahp">Setting Matriks AHP</a></li>
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
              <table class="display">
                <thead>
                  <tr>
                    <th>Kriteria Beasiswa</th>
                    <th>IPK</th>
                    <th>Semester</th>
                    <th>Gaji Orang Tua</th>
                    <th>Tanggungan</th>
                    <th>Keaktifan Organisasi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="odd">
                    <th>IPK</th>
                    <td>1.00</td>
                    <td>3.00</td>
                    <td>7.00</td>
                    <td>7.00</td>
                    <td>5.00</td>
                  </tr>
                  <tr class="even">
                    <th>Semester</th>
                    <td>1.00</td>
                    <td>3.00</td>
                    <td>7.00</td>
                    <td>7.00</td>
                    <td>5.00</td>
                  </tr>
                  <tr class="odd">
                    <th>Gaji Orang Tua</th>
                    <td>1.00</td>
                    <td>3.00</td>
                    <td>7.00</td>
                    <td>7.00</td>
                    <td>5.00</td>
                  </tr>
                  <tr class="even">
                    <th>Tanggungan</th>
                    <td>1.00</td>
                    <td>3.00</td>
                    <td>7.00</td>
                    <td>7.00</td>
                    <td>5.00</td>
                  </tr>
                  <tr class="odd">
                    <th>Keaktifan Organisasi</th>
                    <td>1.00</td>
                    <td>3.00</td>
                    <td>7.00</td>
                    <td>7.00</td>
                    <td>5.00</td>
                  </tr>
                  <tr class="even">
                    <th>Total</th>
                    <td>1.00</td>
                    <td>3.00</td>
                    <td>7.00</td>
                    <td>7.00</td>
                    <td>5.00</td>
                  </tr>
                  <tr style="background-color:green">
                    <th>Nilai Prioritas</th>
                    <td>1.00</td>
                    <td>3.00</td>
                    <td>7.00</td>
                    <td>7.00</td>
                    <td>5.00</td>
                  </tr>
                  <tr style="background-color:yellow">
                    <td colspan="6">Nilai CR (Rasio Konsistensi) = 0.45</td>
                  </tr>
                </tbody>
              </table>
              <a id="submit-btn" class="btn btn-primary col-sm-12" style="background-color:#605CA8;margin-top:20px;" href="<?php echo base_url(); ?>admin/matriks_ahp_ubah"> Ubah Data</a>
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