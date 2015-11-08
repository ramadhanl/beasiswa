<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pendaftaran Beasiswa</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/icon.png">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/jquery.orgchart.css" media="all" rel="stylesheet" type="text/css" />

  </head>

  <body>
<div id="content" onmousedown="mousedown()">
  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="<?php echo base_url();?>" class="logo"><b>Welcome to The Laboratory!</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
            </div>
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?php echo base_url(); ?>home/logout">Logout</a></li>
                </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="<?php echo base_url();?>"><img src="<?php echo base_url(); ?>assets/img/profile_pict/<?php echo $this->session->userdata('username');?>.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered"><?php echo $this->session->userdata('nama');?></h5>
                  <li class="sub-menu">
                      <a class="examination" href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Welcome to The Laboratory!</span>
                      </a>
                      <ul  class="sub">
                          <li class="available_exam"><a  href="<?php echo base_url(); ?>area1_orgchart">Area 1</a></li>
                          <li class="available_exam"><a  href="<?php echo base_url(); ?>area2_geolocation">Area 2</a></li>
                          <li class="available_exam"><a  href="<?php echo base_url(); ?>area3_mouseevent">Area 3</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a class="profile" href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>My Profile</span>
                      </a>
                      <ul class="sub">
                          <li class="setting"><a  href="<?php echo base_url(); ?>profiles">Settings</a></li>
                          <li><a  href="#">Friends</a></li>
                      </ul>
                  </li>
            </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->