<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Advanced form elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <!--<link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">-->
  <!-- Bootstrap Color Picker -->
  <!--<link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">-->
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <!--<link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">-->
  <!--<link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">-->
  <!-- Bootstrap4 Duallistbox -->
  <!--<link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">-->
  <!-- BS Stepper -->
  <!--<link rel="stylesheet" href="../../plugins/bs-stepper/css/bs-stepper.min.css">-->
  <!-- dropzonejs -->
  <!--<link rel="stylesheet" href="../../plugins/dropzone/min/dropzone.min.css">-->
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/summernote/summernote-bs4.min.css">
  <!-- Bootstrap 5 CSS -->
  <!-- <link href="assets/front/css/bootstrap.min.css" rel="stylesheet"> -->

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <!-- C:/xampp/htdocs/ranemanagementconsultant.com/assets/front/css/bootstrap.min.css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/css/bootstrap.min.css">



</head>


<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <!--    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                      </li>
                      <li class="nav-item d-none d-sm-inline-block">
                        <a href="index3.html" class="nav-link">Home</a>
                      </li>
                      <li class="nav-item d-none d-sm-inline-block">
                        <a href="#" class="nav-link">Contact</a>
                      </li>
                    </ul>-->

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <!--      <li class="nav-item">
                            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                              <i class="fas fa-search"></i>
                            </a>
                            <div class="navbar-search-block">
                              <form class="form-inline">
                                <div class="input-group input-group-sm">
                                  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                  <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                      <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                      <i class="fas fa-times"></i>
                                    </button>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </li>-->

        <!-- Messages Dropdown Menu -->
        <!--      <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown" href="#">
                              <i class="far fa-comments"></i>
                              <span class="badge badge-danger navbar-badge">3</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                              <a href="#" class="dropdown-item">
                                 Message Start 
                                <div class="media">
                                  <img src="<?php echo base_url(); ?>/assets/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                  <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                      Brad Diesel
                                      <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                  </div>
                                </div>
                                 Message End 
                              </a>
                              <div class="dropdown-divider"></div>
                              <a href="#" class="dropdown-item">
                                 Message Start 
                                <div class="media">
                                  <img src="<?php echo base_url(); ?>/assets/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                  <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                      John Pierce
                                      <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                  </div>
                                </div>
                                 Message End 
                              </a>
                              <div class="dropdown-divider"></div>
                              <a href="#" class="dropdown-item">
                                 Message Start 
                                <div class="media">
                                  <img src="<?php echo base_url(); ?>/assets/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                  <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                      Nora Silvester
                                      <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                  </div>
                                </div>
                                 Message End 
                              </a>
                              <div class="dropdown-divider"></div>
                              <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                            </div>
                          </li> -->
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" href="<?php echo base_url('admin/Admin_Login/logout') ?>">
            Logout
          </a>
        </li>
        <!-- <li class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                      </a>
                    </li> -->
      </ul>
    </nav>
    <!-- /.navbar -->