<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid m-3">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url('assets/img/stemart.svg') ?>" alt="" width="120px" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0 nav-pills justify-content-center gap-4 ">
                <li class="nav-item ">
                    <a class="nav-link accent  text-white btn-primary " aria-current="page" style=" background-color: #656E46;" href="<?= base_url('') ?>">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?= base_url('products') ?>">Product</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">Hubungi</a>
                </li>
                <li class="nav-item dropdown me-3">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        FAQ
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <div class="d-flex">
                <button class="btn btn-primary accent">Login</button>
            </div>
        </div>
    </div>
</nav>