@extends('pesanantop')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@section('main')
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
					<th>Aksi</th>
				</tr>
				@foreach($pemesan as $p)
				<tr>
					<td>{{ $p->nama }}</td>
					<td>{{ $p->no_hp }}</td>
					<td>{{ $p->tipe_kamar }}</td>
					<td>{{ $p->harga }}</td>
					<td>{{ $p->lama_inap }}</td>
					<td>{{ $p->jumlah }}</td>
					<td>{{ $p->total }}</td>
					<td>
						<a href="/pesanan/edit/{{ $p->id }}" class="btn btn-warning">Check Out</a>
						<a href="/pesanan/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
					</td>
				</tr>
				@endforeach
			</table>
		</form>
	</div>
@endsection