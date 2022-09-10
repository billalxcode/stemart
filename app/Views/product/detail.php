<?= $this->extend('layout/app'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid d-block">
	<div class="row m-3  mcenter">
		<div class="col-3 hide">
			<img src="<?= ($product['product_thumb'] != '' ? $product['product_thumb'] : base_url('assets/img/contoh.png')) ?>" style=" width:100%;" class="round float-start " alt="...">
		</div>
		<div class="col-5 mx-3">
			<div class="row">
				<div class="col-12">
					<h4 class="fw-bold"><?= $product['product_name'] ?></h4>
					<p class="border-bottom pb-3">Kategori <span class="faded">5rb+</span> <i class="fa-solid fa-star yellow"></i> <span class="faded">(rating 2)</span></p>

					<!-- Harga -->
					<h2 class="fw-bold float-start me-3"><?= $product['product_rupiah'] ?></h2>
				</div>
				<div class="col-12">

					<!-- Deskripsi -->
					<div class="d-flex">
						<!-- <span class="faded">Kategori</span> : <span class="fw-bold text-accent"><?= $product['product_category'] ?></span> -->
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi suscipit minima tempore et magni fugit consectetur quod deleniti quos repellendus, praesentium autem ea temporibus dolorum quasi provident consequuntur inventore est quam ratione excepturi tenetur placeat a fugiat! Assumenda explicabo, quasi sint omnis minima ex est aperiam molestiae harum maxime laboriosam!
						</p>
					</div>
				</div>
			</div>


			<!-- <div class="contaner-fluid border-top border-bottom pb-3 pt-3">
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
			</div> -->
		</div>
		<div class="col-3 mx-3  ">
			<div class="card card-pembelian rounded">
				<div class="card-header">
					<h5 class="text-pembelian">Pembelian</h5>
				</div>
				<div class="card-body">
					<h5 class="fw-bold">Pembelian</h5>
					<form action="<?= base_url('order/save') ?>" method="post" id="myform">
						<input type="hidden" name="product_id" value="<?= $product['id'] ?>">
						<input type="hidden" name="product_price" value="<?= $product['product_price'] ?>" id="product_price">
						<div class="form-group mb-4">
							<label for="jumlah" class="label-atur">Atur Jumlah</label>
							<input type="number" name="jumlah" id="jumlah" value="1" class="form-control" min="1" max="10">
						</div>
						<div class="form-group mb-3">
							<div class="row">
								<div class="col-4">
									<h5 class="text-subtotal">Subtotal</h5>
								</div>
								<div class="col-6">
									<h3 class="text-subtotal" id="subtotal"><?= $product['product_rupiah'] ?></h3>
								</div>
								<button type="submit" class="btn btn-boy mb-2 ">Beli</button>
								<a href="<?= previous_url() ?>" class="btn btn-boy">
									Kembali
								</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	/* Fungsi formatRupiah */
	function formatRupiah(angka, prefix) {
		var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split = number_string.split(','),
			sisa = split[0].length % 3,
			rupiah = split[0].substr(0, sisa),
			ribuan = split[0].substr(sisa).match(/\d{3}/gi);

		// tambahkan titik jika yang di input sudah menjadi angka ribuan
		if (ribuan) {
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}

		rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
		rupiah = prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		return rupiah + ',00'
	}
	
	$(document).on('change', "input#jumlah", function(event) {
		let jumlah = $(this).val()
		let harga_produk = $("input[type='hidden']#product_price").val()
		let esubtotal = $("h3#subtotal")

		let subtotal = harga_produk * jumlah
		let subtotal_rupiah = formatRupiah(String(subtotal), "Rp. ")
		esubtotal.text(subtotal_rupiah)

	})
</script>
<?= $this->endSection(); ?>