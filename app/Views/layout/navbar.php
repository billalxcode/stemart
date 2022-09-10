<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid m-3">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url('assets/img/stemart.svg') ?>" alt="" width="120px" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx mb-lg-0 nav-pills gap-4 mx-auto">
                <li class="nav-item">
                    <a class="nav-link accent  text-white btn-primary " aria-current="page" style=" background-color: #656E46;" href="<?= base_url('') ?>">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('products') ?>">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#footer">Hubungi</a>
                </li>
            </ul>
            <div class="d-flex">
                <a href="<?= base_url('login') ?>" class="btn btn-primary accent">
                    Masuk
                </a>
            </div>
        </div>
    </div>
</nav>