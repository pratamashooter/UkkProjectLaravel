<!DOCTYPE html>
<html>
<head>
	<title>Pratama's Hotel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<h1 class="text-center mt-4 mb-4">Laporan Pemesanan Hotel</h1>
	<div align="center">
		<form>
			<table class="table table-striped">
				<tr>
					<th>Nama</th>
					<th>No Handphone</th>
					<th>Tipe Kamar</th>
					<th>Harga</th>
					<th>Lama Inap</th>
					<th>Total</th>
				</tr>
				@foreach($laporan as $p)
				<tr>
					<td>{{ $p->nama }}</td>
					<td>{{ $p->no_hp }}</td>
					<td>{{ $p->tipe_kamar }}</td>
					<td>{{ $p->harga }}</td>
					<td>{{ $p->lama_inap }}</td>
					<td>{{ $p->total }}</td>
				</tr>
				@endforeach
			</table>
		</form>
	</div>
</body>
</html>
<script type="text/javascript">
	window.print();
</script>