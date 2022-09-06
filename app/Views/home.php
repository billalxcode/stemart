<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/modules/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/native/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/modules/aos/dist/aos.css') ?>">

    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-bg-custom ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url('assets/img/stemart.svg') ?>" class="navbar-img-custom d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse "  id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto justify-content-center align-items-center">
                    <li class="nav-item px-2">
                        <a class="nav-link accent rounded text-white navbar-list-item" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link navbar-list-item" aria-current="page" href="#">Product</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link navbar-list-item" aria-current="page" href="#">FAQ</a>
                    </li>
                </ul>

                <div class="d-flex mx-auto">
                    <a class="nav-link navbar-list-item" aria-current="page" href="#">FAQ</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="d-flex">
        <div class="row">
            <div class="col m-lg-5">
                <h1 class="mcenter fw-bold big"> <span class="text-accent"> Ste</span>Mart</h1>
                <p class="mcenter">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>
                <button class="btn btn-outline-primary mt-5">Take me</button>
            </div>
            <div class="col">
                <img src="<?= base_url('assets/img/banner.svg') ?>" class="img-fluid mx-right" alt="Gambar">
            </div>
        </div>
    </div>

    <div class="container mt-5 d-flex ">
        <h1 class="ms-5" data-aos="fade-up">Feauture</h1>


    </div>
    <div class="row justify-content-center gap-5">
        <div class="col-sm-3 ">
            <div class="card round mt-5 box-features" data-aos="fade-up" style="width: 16rem;">
                <div class="m-4">
                    <div class="bg-accent p-4 round"><img src="<?= base_url('assets/img/deliv.png') ?>" class="card-img-top " alt="..."></div>
                </div>
                <div class="card-body m-3">
                    <h5 class="card-title">Fast Delivery</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card round mt-5 box-features" data-aos="fade-up" style="width: 16rem;">
                <div class="m-4">
                    <div class="bg-accent p-4 round"><img src="./assets/img/deliv.png" class="card-img-top " alt="..."></div>
                </div>
                <div class="card-body m-3">
                    <h5 class="card-title">Fast Delivery</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card round mt-5 box-features" data-aos="fade-up" style="width: 16rem;">
                <div class="m-4">
                    <div class="bg-accent p-4 round"><img src="./assets/img/deliv.png" class="card-img-top" alt="..."></div>
                </div>
                <div class="card-body m-3">
                    <h5 class="card-title">Fast Delivery</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/modules/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/modules/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/modules/aos/dist/aos.js') ?>"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>