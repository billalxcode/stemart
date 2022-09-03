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
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>