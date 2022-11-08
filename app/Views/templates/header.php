<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Duta Jaringan Indonesia</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?= base_url('./styles/bootstrap.min.css'); ?>">
      <!-- style css -->
      <link rel="stylesheet" href="<?= base_url('./styles/style.css'); ?>">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?= base_url('./styles/responsive.css'); ?>">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?= base_url('./styles/jquery.mCustomScrollbar.min.css'); ?>">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
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
            <div class="header">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col logo_section">
                        <div class="full">
                           <div class="center-desk">
                              <div class="logo">
                                 <a href="<?= base_url(''); ?>"><img src="<?= base_url('./images/logo.png'); ?>" alt="#" /></a>
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
                                 <a href="<?= base_url('/products'); ?>">Products</a>
                                 <div class="dropdown-navbar-content">
                                    <div class="dropright">
                                    <div class="dropdown dropright">
                                    <!-- <a href="<?= base_url('/products/#CCTV'); ?>">CCTV NVR Switch UTP Electrical Fiber Optic Media Converter Harddisk</a> -->
                                    <button type="button" class="" data-toggle="dropdown"><a href="<?= base_url('/products/#CCTV'); ?>">CCTV <i class="fa fa-angle-right" aria-hide="true"></i></a></button>
                                    <button type="button" class="" data-toggle="dropdown"><a href="<?= base_url('/products/#CCTV'); ?>">Access Control <i class="fa fa-angle-right" aria-hide="true"></i></a></button>
                                    <button type="button" class="" data-toggle="dropdown"><a href="<?= base_url('/products/#CCTV'); ?>">Cables <i class="fa fa-angle-right" aria-hide="true"></i></a></button>                                    
                                    <button type="button" class="" data-toggle="dropdown"><a href="<?= base_url('/products/#CCTV'); ?>">Grounding <i class="fa fa-angle-right" aria-hide="true"></i></a></button>
                                    <button type="button" class="" data-toggle="dropdown"><a href="<?= base_url('/products/#CCTV'); ?>">Harddisk <i class="fa fa-angle-right" aria-hide="true"></i></a></button>
                                    <button type="button" class="" data-toggle="dropdown"><a href="<?= base_url('/products/#CCTV'); ?>">Internet of Things <i class="fa fa-angle-right" aria-hide="true"></i></a></button>
                                    <button type="button" class="" data-toggle="dropdown"><a href="<?= base_url('/products/#CCTV'); ?>">Mesin Absen <i class="fa fa-angle-right" aria-hide="true"></i></a></button>
                                    <button type="button" class="" data-toggle="dropdown"><a href="<?= base_url('/products/#CCTV'); ?>">Media Converter <i class="fa fa-angle-right" aria-hide="true"></i></a></button>
                                    <button type="button" class="" data-toggle="dropdown"><a href="<?= base_url('/products/#CCTV'); ?>">NVR <i class="fa fa-angle-right" aria-hide="true"></i></a></button>
                                    <!--<div class="dropright-content">
                                    <div class="dropdown-menu">
                                       <a class="drodown-item">Item#$1</a>
                                    </div>
                                    </div> -->
                                    <!--Consultation
                                    Implementation
                                    Rental
                                    Maintenance and service -->
                                    
                                    </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="dropdown-navbar">
                                 <a href="<?= base_url('/services'); ?>">Services</a>
                                 <div class="dropdown-navbar-content">
                                    <button type="button"><a href="<?= base_url('/services/#Implementation'); ?>">Implementation</a></button>
                                    <button type="button"><a href="<?= base_url('/services/#Rental'); ?>">Rental</a></button>
                                    <button type="button"><a href="<?= base_url('/services/#Maintenance'); ?>">Maintenance & Service</a></button>
                                    <button type="button"><a href="<?= base_url('/services/#Webdev'); ?>">Web Development</a></button>
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