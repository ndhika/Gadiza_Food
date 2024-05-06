@extends('layouts.laporanAdmin')

@section('content')
<body id="page-top">
	<div id="wrapper">
		
		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
				<div class="dropdown">
					<button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
					<i class="bi bi-bell-fill"></i>
					</button>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="#">Action</a></li>
						<li><a class="dropdown-item" href="#">Another action</a></li>
						<li><a class="dropdown-item" href="#">Something else here</a></li>
					</ul>
				</div>
				
				<!-- konten admin -->

				<div class="container-fluid">
					<h3 class="mb-4">Pesanan</h3>
					<div class="card card-body shadow-sm mb-3">
						<div class="table-responsive">
							<table class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Detail Transaksi</th>
										<th>Quantity</th>
										<th>Nama Customer</th>
										<th>Total</th>
										<th>Pembayaran</th>
										<th>Tanggal Pemesanan</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Mie Ayam, Macaroni Schotel, Es Cendol</td>
										<td>3 pcs</td>
										<td>Ayudhya Naja</td>
										<td>Rp. 75.000</td>
										<td>Bank BCA - 1234567890</td>
										<td>21 April 2024</td>
										<td>
											<p class="bade badge-secondary">Sedang diproses</p>
										</td>
									</tr>
									<tr>
										<td>Mie Ayam, Macaroni Schotel, Es Cendol</td>
										<td>3 pcs</td>
										<td>Ayudhya Naja</td>
										<td>Rp. 75.000</td>
										<td>Bank BCA - 1234567890</td>
										<td>21 April 2024</td>
										<td>
											<p class="bade badge-secondary">Sedang diproses</p>
										</td>
									</tr>
									<tr>
										<td>Mie Ayam, Macaroni Schotel, Es Cendol</td>
										<td>3 pcs</td>
										<td>Ayudhya Naja</td>
										<td>Rp. 75.000</td>
										<td>Bank BCA - 1234567890</td>
										<td>21 April 2024</td>
										<td>
											<p class="bade badge-secondary">Sedang diproses</p>
										</td>
									</tr>
								</tbody>
								<tfoot></tfoot>
							</table>
							<nav class="d-flex justify-content-center mt-3">
							<ul class="pagination shadow-sm">
								<li class="page-item disabled"><a class="page-link" href="#">Prev</a></li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">4</a></li>
								<li class="page-item"><a class="page-link" href="#">5</a></li>
								<li class="page-item"><a class="page-link" href="#">Next</a></li>
							</ul>
						</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
@endsection