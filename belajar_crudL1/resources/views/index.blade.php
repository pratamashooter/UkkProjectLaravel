@extends('parent')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@section('main')

<div align="right" style="margin-bottom: 10px">
  <a href="{{ route('crud.create') }}" class="btn btn-success btn-sm">Tambah Kamar</a>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered table-dark">
 <tr>
  <th width="15%" class="text-center">Foto</th>
  <th width="15%" class="text-center">Tipe Kamar</th>
  <th width="15%" class="text-center">Harga Kamar</th>
  <th width="15%" class="text-center">Jumlah</th>
  <th width="15%" class="text-center">Aksi</th>
 </tr>
 @foreach($data as $row)
  <tr>
   <td class="text-center bg-primary"><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
   <td class="text-center">{{ $row->first_name }}</td>
   <td class="text-center">{{ $row->last_name }}</td>
   <td class="text-center">{{ $row->jumlah }}</td>
   <td>
      <a href="{{ route('crud.show', $row->id) }}" class="btn btn-primary">Info Kamar</a>
      <a href="{{ route('crud.edit', $row->id) }}" class="btn btn-primary">Edit</a>
      <form action="{{ route('crud.destroy', $row->id) }}" method="post" style="margin-top: 5px">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">
          Hapus
        </button>
      </form>
   </td>
  </tr>
 @endforeach
</table>
{!! $data->links() !!}
@endsection