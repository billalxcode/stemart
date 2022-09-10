<?= $this->extend('layout/app'); ?>

<?= $this->section('content'); ?>
	<div class="d-flex mt-4">
		<div class="row">
			<div class="col m-lg-5">
				<h1 class=" no-select mcenter fw-bold big mt-4"> <span class="text-accent"> Ste</span>Mart</h1>
				<p class="mcenter" style="font-size: 17px">
					SteMart merupakan aplikasi penyedia produk-produk Teaching Factory SMKN 1 Maja. Jurusan Agribisnis Tanaman Pangan dan Hortikultura (ATPH), Teknik Audio Video (TAV), Rekayasa Perangkat Lunak (RPL) dan Teknik Komputer Jaringan (TKJ). Sebagai produk unggulan hasil karya siswa dari implementasi pembelajaran yang dipelajari di SMKN 1 Maja.
				</p>
				<a href="<?= base_url('products') ?>" class="btn btn-outline-primary mt-3">
					Let's shop
				</a>
			</div>
			<div class="col hide">
				<img ondragstart="return false;" ondrop="return false;" src="<?= base_url('assets/img/banner.svg') ?> " class="img-fluid mx-right  " alt="Gambar">
			</div>
		</div>
	</div>

	<div class="container mt-sm-4 d-flex ">
		<h1 class="ms-5 fw-bold mt-4" data-aos="fade-up">Fitur</h1>
	</div>

	<div class="d-flex justify-content-center p-3  gap-4 flex-wrap">
		<div class="p-2 ">
			<div class="card round mt-5 box-features" data-aos="fade-up" style="width: 16rem;">
				<div class="m-4">
					<div class="bg-accent p-4 round"><img src="<?= base_url('assets/img/deliv.png') ?>" class="card-img-top " alt="..."></div>
				</div>
				<div class="card-body m-3">
					<h5 class="card-title">Pengiriman Cepat</h5>
					<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam corporis eos ipsam pariatur voluptate consequatur similique nam incidunt recusandae commodi.</p>
				</div>
			</div>
		</div>
		<div class="p-2 ">
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
		<div class="p-2 ">
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
	</div>
<?= $this->endSection(); ?>