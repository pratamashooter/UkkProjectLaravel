<!DOCTYPE html>
<html>
<head>
	<title>Pratama's Hotel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="content">
		<div style="margin-left: 10px; margin-top: 10px;">
			<a href="/home" class="btn btn-primary">Kembali Ke Menu Utama</a>
		</div>
		<div align="center" style="margin-top: 2%; margin-bottom: 2%;">
			<H1>Laporan Pemesanan Hotel</p>
		</div>
	</div>
	<div align="left" class="ml-4">
		<a href="/cetaklaporan" target="_blank">Cetak Laporan</a>
	</div>
	<form class="form-inline offset-sm-9 mb-2" action="/search">
	  <div class="form-group mx-sm-3 mb-2">
	    <input type="search" name="search" class="form-control" id="inputPassword2" placeholder="Ketik disini">
	  </div>
	  <button type="submit" class="btn btn-dark mb-2">Cari</button>
	</form>
	<div align="center">
		<form>
			<table class="table table-striped">
				<tr>
					<th>Nama</th>
					<th>No Handphone</th>
					<th>Tipe Kamar</th>
					<th>Harga</th>
					<th>Lama Inap</th>
					<th>Jumlah</th>
					<th>Total</th>
				</tr>
				@foreach($laporan as $p)
				<tr>
					<td>{{ $p->nama }}</td>
					<td>{{ $p->no_hp }}</td>
					<td>{{ $p->tipe_kamar }}</td>
					<td>{{ $p->harga }}</td>
					<td>{{ $p->lama_inap }}</td>
					<td>{{ $p->jumlah }}</td>
					<td>{{ $p->total }}</td>
				</tr>
				@endforeach
			</table>
		</form>
	</div>
</body>
</html>