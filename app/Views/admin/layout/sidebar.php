<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?= base_url('admin') ?>">Stemart</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?= base_url('admin') ?>">Smart</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="active">
                <a class="nav-link active" href="<?= base_url('admin') ?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a>
            </li>
            <li class="menu-header">Master Data</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-basket-shopping"></i> <span>Product</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?= base_url('admin/products/create') ?>">Tambah Produk</a></li>
                    <li><a class="nav-link" href="<?= base_url('admin/products') ?>">Kelola Produk</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-bars"></i> <span>Category</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?= base_url('admin/category') ?>">Kelola Kategori</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i> <span>Customer</span></a>
                <ul class="dropdown-menu">
                    <!-- <li><a class="nav-link" href="<?= base_url('admin/customer/create') ?>">Tambah Customer</a></li> -->
                    <li><a class="nav-link" href="<?= base_url('admin/customer') ?>">Kelola Customer</a></li>
                </ul>
            </li>
            <li class="menu-header">Order Data</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-cart-shopping"></i> <span>Order</span></a>
                <ul class="dropdown-menu">
                    <li><a href="auth-forgot-password.html">Baru</a></li>
                    <li><a href="auth-login.html">Dibatalkan</a></li>
                    <li><a href="auth-register.html">Terkirim</a></li>
                    <li><a href="<?= base_url('admin/orders') ?>">Semua</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-money-bill"></i> <span>Transaksi</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="errors-503.html">Transaksi Baru</a></li>
                    <li><a class="nav-link" href="errors-403.html">Transaksi Gagal</a></li>
                    <li><a class="nav-link" href="errors-404.html">Transaksi Berhasil</a></li>
                    <li><a class="nav-link" href="<?= base_url('admin/transaction') ?>">Semua Transaksi</a></li>
                </ul>
            </li>
            <li class="menu-header">Pengaturan</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-cog"></i> <span>Pengaturan</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="errors-503.html">Pengaturan</a></li>
                    <li><a class="nav-link" href="errors-403.html">Backup</a></li>
                    <li><a class="nav-link" href="errors-404.html">Restore</a></li>
                </ul>
            </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>