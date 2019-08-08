@extends('parent')

@section('main')

<div class="jumbotron text-center">
 <div align="right">
  <a href="{{ route('crud.index') }}" class="btn btn-info">Kembali</a>
 </div>
 <br />
 <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="500" style="margin-left: -500px;" />
 <div style="position: absolute; margin-left: 43%; text-align: left; margin-top: -20%;">
 	<h4>Tipe Kamar &nbsp;: {{ $data->first_name }} </h4>
	<h4>Harga &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $data->last_name }}</h4>
	<h4>Sisa Kamar &nbsp;&nbsp;: {{ $data->jumlah }}</h4>
 </div>
</div>
@endsection
