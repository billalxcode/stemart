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
            <p class="section-lead">Kamu dapat mengelola orderan disini</p>

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
                                Kelola Order
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
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($orders_data as $order) : ?>
                                            <tr>
                                                <td>
                                                    <?= $order['invoice'] ?>
                                                    <div class="table-links">
                                                        <form action="<?= base_url('admin/orders/delete') ?>" method="post" class="d-inline">
                                                            <?= csrf_field() ?>
                                                            <input type="hidden" name="order_id" value="<?= $order['id'] ?>">

                                                            <a href="javascript:;" onclick="this.parentNode.submit()" class="text-danger">Trash</a>
                                                        </form>
                                                    </div>
                                                </td>
                                                <td>
                                                    <?php if ($order['customers'] != null): ?>
                                                        <?= (isset($order['customers']['fullname']) ?  $order['customers']['fullname'] : $order['firstname']) ?>
                                                    <?php else: ?>
                                                        Tidak diketahui
                                                    <?php endif ?>
                                                </td>
                                                <td>
                                                    Tidak diketahui
                                                </td>
                                                <td>
                                                    <?php if (isset($order['order_items'])): ?>
                                                        <?php
                                                            $cart = $order['order_items'][0];
                                                            $product = $cart['products'];
                                                            echo $product['product_name'];
                                                        ?>
                                                    <?php else: ?>
                                                        Tidak diketahui
                                                    <?php endif ?>
                                                </td>
                                                <td>
                                                    <?php if ($order['status'] == 'accept') : ?>
                                                        <span class="badge bg-success text-white">Diterima</span>
                                                    <?php elseif ($order['status'] == 'progress'): ?>
                                                        <span class="badge bg-info text-white">Menunggu Diterima</span>
                                                    <?php else : ?>
                                                        <span class="badge bg-danger text-white">Ditolak</span>
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