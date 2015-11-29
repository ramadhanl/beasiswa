<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pendaftaran Beasiswa</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/icon.png">
    
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- css -->
    <link href="<?php echo base_url(); ?>assets/mamba/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>assets/mamba/css/style.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>assets/mamba/color/default.css" rel="stylesheet" media="screen">
    <script src="<?php echo base_url(); ?>assets/mamba/js/modernizr.custom.js"></script>
  </head>
    <body>
    <div class="menu-area">
            <div id="dl-menu" class="dl-menuwrapper">
                        <button class="dl-trigger">Open Menu</button>
                        <ul class="dl-menu">
                            <li>
                                <a href="#intro">Home</a>
                            </li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#works">Works</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li>
                                <a href="#">Sub Menu</a>
                                <ul class="dl-submenu">
                                    <li><a href="#">Sub menu</a></li>
                                    <li><a href="#">Sub menu</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /dl-menuwrapper -->
    </div>  

      <!-- intro area -->     
      <div id="intro">
      
            <div class="intro-text">
                <div class="container">
                    <div class="row">
                    <div class="col-md-12">
            
                        <div class="brand">
                            <h1><a href="index.html">Beasiswa PPA</a></h1>
                            <div class="line-spacer"></div>
                            <p><span>Formulir pendaftaran beasiswa PPA</span></p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            
     </div>
      

      
      
      <!-- About -->
      <section id="about" class="home-section bg-white">
        <div class="container">
              <div class="row">
                  
                <h3>Formulir Pendaftaran</h3>
            
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
                <div class="col-lg-10">
                  <div class="form-panel">
                      <form id="form_pendaftaran" class="form-horizontal style-form" method="POST" action="<?php echo base_url(); ?>form/submit_form">
                          <div class="form-group">
                              <label class="col-sm-3 col-sm-3 control-label">Nama :</label>
                              <div class="col-sm-9">
                                  <input id="nama_lengkap" name="nama_lengkap" type="text" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 col-sm-3 control-label">Tempat lahir :</label>
                              <div class="col-sm-9">
                                  <input id="tempat_lahir" name="tempat_lahir" type="text" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 col-sm-3 control-label">Tanggal lahir :</label>
                              <div class="col-sm-9">
                                  <input name="tanggal_lahir" type="date" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 col-sm-3 control-label">Jenis Kelamin :</label>
                              <div class="col-sm-9">
                                  <div class="radio">
                                    <label> 
                                      <input name="jenis_kelamin" type="radio" value="L"> 
                                      <p style="text-align:left">  Laki-laki</p>
                                    </label>
                                  </div>
                                  <div class="radio">
                                    <label>
                                      <input name="jenis_kelamin" type="radio" value="P">
                                      <p style="text-align:left">  Perempuan</p>
                                    </label>
                                  </div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 col-sm-3 control-label">NRP :</label>
                              <div class="col-sm-9">
                                  <input name="nrp" type="text" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 col-sm-3 control-label">Jurusan :</label>
                              <div class="col-sm-9">
                                  <input name="jurusan" type="text" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 col-sm-3 control-label">Fakultas :</label>
                              <div class="col-sm-9">
                                  <input name="fakultas" type="text" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 col-sm-3 control-label">Perguruan Tinggi :</label>
                              <div class="col-sm-9">
                                  <input name="perguruan_tinggi" type="text" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 col-sm-3 control-label">Alamat rumah :</label>
                              <div class="col-sm-9">
                                  <input name="alamat_rumah" type="text" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 col-sm-3 control-label">No telepon :</label>
                              <div class="col-sm-9">
                                  <input name="no_telepon" type="text" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 col-sm-3 control-label">Email :</label>
                              <div class="col-sm-9">
                                  <input name="email" type="email" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 col-sm-3 control-label">Sks tempuh :</label>
                              <div class="col-sm-9">
                                  <input name="sks_tempuh" type="text" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 col-sm-3 control-label">IPK :</label>
                              <div class="col-sm-9">
                                  <input name="ipk" type="text" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 col-sm-3 control-label">Semester :</label>
                              <div class="col-sm-9">
                                  <input name="semester" type="text" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 col-sm-3 control-label">Tanggungan :</label>
                              <div class="col-sm-9">
                                  <input name="jumlah_tanggungan_ortu" type="text" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 col-sm-3 control-label">Gaji orang tua :</label>
                              <div class="col-sm-9">
                                  <select name="level_gaji_ortu" class="form-control">
                                    <option value="1">Golongan 1 ( < Rp 500.000,00 )</option>
                                    <option value="2">Golongan 2 ( Rp 500.000,00 s/d Rp 1.500.000,00 )</option>
                                    <option value="3">Golongan 3 ( Rp 1.500.000,00 s/d Rp 3.000.000,00 )</option>
                                    <option value="4">Golongan 4 ( Rp 3.000.000,00 s/d Rp 5.000.000,00 )</option>
                                    <option value="5">Golongan 5 ( > Rp 5.000.000,00 )</option>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 col-sm-3 control-label">Berorganisasi di kampus ? :</label>
                              <div class="col-sm-9">
                                  <div class="radio">
                                    <label> 
                                      <input name="keaktifan" type="radio" name="optionsRadios" name="optionsRadios1" value=1> 
                                      <p style="text-align:left">  IYA</p>
                                    </label>
                                  </div>
                                  <div class="radio">
                                    <label>
                                      <input name="keaktifan" type="radio" name="optionsRadios" name="optionsRadios2" value=0>
                                      <p style="text-align:left">  TIDAK</p>
                                    </label>
                                  </div>
                              </div>
                          </div>
                          <input type="hidden" value="1" name="tipe_beasiswa">
                          <label class="col-sm-3 col-sm-3 control-label"></label>
                          <input id="submit-btn" class="btn btn-primary col-sm-9" href="index.html" type="submit" value="Kirim formulir">
                      </form>
                      
                  </div>
                </div><!-- col-lg-12-->         
            </div><!-- /row -->

              </div>              
          </div>      
      </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Ramadhan Rosihadi Perdana - Teknik Informatika ITS</p>
                </div>
            </div>      
        </div>  
    </footer>
     
     <!-- js -->
    <script src="<?php echo base_url(); ?>assets/mamba/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/mamba/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/mamba/js/jquery.smooth-scroll.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/mamba/js/jquery.dlmenu.js"></script>
    <script src="<?php echo base_url(); ?>assets/mamba/js/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/mamba/js/custom.js"></script>
    
</html>