<?= $this->extend("layout/app"); ?>

<?= $this->section("content"); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4">
                <div class="card">
                    <div class="card-header">
                        Kategori
                    </div>
                    <div class="card-body">
                        Hello world
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-8">
                <div class="row">
                    <div class="col-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url('uploads/images/products/product.png') ?>" alt="Card image cap">
                        <div class="card-body">
                            <div class="card-title">
                                Benih Super Seledri - InFarm
                            </div>

                            <div class="card-price">
                                Rp. 100.000,-
                            </div>
                            <small class="card-discount">
                                Rp. 400.000,-
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>