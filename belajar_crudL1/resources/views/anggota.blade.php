@extends('parent')

@section('main')

<table class="table table-bordered table-striped">
 <tr>
  <th width="10%">Foto</th>
  <th width="35%">NIS</th>
  <th width="35%">Nama</th>
  <th width="30%">Aksi</th>
 </tr>
 @foreach($data as $row)
  <tr>
   <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
   <td>{{ $row->first_name }}</td>
   <td>{{ $row->last_name }}</td>
   <td>
      <a href="" class="btn btn-info" style="margin-bottom: 5px">Bayar Kas</a>
   </td>
  </tr>
 @endforeach
</table>
{!! $data->links() !!}
@endsection