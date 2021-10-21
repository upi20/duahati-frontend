<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="NOBAR TE BARENG">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="theme-color" content="#0134d4">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <!-- Title -->
  <title><?= $title ?> | <?= $app_name ?></title>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" href="<?= base_url() ?>assets/img/core-img/favicon.ico">
  <link rel="apple-touch-icon" href="<?= base_url() ?>assets/img/icons/icon-96x96.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url() ?>assets/img/icons/icon-152x152.png">
  <link rel="apple-touch-icon" sizes="167x167" href="<?= base_url() ?>assets/img/icons/icon-167x167.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>assets/img/icons/icon-180x180.png">
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
</head>

<body class="bg-white">
  <!-- Preloader -->
  <!-- <div id="preloader">
    <div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
  </div> -->


  <!-- Toast-->
  <div class="toast toast-autohide custom-toast-1 toast-danger home-page-toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="10000" data-bs-autohide="true" style="display: none;">
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
  <div class="header-area py-1" style="height: auto;" id="headerArea">
    <div class="container">
      <!-- # Paste your Header Content from here -->
      <!-- # Header Five Layout -->
      <!-- # Copy the code from here ... -->
      <!-- Header Content -->
      <div class="header-content header-style-two position-relative d-flex align-items-center justify-content-between py-3">
        <!-- Logo Wrapper -->
        <div class="logo-wrapper"><a href="<?= base_url() ?>home"><img src="<?= base_url() ?>assets/img/custom/duahati_warna.png" alt="" style="max-height: 50px; margin-bottom: 5px;"></a></div>
        <div class="navbar-content-wrapper d-flex align-items-center ps-5">
          <!-- Search -->
          <form action="#">
            <div class="input-group">
              <input class="form-control border-light" type="search" title="Apa Yang Anda Inginkan" placeholder="Apa Yang Anda Inginkan" aria-describedby="searchbox" style="height: 35px; font-size: .75em; padding-right: 1px;">
              <button class="input-group-text bg-light border-light text-dark" style="height: 35px;" id="searchbox"><i class="bi bi-search" title="Apa Yang Anda Inginkan"></i></button>
            </div>
          </form>
        </div>
      </div>
      <!-- # Header Five Layout End -->
    </div>
  </div>
  <!-- # Sidenav Left -->
  <!-- Offcanvas -->
  <div class="my-3 py-1 pb-4">
  </div>

  <!-- main page content -->
  <?php if (file_exists(VIEWPATH . "templates/contents/{$content}.php")) : ?>
    <?php $this->load->view("templates/contents/{$content}.php"); ?>
  <?php endif; ?>
  <!-- main page content ends -->

  <?php $this->load->view('templates/footer'); ?>