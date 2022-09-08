<?= $this->extend('layout/app'); ?>

<?= $this->section('content'); ?>
	<div class="d-flex mt-4">
		<div class="row">
			<div class="col m-lg-5">
				<h1 class="mcenter fw-bold big mt-4"> <span class="text-accent"> Ste</span>Mart</h1>
				<p class="mcenter" style="font-size: 17px">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
				</p>
				<button class=" m-4 btn btn-outline-primary mt-5">Take me</button>
			</div>
			<div class="col hide">
				<img src="<?= base_url('assets/img/banner.svg') ?> " class="img-fluid mx-right  " alt="Gambar">
			</div>
		</div>
	</div>

	<div class="container mt-sm-4 d-flex ">
		<h1 class="ms-5 fw-bold mt-4" data-aos="fade-up">Feature</h1>
	</div>

	<div class="d-flex justify-content-center p-3  gap-4 flex-wrap">
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

	<div class="container mt-5 d-flex ">
		<h1 class="ms-5 fw-bold " data-aos="fade-up">Product</h1>
	</div>

	<div class="d-flex justify-content-center  flex-wrap">
		<div class="p-2 ">
			<div class="card round mt-5 box-features" data-aos="fade-up" style="width: 16rem;">
				<div class="m-4">
					<div class=""><img src="<?= base_url('assets/img/union.png') ?>" class="card-img-top " alt="..."></div>
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
					<div class=""><img src="<?= base_url('assets/img/pap.png') ?>" class="card-img-top " alt="..."></div>
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
					<div class=round"><img src="<?= base_url('assets/img/bro.png') ?>" class="card-img-top " alt="..."></div>
				</div>
				<div class="card-body m-3">
					<h5 class="card-title">Fast Delivery</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
		</div>
	</div>
<?= $this->endSection(); ?>