<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url('./styles/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('./styles/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('./styles/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('./styles/jquery.mCustomScrollbar.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('./styles/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('./styles/responsive.css'); ?>">

    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />

    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

    <!-- Title -->
    <title>Duta Jaringan Indonesia</title>
  </head>
  <!-- body -->

  <body class="main-layout">

    <!-- loader  -->
    <div class="loader_bg">
      <div class="loader"><img src="<?= base_url('./images/loading.gif'); ?>" alt="#" /></div>
    </div>
    <!-- end loader -->

    <div class="wrapper">
      <!-- end loader -->
      <div class="sidebar">
        <!-- Sidebar  -->
        <nav id="sidebar">
          <div class="logo_side">
            <div class="col-md-10">
              <img src="<?= base_url('./images/logo_alt.png'); ?>" alt="#" />
            </div>

            <div id="dismiss">
              <i class="fa fa-arrow-left"></i>
            </div>

            <ul class="list-unstyled components">
              <li class="active"> <a href="<?= base_url(''); ?>">Home</a> </li>
              <li><a href="<?= base_url('/about'); ?>">About </a> </li>
              <li><a href="<?= base_url('/works'); ?>">Work</a> </li>
              <li><a href="#contact">Contact </a> </li>
            </ul>
        </nav>
      </div>

      <div id="content">
        <!-- header -->
        <header>
          <!-- header inner -->
          <div class="header border-0 shadow">
            <div class="container-fluid">
              <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col logo_section">
                  <div class="full">
                    <div class="center-desk">
                      <div class="logo">
                        <a href="<?= base_url(); ?>">
                          <img src="<?= base_url('./images/logo.png'); ?>" alt="#" />
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7">
                  <div class="navbar-overlay" onclick="toggleMenuOpen()"></div>

                  <button type="button" class="navbar-burger" onclick="toggleMenuOpen()">
                    <img src="<?= base_url('./images/menu_icon.png'); ?>" alt="#" />
                  </button>

                  <nav class="navbar-menu">
                    <div class="dropdown-navbar">
                      <a href="">Products</a>
                      <div class="dropdown-navbar-content">
                        <div class="dropright">
                          <div class="dropdown dropright">
                            <!-- <a href="<?= base_url('/products/#CCTV'); ?>">CCTV NVR Switch UTP Electrical Fiber Optic Media Converter Harddisk</a> -->

                            <a href="<?= base_url('/products/#CCTV'); ?>" data-toggle="dropdown">Absent Machine
                              <i class="fa fa-angle-right" aria-hide="true"></i>
                            </a>

                            <div class="dropdown-menu">
                              <a class="drodown-item">Item#$1</a>
                            </div>

                            <a href="<?= base_url('/products/#CCTV'); ?>" data-toggle="dropdown">Access Control <i class="fa fa-angle-right" aria-hide="true"></i></a>
                            <div class="dropdown-menu">
                              <a class="drodown-item">Item#$1</a>
                            </div>
                            <a href="<?= base_url('/products/#CCTV'); ?>" data-toggle="dropdown">Cables <i class="fa fa-angle-right" aria-hide="true"></i></a>
                            <div class="dropdown-menu">
                              <a class="drodown-item">Item#$1</a>
                            </div>
                            <a href="<?= base_url('/products/#CCTV'); ?>" data-toggle="dropdown">CCTV <i class="fa fa-angle-right" aria-hide="true"></i></a>
                            <div class="dropdown-menu">
                              <a class="drodown-item">Item#$1</a>
                            </div>
                            <a href="<?= base_url('/products/#CCTV'); ?>" data-toggle="dropdown">Grounding <i class="fa fa-angle-right" aria-hide="true"></i></a>
                            <div class="dropdown-menu">
                              <a class="drodown-item">Item#$1</a>
                            </div>
                            <a href="<?= base_url('/products/#CCTV'); ?>" data-toggle="dropdown">Harddisk <i class="fa fa-angle-right" aria-hide="true"></i></a>
                            <div class="dropdown-menu">
                              <a class="drodown-item">Item#$1</a>
                            </div>
                            <a href="<?= base_url('/products/#CCTV'); ?>" data-toggle="dropdown">Internet of Things <i class="fa fa-angle-right" aria-hide="true"></i></a>
                            <div class="dropdown-menu">
                              <a class="drodown-item">Item#$1</a>
                            </div>
                            <a href="<?= base_url('/products/#CCTV'); ?>" data-toggle="dropdown">Media Converter <i class="fa fa-angle-right" aria-hide="true"></i></a>
                            <div class="dropdown-menu">
                              <a class="drodown-item">Item#$1</a>
                            </div>
                            <a href="<?= base_url('/products/#CCTV'); ?>" data-toggle="dropdown">NVR <i class="fa fa-angle-right" aria-hide="true"></i></a>
                            <div class="dropdown-menu">
                              <a class="drodown-item">Item#$1</a>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="dropdown-navbar">
                      <a href="<?= base_url('/services'); ?>">Services</a>

                      <div class="dropdown-navbar-content">
                        <div class="dropright">
                          <a href="<?= base_url('/services/#Construction'); ?>">Construction
                            <i class="fa fa-angle-right" aria-hide="true"></i>
                          </a>

                          <a href="<?= base_url('/services/#Implementation'); ?>">Implementation
                            <i class="fa fa-angle-right" aria-hide="true"></i>
                          </a>

                          <a href="<?= base_url('/services/#Maintenance'); ?>">Maintenance & Service
                            <i class="fa fa-angle-right" aria-hide="true"></i>
                          </a>

                          <a href="<?= base_url('/services/#Rental'); ?>">Rental
                            <i class="fa fa-angle-right" aria-hide="true"></i>
                          </a>

                          <a href="<?= base_url('/services/#Webdev'); ?>">Web Development
                            <i class="fa fa-angle-right" aria-hide="true"></i>
                          </a>
                        </div>
                      </div>
                    </div>

                    <a href="<?= base_url('/about'); ?>">About</a>
                    <a href="#contact">Contact</a>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </header>
        <!-- end header inner -->
        <!-- end header -->