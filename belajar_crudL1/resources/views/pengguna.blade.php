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
			<H1>Daftar Pengguna Kamar</p>
		</div>
	</div>
	<div align="center">
		<form>
			<table class="table table-dark">
				<tr>
					<th>Nama</th>
					<th>No Handphone</th>
					<th>Tipe Kamar</th>
					<th>Harga</th>
					<th>Lama Inap</th>
					<th>Jumlah</th>
					<th>Total</th>
					<th>Bayar</th>
					<th>Kembalian</th>
					<th>Keterangan</th>
					<th>Aksi</th>
				</tr>
				@foreach($pengguna as $b)
				<tr>
					<td>{{ $b->nama }}</td>
					<td>{{ $b->no_hp }}</td>
					<td>{{ $b->tipe_kamar }}</td>
					<td>{{ $b->harga }}</td>
					<td>{{ $b->lama_inap }}</td>
					<td>{{ $b->jumlah }}</td>
					<td>{{ $b->total }}</td>
					<td>{{ $b->bayar }}</td>
					<td>{{ $b->kembalian }}</td>
					<td>{{ $b->keterangan }}</td>
					<td>
						<a href="/pengguna/hapus/{{ $b->id }}" class="btn btn-danger">Selesai</a>
					</td>
				</tr>
				@endforeach
			</table>
		</form>
	</div>
</body>
</html>