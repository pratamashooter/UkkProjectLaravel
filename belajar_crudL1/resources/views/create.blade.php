@extends('parent')

@section('main')
@if($errors->any())
<div class="alert alert-danger">
 <ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
 </ul>
</div>
@endif
<div align="right">
 <a href="{{ route('crud.index') }}" class="btn btn-info">Kembali</a>
</div>

<form method="post" action="{{ route('crud.store') }}" enctype="multipart/form-data" style="margin-top: 50px;">
 @csrf
 <div class="form-group">
  <label class="col-md-4 text-left" style="position: absolute; margin-left: 25%;">Tipe Kamar</label>
  <div class="col-md-4 offset-md-5">
   <input type="text" name="first_name" class="form-control input-lg" />
  </div>
 </div>
 <div class="form-group">
  <label class="col-md-4 text-left" style="position: absolute; margin-left: 25%;">Harga Kamar</label>
  <div class="col-md-4 offset-md-5">
   <input type="text" name="last_name" class="form-control input-lg" />
  </div>
 </div>
 <div class="form-group">
  <label class="col-md-4 text-left" style="position: absolute; margin-left: 25%;">Jumlah</label>
  <div class="col-md-4 offset-md-5">
   <input type="text" name="jumlah" class="form-control input-lg" />
  </div>
 </div>
 <div class="form-group">
  <label class="col-md-4 text-left" style="position: absolute; margin-left: 25%;">Pilih Foto</label>
  <div class="col-md-4 offset-md-5">
   <input type="file" name="image" />
  </div>
 </div>
 <div class="form-group text-center">
  <input type="submit" name="add" class="btn btn-primary input-lg" style="padding-left: 45px; padding-right: 45px;" value="Tambah" />
 </div>

</form>

@endsection