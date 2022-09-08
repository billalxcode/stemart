<?= $this->extend("layout/app"); ?>

<?= $this->section("content"); ?>
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
<?= $this->endSection(); ?>