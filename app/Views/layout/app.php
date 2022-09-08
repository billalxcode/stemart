<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= base_url('assets/native/bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/native/css/style.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/modules/aos/dist/aos.css') ?>">
	<title>Stemart | Produk Unggulan SMKN 1 Maja</title>
</head>

<body>
    <?= $this->include("layout/navbar"); ?>

    <?= $this->renderSection('content'); ?>

	<div class="container-fluid footer-bg text-white clearfix mt-5">
		<section class="d-flex justify-content-center justify-content-lg-between  ">
			<div>
				<a href="" class="me-4 text-reset">
					<i class="fab fa-facebook-f"></i>
				</a>
				<a href="" class="me-4 text-reset">
					<i class="fab fa-twitter"></i>
				</a>
				<a href="" class="me-4 text-reset">
					<i class="fab fa-google"></i>
				</a>
				<a href="" class="me-4 text-reset">
					<i class="fab fa-instagram"></i>
				</a>
				<a href="" class="me-4 text-reset">
					<i class="fab fa-linkedin"></i>
				</a>
				<a href="" class="me-4 text-reset">
					<i class="fab fa-github"></i>
				</a>
			</div>
		</section>
		<section class="">
			<div class="container text-center text-md-start mt-5">
				<div class="row mt-3">
					<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
						<h2 class="mb-4 typo">
							SteMart.
						</h2>
						<p>
							SteMart adalah toko online yang
							dikelola oleh SMKN 1 Maja
						</p>
					</div>
					<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
						<h5 class="text-uppercase fw-bold mb-4">
							Alamat
						</h5>
						<p>
							Jl. Pasukan Sindang Kasih, no 14
							Desa Maja Selatan, Kecamatan Maja
							Majalengka, Jawa barat
						</p>
					</div>
					<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
					</div>
					<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
						<form>
							<h6 class="text-uppercase fw-bold mb-4">
								Hubungi Kami
							</h6>
							<div class="d-flex w-100 gap-2">
								<label for="newsletter1" class="visually-hidden">stemdja@gmail.com</label>
								<input id="newsletter1" type="text" class="form-control" placeholder="stemdja@gmail.com">
								<button class="btn btn-primary" type="button">Subscribe</button>
							</div>
					</div>
				</div>
		</section>
	</div>

	<div class="text-center p-3 text-white" style="background-color: #101828;">
		© 2022 Stemart. All rights reserved.
	</div>
	<script src="<?= base_url('assets/modules/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/native/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
	<script src="<?= base_url('assets/modules/aos/dist/aos.js') ?>"></script>
	<script>
		AOS.init();
	</script>
</body>

</html>