<!DOCTYPE html>
<html>
<head>
	<title>Pratama's Hotel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<form style="margin-left: 40%; margin-top: 5%;">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
		<ul class="list-group">
		  <li class="list-group-item col-sm-5" style="font-weight: bold; font-size: 24px; text-align: center;">Pratama's Hotel</li>
		  <li class="list-group-item col-sm-5">Nama <i style="margin-left: 110px;">: {{ $nama }}</i></li>
		  <li class="list-group-item col-sm-5">No Handphone <i style="margin-left: 40px;">: {{ $no_hp }}</i></li>
		  <li class="list-group-item col-sm-5">Tipe Kamar <i style="margin-left: 70px;">: {{ $tipe_kamar }}</i></li>
		  <li class="list-group-item col-sm-5">Harga <i style="margin-left: 105px;">: {{ $harga }}</i></li>
		  <li class="list-group-item col-sm-5">Lama Inap <i style="margin-left: 75px;">: {{ $lama_inap }}</i></li>
		  <li class="list-group-item col-sm-5">Jumlah <i style="margin-left: 95px;">: {{ $lama_inap }}</i></li>
		  <li class="list-group-item col-sm-5">Total <i style="margin-left: 110px;">: {{ $total }}</i></li>
		  <li class="list-group-item col-sm-5">Bayar <i style="margin-left: 100px;">: {{ $bayar }}</i></li>
		  <li class="list-group-item col-sm-5">Kembali <i style="margin-left: 80px;">: {{ $kembali }}</i></li>
		  <li class="list-group-item col-sm-5" style="font-size: 12px; text-align: center; font-style: italic;">Terima Kasih Telah Berkunjung</li>
		</ul>
	</form>
</body>
</html>
<script type="text/javascript">
	window.print();
</script>