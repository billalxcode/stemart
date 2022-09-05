<?= $this->extend("admin/layout/app"); ?>

<?= $this->section('content'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Kelola Produk</h1>
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
            <h2 class="section-title">Kelola</h2>
            <p class="section-lead">Kamu dapat mengelola produk disini</p>

            <div class="row">
                <div class="col-12">
                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php elseif (session()->getFlashdata('warning')) : ?>
                        <div class="alert alert-warning">
                            <?= session()->getFlashdata('warning') ?>
                        </div>
                    <?php elseif (session()->getFlashdata('success')) : ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('success') ?>
                        </div>
                    <?php endif ?>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                Kelola Kategori
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Invoice</th>
                                            <th>Customer</th>
                                            <th>Discount</th>
                                            <th>Produk dibeli</th>
                                            <th>Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($products as $product) : ?>
                                            <tr>
                                                <td>
                                                    <?= $product['product_name'] ?>
                                                    <div class="table-links">
                                                        <a href="#">View</a>
                                                        <div class="bullet"></div>
                                                        <a href="#">Edit</a>
                                                        <div class="bullet"></div>

                                                        <form action="<?= base_url('admin/products/delete') ?>" method="post" class="d-inline">
                                                            <?= csrf_field() ?>
                                                            <input type="hidden" name="product_id" value="<?= $product['id'] ?>">

                                                            <a href="javascript:;" onclick="this.parentNode.submit()" class="text-danger">Trash</a>
                                                        </form>
                                                    </div>
                                                </td>
                                                <td>
                                                    <?= $product['product_rupiah'] ?>
                                                </td>
                                                <td>
                                                    <?= $product['product_stock'] ?>
                                                </td>
                                                <td>
                                                    <?php if ($product['product_category'] != null) : ?>
                                                        <?= $product['product_category'] ?>
                                                    <?php else : ?>
                                                        Tidak diketahui
                                                    <?php endif ?>
                                                </td>
                                                <td>
                                                    <?php if ($product['product_status'] == 'active') : ?>
                                                        <span class="badge bg-success text-white">Aktif</span>
                                                    <?php else : ?>
                                                        <span class="badge bg-danger text-white">Nonaktif</span>
                                                    <?php endif ?>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="<?= base_url('assets/modules/datatables/datatables.min.js') ?>"></script>
<script>
        $(document).ready(function() {
            let table = $("table.table")
            if (table.length >= 1) {
                table.DataTable()
            }
        })
    </script>
<?= $this->endSection(); ?>