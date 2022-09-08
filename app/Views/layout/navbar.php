<nav class="navbar navbar-expand-lg navbar-bg-custom ">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url('assets/img/stemart.svg') ?>" class="navbar-img-custom d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto justify-content-center align-items-center">
                <li class="nav-item px-2">
                    <a class="nav-link accent rounded text-white navbar-list-item" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link navbar-list-item" aria-current="page" href="<?= base_url('products') ?>">Product</a>
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