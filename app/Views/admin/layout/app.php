<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= isset($title) ? $title : "Stemart Dashboad" ?></title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url('assets/modules/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/modules/fontawesome/css/all.min.css') ?>">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url('assets/modules/jqvmap/dist/jqvmap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/modules/summernote/summernote-bs4.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/modules/jquery-selectric/selectric.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/modules/datatables/datatables.min.css') ?>">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/components.css') ?>">

    <script src="<?= base_url('assets/modules/jquery.min.js') ?>"></script>
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <?= $this->include("admin/layout/navbar"); ?>
            <?= $this->include("admin/layout/sidebar"); ?>

            <?= $this->renderSection('content'); ?>
            <?= $this->include("admin/components/logout_modal"); ?>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2022 <div class="bullet"></div> Develop by <a href="https://billalxcode.my.id">Billal Fauzan</a>
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= base_url('assets/modules/popper.js') ?>"></script>
    <script src="<?= base_url('assets/modules/tooltip.js') ?>"></script>
    <script src="<?= base_url('assets/modules/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/modules/nicescroll/jquery.nicescroll.min.js') ?>"></script>
    <script src="<?= base_url('assets/modules/moment.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/stisla.js') ?>"></script>

    <!-- JS Libraies -->
    <script src="<?= base_url('assets/modules/jquery.sparkline.min.js') ?>"></script>
    <script src="<?= base_url('assets/modules/chart.min.js') ?>"></script>
    <script src="<?= base_url('assets/modules/owlcarousel2/dist/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets/modules/summernote/summernote-bs4.js') ?>"></script>
    <script src="<?= base_url('assets/modules/chocolat/dist/js/jquery.chocolat.min.js') ?>"></script>
    <script src="<?= base_url('assets/modules/jquery-selectric/jquery.selectric.min.js') ?>"></script>

    <!-- Page Specific JS File -->
    <!-- <script src="<?= base_url('assets/js/page/index.js') ?>"></script> -->
    
    <!-- Template JS File -->
    <script src="<?= base_url('assets/js/scripts.js') ?>"></script>
    <script src="<?= base_url('assets/js/custom.js') ?>"></script>
</body>

</html>