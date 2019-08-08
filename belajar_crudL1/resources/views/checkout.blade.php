@extends('pesanantop')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@section('main')
<div align="right">
	<a href="/pesanan" class="btn btn-info" style="margin-right: 30%;">Kembali</a>
</div>
@foreach($pemesan as $p)
<div style="margin-top: 1%; margin-left: 35%;">
	<form name="sum" method="post" action="/pesanan/cetak" target="_blank">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
		<ul class="list-group">
		  <li class="list-group-item col-sm-5">Nama <i style="margin-left: 100px;">{{ $p->nama }}</i></li>
		  <li class="list-group-item col-sm-5">No Handphone <i style="margin-left: 30px;">{{ $p->no_hp }}</i></li>
		  <li class="list-group-item col-sm-5">Tipe Kamar <i style="margin-left: 60px;">{{ $p->tipe_kamar }}</i></li>
		  <li class="list-group-item col-sm-5">Harga <i style="margin-left: 95px;">{{ $p->harga }}</i></li>
		  <li class="list-group-item col-sm-5">Lama Inap <i style="margin-left: 65px;">{{ $p->lama_inap }}</i></li>
		  <li class="list-group-item col-sm-5">Jumlah <i style="margin-left: 85px;">{{ $p->jumlah }}</i></li>
		  <li class="list-group-item col-sm-5">Total <i style="margin-left: 100px;">{{ $p->total }}</i></li>
		  <li class="list-group-item col-sm-5">
		  	<label style="margin-right: 40px;">Bayar</label>
		  	<input type="text" name="bayar" onkeyup="ganti();">
		  </li>
		  <li class="list-group-item col-sm-5">
		  	<label style="margin-right: 25px;">Kembali</label>
		  	<input type="text" name="kembalian" readonly="">
		  </li>
		  <input type="submit" name="" value="Cetak Struk" class="btn btn-dark col-sm-5 mt-2">
		  <input type="text" hidden="" name="id" value="{{ $p->id }}">
		  <input type="text" hidden="" name="jumlah" value="{{ $p->jumlah }}">
		  <input type="text" hidden="" name="totalt" value="{{ $p->total }}">
		  <input type="text" hidden="" name="nama" value="{{ $p->nama }}">
		  <input type="text" hidden="" name="no_hp" value="{{ $p->no_hp }}">
		  <input type="text" hidden="" name="tipe_kamar" value="{{ $p->tipe_kamar }}">
		  <input type="text" hidden="" name="harga" value="{{ $p->harga }}">
		  <input type="text" hidden="" name="lama_inap" value="{{ $p->lama_inap }}">
		  <input type="text" hidden="" name="keterangan" value="Dibayar">
		</ul>
	</form>
</div>
@endforeach
@endsection
<script type="text/javascript">
	function ganti() {
        var b1 = parseFloat(document.sum.bayar.value);
        var b2 = parseFloat(document.sum.totalt.value);
        document.sum.kembalian.value = b1 - b2;
    }
</script>