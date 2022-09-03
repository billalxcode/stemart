<?= $this->extend("admin/layout/app"); ?>

<?= $this->section('content'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Buat baru</h1>
            <div class="section-header-breadcrumb">
                <?php foreach ($breadchumbs as $row) : ?>
                    <?php if ($row['active'] == false) : ?>
                        <div class="breadcrumb-item"><a href="<?= $row['url'] ?>"><?= $row['name'] ?></a></div>
                    <?php else : ?>
                        <div class="breadcrumb-item active"><?= $row['name'] ?></div>
                    <?php endif ?>
                <?php endforeach ?>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Buat baru</h2>
            <p class="section-lead">Kamu dapat membuat produk baru disini</p>

            <div class="row">
                <div class="col-12">
                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php elseif (session()->getFlashdata('warning')): ?>
                        <div class="alert alert-warning">
                            <?= session()->getFlashdata('warning') ?>
                        </div>
                    <?php elseif (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('sucess') ?>
                        </div>
                    <?php endif ?>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="<?= base_url('admin/products/save') ?>" method="post" autocomplete="off" enctype="multipart/form-data">
                                <?= csrf_field() ?>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="product_name">Nama Produk</label>
                                            <input type="text" name="product_name" id="product_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <label for="product_category">Kategori Produk</label>

                                        <select name="product_category" id="product_category" class="form-control selectric">
                                            <option>No selected</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <label for="product_summary">Ringkasan</label>

                                        <textarea name="product_summary" id="product_summary" class="summernote"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-12">
                                        <label for="product_price">Harga jual</label>
                                        <input type="text" name="product_price" id="product_price" class="form-control">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="product_stock">Stok tersedia</label>
                                        <input type="number" name="product_stock" id="product_stock" class="form-control">
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-12">
                                        <label for="product_status">Status</label>
                                        <select name="product_status" id="" class="form-control selectric">
                                            <option value="active">Publik</option>
                                            <option value="inactive">Privasi</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4 col-md-2 col-sm-12">
                                        <label for="product_location">Lokasi Produk</label>
                                        <select name="product_location" id="product_location" class="form-control selectric">
                                            <option value="majalengka">Majalengka</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <label for="product_image">Upload gambar</label>
                                        <input type="file" class="form-control" id="product_image" name="product_image">
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-12">
                                        <button class="btn btn-primary rounded" type="submit">Next</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>