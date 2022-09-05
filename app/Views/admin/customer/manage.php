<?= $this->extend("admin/layout/app"); ?>

<?= $this->section('content'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Kelola Kustomer</h1>
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
            <p class="section-lead">Kamu dapat mengelola kustomer disini</p>

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
                                            <th>Nama Lengkap</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($customers as $customer) : ?>
                                            <tr>
                                                <td>
                                                    <?= $customer['fullname'] ?>
                                                    <div class="table-links">
                                                        <a href="#">View</a>
                                                        <div class="bullet"></div>
                                                        <a href="#">Edit</a>
                                                        <div class="bullet"></div>
                                                        <a href="#" id="change_user_status" data-username="<?= $customer['username'] ?>">Ubah status</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <?= $customer['username'] ?>
                                                </td>
                                                <td>
                                                    <?= $customer['email'] ?>
                                                </td>
                                                <td>
                                                    <?php if ($customer['address'] != null) : ?>
                                                        <?= $customer['address'] ?>
                                                    <?php else : ?>
                                                        Tidak diketahui
                                                    <?php endif ?>
                                                </td>
                                                <td>
                                                    <?php if ($customer['status'] == 'active') : ?>
                                                        <span class="badge bg-success text-white">Aktif</span>
                                                    <?php elseif ($customer['status'] == 'blocked') : ?>
                                                        <span class="badge bg-danger text-white">Blocked</span>
                                                    <?php else : ?>
                                                        <span class="badge bg-warning text-white">Nonaktif</span>
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

<?= $this->include("admin/components/change_user_status"); ?>
<?= $this->endSection(); ?>