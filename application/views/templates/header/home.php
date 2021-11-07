<?php
$nav_url = (object)[
  'home' => base_url('home'),
  'tutorial' => base_url('tutorial'),
  'belajar' => base_url('belajar'),
  'news' => base_url('news'),
  'referral' => base_url('referral'),
  'vip' => base_url('vip'),
  'profile' => base_url('profile'),
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="NOBAR TE BARENG">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="theme-color" content="#DB4664">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <!-- Title -->
  <title><?= $title ?> | <?= $app_name ?></title>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" href="<?= base_url() ?>assets/favicon/favicon.ico">
  <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url() ?>assets/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url() ?>assets/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url() ?>assets/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>assets/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url() ?>assets/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url() ?>assets/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url() ?>assets/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url() ?>assets/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>assets/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url() ?>assets/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url() ?>assets/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?= base_url() ?>assets/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#fff">
  <meta name="theme-color" content="#DB4664">
  <meta name="msapplication-TileImage" content="<?= base_url() ?>assets/favicon/ms-icon-144x144.png">
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-icons.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/tiny-slider.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/baguetteBox.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/rangeslider.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/vanilla-dataTables.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/apexcharts.css">
  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/style.css">
  <!-- dynamic css -->
  <?php if (!empty($plugin_styles)) : ?>
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <?php foreach ($plugin_styles as $style) : ?>
      <link href="<?= $style ?>" rel="stylesheet" type="text/css" />
    <?php endforeach; ?>
    <!-- END PAGE LEVEL PLUGINS -->
  <?php endif; ?>
  <!-- Web App Manifest -->
  <link rel="manifest" href="<?= base_url() ?>assets/manifest.json">
  <style>
    .btn-danger {
      background-color: #ED6868;
    }

    .btn-danger:focus {
      background-color: #F97A7A;
    }

    .btn-danger:hover {
      background-color: #F97A7A;
    }

    .btn-indigo {
      background-color: #373459;
      color: white;
    }

    .btn-indigo:focus {
      background-color: #4C4592;
      color: white;
    }

    .btn-indigo:hover {
      background-color: #4C4592;
      color: white;
    }

    .bg-two {
      background-color: #DB4664;
    }

    <?php
    for ($i = 0; $i <= 100; $i++) {
      echo ".rounded-$i { border-radius: {$i}px; } ";
    }

    ?>
  </style>
</head>

<body class="bg-light" style="padding-top: 59px; min-height: 100vh;">
  <!-- Preloader -->
  <!-- <div id="preloader">
    <div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
  </div> -->


  <!-- Toast-->
  <div class="toast toast-autohide custom-toast-1 toast-danger home-page-toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="10000" data-bs-autohide="true" style="display: none; z-index: 999;">
    <div class="toast-body">
      <svg class="bi bi-bookmark-check text-white" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="../../www.w3.org/2000/svg.html" id="toast-icon">
        <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z">
        </path>
        <path fill-rule="evenodd" d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z">
        </path>
      </svg>
      <div class="toast-text ms-3 me-2">
        <p class="mb-1 text-white" id="toast-title"></p>
        <small class="d-block" id="toast-fill"></small>
      </div>
      <button class="btn btn-close btn-close-white position-relative p-1 ms-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
  <!-- Internet Connection Status -->
  <!-- # This code for showing internet connection status -->
  <div class="internet-connection-status" id="internetStatus"></div>
  <!-- Header Area -->
  <div class="header-area" id="headerArea">
    <div class="container">
      <!-- # Paste your Header Content from here -->
      <!-- # Header Five Layout -->
      <!-- # Copy the code from here ... -->
      <!-- Header Content -->
      <div class="header-content header-style-five position-relative d-flex align-items-center justify-content-between">
        <!-- Logo Wrapper -->
        <div class="logo-wrapper"><a href="<?= base_url() ?>home"><img src="<?= base_url() ?>assets/img/custom/duahati_warna.png" alt=""></a></div>
        <!-- Navbar Toggler -->
        <div class="navbar--toggler" id="affanNavbarToggler" data-bs-toggle="offcanvas" data-bs-target="#affanOffcanvas" aria-controls="affanOffcanvas"><span class="d-block"></span><span class="d-block"></span><span class="d-block"></span></div>
      </div>
      <!-- # Header Five Layout End -->
    </div>
  </div>
  <!-- # Sidenav Left -->
  <!-- Offcanvas -->
  <div class="offcanvas offcanvas-start" id="affanOffcanvas" data-bs-scroll="true" tabindex="-1" aria-labelledby="affanOffcanvsLabel">
    <button class="btn-close btn-close-white text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    <div class="offcanvas-body p-0">
      <!-- Side Nav Wrapper -->
      <div class="sidenav-wrapper">
        <!-- Sidenav Profile -->
        <div class="sidenav-profile bg-two">
          <div class="sidenav-style1"></div>
          <!-- User Thumbnail -->
          <div class="user-profile"><img id="nav_foto" src="" onerror="this.src='<?= base_url() ?>assets/img/custom/pp.png'" alt=""></div>
          <!-- User Info -->
          <div class="user-info">
            <h6 class="user-name mb-0" id="nav_nama"></h6>
          </div>
        </div>
        <!-- Sidenav Nav -->
        <ul class="sidenav-nav ps-0">
          <li><a href="<?= $nav_url->home ?>"><i class="bi bi-house-door"></i>Home</a></li>
          <li><a href="<?= $nav_url->tutorial ?>"><i class="bi bi-lightbulb"></i>Tutorial</a></li>
          <li><a href="<?= $nav_url->belajar ?>"><i class="bi bi-play-btn"></i>Belajar</a></li>
          <li><a href="<?= $nav_url->news ?>"><i class="bi bi-newspaper"></i>News</a></li>
          <li><a href="<?= $nav_url->referral ?>"><i class="bi bi-people"></i>Referral</a></li>
          <li><a href="<?= $nav_url->vip ?>"><i class="bi" style="font-style: normal; font-size: .7rem; font-weight: bold;">VIP</i>VIP</a></li>
          <li><a href="<?= $nav_url->profile ?>"><i class="bi bi-person"></i>Profile</a></li>
          <li><a href="<?= base_url() ?>home/tes"><i class="bi bi-checj"></i>Tes Video Embed</a></li>
          <li><a href="#" data-bs-toggle="modal" data-bs-target="#logoutModal"><i class="bi bi-box-arrow-right"></i>Logout</a></li>
        </ul>
        <!-- Social Info -->
        <div class="social-info-wrap"><a href="#"><i class="bi bi-facebook"></i></a><a href="#"><i class="bi bi-twitter"></i></a><a href="#"><i class="bi bi-linkedin"></i></a></div>
        <!-- Copyright Info -->
        <div class="copyright-info">
          <p>2021 &copy; Infinit.id</a></p>
        </div>
      </div>
    </div>
  </div>
  <input type="hidden" id="nav_bar_render" value="1">

  <!-- main page content -->
  <?php if (file_exists(VIEWPATH . "templates/contents/{$content}.php")) : ?>
    <?php $this->load->view("templates/contents/{$content}.php", ['nav_url' => $nav_url]); ?>
  <?php endif; ?>
  <!-- main page content ends -->

  <?php $this->load->view('templates/footer'); ?>