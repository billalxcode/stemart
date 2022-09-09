<?= $this->extend('layout/app'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid d-block">
	<div class="row m-3  mcenter">
		<div class="col-3 hide">
			<!-- Gambar / thumbnail -->
			<img src="<?= base_url('assets/img/contoh.png') ?>" style=" width:100%;" class="round float-start " alt="...">

		</div>
		<div class="col-5 mx-3  ">
			<h4 class="fw-bold">Benih Super Seledri - InFarm</h4>

			<p class="border-bottom pb-3">Terjual <span class="faded">5rb+</span> <i class="fa-solid fa-star yellow"></i> <span class="faded">(rating 2)</span></p>
			<h2 class="fw-bold float-start me-3">Rp40.000</h2> <span class="product-discount clearfix">Rp60.00</span>
			<h5 class="">Product Info</h5>
			<div class="container-fluid">
				<span class="faded">Kondisi</span> : baru <br>
				<span class="faded">Berat satuan</span> : 600g <br>
				<span class="faded">Kategori</span> : <span class="fw-bold text-accent">Benih</span>
				<p>
					is simply dummy text of the printing and typesetting
					industry.Lorem Ipsum has been the industry's standard
					dummy text ever since the 1500s.
					is simply dummy text of the printing and typesetting
					industry.Lorem Ipsum has been the industry's standard
					dummy text ever since the 1500s.
				</p>
			</div>

			<div class="contaner-fluid border-top border-bottom pb-3 pt-3">
				<img src="<?= base_url('assets/img/avatar/avatar-1.png') ?>" width="90px" class="rounded-circle float-start me-3 " alt="...">
				<h5 class="fw-bold">nama_toko</h5>
				<div>
					<span class="text-accent">online</span> /<span class="text-danger"> offline</span>

				</div>

				<span class="clearfix"> <i class="fa fa-star yellow" aria-hidden="true"></i> <span class="fw-bold">5.0</span> rata-rata ulasan</span>



			</div>
			<div>
				<h5 class="mt-2">Pengiriman</h5>
				<i class="fa fa-map-marker me-2" aria-hidden="true"></i> Dikirim dari <span class="fw-bold">Majalengka</span>  <br>
				<i class="fa fa-car me-1" aria-hidden="true"></i> Ongkir reguler <span class="fw-bold">9rb-15rb</span> <br>
				Estimasi tiba <span class="fw-bold">date - date</span>
			</div>



		</div>
		<div class="col-3 mx-3  "> 
			<div class="card card-pembelian rounded">
				<div class="card-header">
					<h5 class="text-pembelian">Pembelian</h5>
				</div>
				<div class="card-body">
					<form action="<?= base_url('order') ?>" method="post">
						<div class="form-group mb-4">
							<label for="jumlah" class="label-atur">Atur Jumlah</label>
							<input type="number" name="jumlah" id="jumlah" value="1" class="form-control">
						</div>
						<div class="form-group mb-3">
							<div class="row">
								<div class="col-4">
									<h5 class="text-subtotal">Subtotal</h5>
								</div>
								<div class="col-6">
									<h3 class="text-subtotal">Rp49.000</h3>
								</div>
								<button type="button" class="btn btn-primary mb-2 ">Tam</button>
								<button type="button" class="btn btn-outline-primary">Primary</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<?= $this->endSection(); ?>