<?= $this->extend('layout/app'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-3">
			<div class="card round mt-5 box-features" data-aos="fade-up">
				<div class="card-body">
					<div class="card-title">
						<div class="list-group">
							<div class="list-item mb-2 category-active">Pertanian</div>
							<div class="list-item mb-2 ">Elektronik</div>
							<div class="list-item mb-2">Aplikasi Digital</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-9">
			
			<div class="input-group">
				<span class="input-group-text" id="addon-wrapping">@</span>
				<button class="btn btn-outline-secondary" type="button">Button</button>
			</div>

			<h4 class="fw-bold text-center" data-aos="fade-up">Product</h4>
			<div class="product-group">
				<?php foreach ($products as $product) : ?>
					<div class="product">
						<div class="card round mt-2 box-product" data-aos="fade-up" style="width: 16rem;">
							<img src="<?= ($product['product_thumb'] != '' ? $product['product_thumb'] : base_url('assets/img/contoh.png')) ?>" class="card-img-top " alt="...">
							<div class="card-body">
								<a class="card-title card-product-title" href="<?= base_url('products/' . $product['product_slug']) ?>"><?= $product['product_name'] ?></a>
								<h5 class="card-product-price"><?= $product['product_rupiah'] ?>
									<!-- <span class="card-product-discount">Rp. 50.000</span> -->
								</h5>

								<div class="d-flex justify-content-end align-items-end">
									<button class="btn card-btn-cart">
										<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M2.86251 2.27588C2.48032 2.27588 2.17285 2.57855 2.17285 2.95476C2.17285 3.33097 2.48032 3.63364 2.86251 3.63364H4.35963L6.09239 12.5864C6.15561 12.906 6.44009 13.1379 6.77055 13.1379H16.1958C16.578 13.1379 16.8855 12.8353 16.8855 12.4591C16.8855 12.0829 16.578 11.7802 16.1958 11.7802H7.34239L7.0809 10.4224H16.1901C16.601 10.4224 16.9631 10.1537 17.0751 9.76335L18.6269 4.33232C18.7907 3.75527 18.351 3.18105 17.7418 3.18105H5.6786L5.60963 2.82747C5.54641 2.50783 5.26193 2.27588 4.93147 2.27588H2.86251ZM7.23032 16.7586C7.99182 16.7586 8.60963 16.1505 8.60963 15.4009C8.60963 14.6513 7.99182 14.0431 7.23032 14.0431C6.46883 14.0431 5.85101 14.6513 5.85101 15.4009C5.85101 16.1505 6.46883 16.7586 7.23032 16.7586ZM16.8855 15.4009C16.8855 14.6513 16.2677 14.0431 15.5062 14.0431C14.7447 14.0431 14.1269 14.6513 14.1269 15.4009C14.1269 16.1505 14.7447 16.7586 15.5062 16.7586C16.2677 16.7586 16.8855 16.1505 16.8855 15.4009Z" fill="white" fill-opacity="0.7" />
										</svg>
									</button>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</div>

<?= $this->endSection(); ?>