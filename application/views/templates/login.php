<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Duahati</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <meta name="robots" content="noindex, follow">

    <style>
        .container-login100 {
            width: 100%;
            min-height: 100vh;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 15px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            position: relative;
            z-index: 1
        }

        .container-login100::before {
            content: "";
            display: block;
            position: absolute;
            z-index: -1;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            /* background-color: rgba(0, 0, 0, .65) */
        }

        .container-login100-form-btn {
            width: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center
        }

        .wrap-login100 {
            width: 390px;
            border-radius: 10px;
            overflow: hidden;
            background: 0 0
        }

        @media(max-width:992px) {
            .alert-validate::before {
                visibility: visible;
                opacity: 1
            }
        }
    </style>

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
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-icons.css">
</head>

<body>



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



    <div class="position-fixed top-0 end-0 p-3" style="z-index: 9999">
        <div id="liveToast" class="toast hide p-3 align-items-center text-white border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body fw-bold" id="toast-body">

                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?= base_url() ?>assets/img/custom/bg.jpg');">
            <?php if (file_exists(VIEWPATH . "templates/contents/{$content}.php")) : ?>
                <?php $this->load->view("templates/contents/{$content}.php"); ?>
            <?php endif; ?>
        </div>
    </div>
    <script src="<?= base_url() ?>assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/js/toast.js"></script>

    <script>
        const api_base_url = '<?= $this->config->item('api_base_url') ?>';
    </script>
    <?php if (file_exists(VIEWPATH . "javascripts/contents/{$content}.js")) : ?>
        <script src="<?= $this->plugin->build_url("javascripts/contents/{$content}.js") ?>" type="text/javascript"></script>
    <?php endif; ?>

</body>

</html>