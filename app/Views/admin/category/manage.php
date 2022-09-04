<?= $this->extend("admin/layout/app"); ?>

<?= $this->section('content'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Kelola Kategori</h1>
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
            <p class="section-lead">Kamu dapat mengelola kategori disini</p>

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
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                Tambah Kategori
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('admin/category/save') ?>" method="post" autocomplete="off">
                                <?= csrf_field() ?>
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <label for="category_name">Nama Kategori</label>
                                        <input type="text" name="category_name" id="category_name" class="form-control" value="<?= old('category_name') ?>" placeholder="Nama Kategori" autofocus>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="category_slug">Slug</label>
                                        <input type="text" name="category_slug" id="category_slug" class="form-control" value="<?= old('category_slug') ?>" placeholder="Opsional">
                                        <div class="form-text">
                                            <strong>PERHATIAN: </strong> Hanya di izinkan huruf kecil saja
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <button class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-8">
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
                                            <th>#</th>
                                            <th>Nama Kategori</th>
                                            <th>Slug</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1; foreach ($categories as $category): ?>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><?= $category['category_name'] ?></td>
                                                <td><?= $category['category_slug'] ?></td>
                                                <td>
                                                    <?php if ($category['status'] == 'active'): ?>
                                                        <span class="badge bg-success text-white">Aktif</span>
                                                    <?php else: ?>
                                                        <span class="badge bg-danger text-white">Nonaktif</span>
                                                    <?php endif ?>
                                                </td>
                                                <td>
                                                    <form action="<?= base_url('admin/category/delete') ?>" method="post">
                                                        <?= csrf_field() ?>
                                                        <input type="hidden" name="category_id" value="<?= $category['id'] ?>">
                                                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                    </form>
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
<?= $this->endSection(); ?>