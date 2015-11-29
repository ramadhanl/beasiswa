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
  </head>
    <body class="skin-red">
    <div class="wrapper">

      <header class="main-header">
        
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <div class="navbar-custom-menu" style="float:left;margin-left:10px;">
              <ul class="nav navbar-nav menu-nav2">
                  <li><a style="padding:15px;height:58px;" href="<?php echo base_url(); ?>">Sistem Informasi Beasiswa</a></li>
              </ul>
          </div>
          <div class="navbar-custom-menu" style="float:left;margin-left:50px;">
              <ul class="nav navbar-nav menu-nav2">
                  <li><a style="padding:15px;height:58px;background-color:#C74433;" href="<?php echo base_url(); ?>form/beasiswa_ppa">Pendaftaran PPA</a></li>
                  <li><a style="padding:15px;height:58px;" href="<?php echo base_url(); ?>form/beasiswa_bpp">Pendaftaran BPP</a></li>
              </ul>
          </div>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav unik" >
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a style="height:58px;" href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs">Login</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- Menu Body -->
                  <form action="<?php echo base_url(); ?>pegawai/login_proses" method="POST">
                  <li class="user-body" style="padding:10px;">
                    <input  type="text" class="form-control" name="email" placeholder="Email">
                  </li>
                  <li class="user-body" style="padding:10px;">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                  </li>
                  <li class="user-footer" style="padding:10px;">
                    <input type="submit" class="form-control btn btn-default" name="submit" value="Login">
                  </li>
                  </form>
                </ul>
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
          <h1>
            Beasiswa Peningkatan Prestasi Akademik
            <small>Formulilr Pendaftaran</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-10 connectedSortable">
              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Formulir Pendaftaran Beasiswa PPA</h3>
                  <!-- tools box -->
                  </div>
                <div class="box-body">
                  <form action="<?php echo base_url(); ?>home/insert_ppa" method="post">
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
                    <div class="form-group">
                      <label>Pekerjaan :</label>
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
                      <select name="prestasi" class="form-control">
                        <option value="1">Ada</option>
                        <option value="0">Tidak ada</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Alamat :</label><input type="text" class="form-control" name="alamat" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                      <label>Telepon :</label>
                      <input type="text" class="form-control" name="telepon" placeholder="Telepon">
                    </div>
                  <input id="submit-btn" class="btn btn-primary col-sm-12" style="background-color:#DD4B39;" href="index.html" type="submit" value="Kirim formulir">

              </div>

            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">

              

              
                  
            </section><!-- right col -->
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