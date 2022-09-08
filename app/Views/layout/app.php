<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/modules/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/native/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/modules/aos/dist/aos.css') ?>">

    <title>SteMart | Produk Unggulan SMKN 1 Maja</title>
</head>

<body>
    <?= $this->include("layout/navbar"); ?>

    <?= $this->renderSection('content'); ?>
    
    <script src="<?= base_url('assets/modules/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/modules/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/modules/aos/dist/aos.js') ?>"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>