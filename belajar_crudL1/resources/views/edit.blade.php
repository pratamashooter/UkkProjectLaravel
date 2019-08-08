@extends('parent')

@section('main')
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div align="right">
                <a href="{{ route('crud.index') }}" class="btn btn-info">Kembali</a>
            </div>
            <br />
     <form method="post" action="{{ route('crud.update', $data->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
      <div class="col-md-12">
        <div class="col-md-6" style="margin-top: 5%;">
          <div class="form-group">
            <div class="col-md-8">
              <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="1500" />
           </div>
           <input type="file" name="image" style="margin-left: 30px; margin-top: 15px;" />
                  <input type="hidden" name="hidden_image" value="{{ $data->image }}" />
          </div>
        </div>
        <div class="col-md-6" style="margin-left: 50%; margin-top: -25%;">
          <div class="form-group">
           <label class="col-md-4 text-left">Tipe Kamar</label>
           <div class="col-md-8">
            <input type="text" name="first_name" value="{{ $data->first_name }}" class="form-control input-lg" />
           </div>
          </div>
          <div class="form-group">
           <label class="col-md-4 text-left">Harga Kamar</label>
           <div class="col-md-8">
            <input type="text" name="last_name" value="{{ $data->last_name }}" class="form-control input-lg" />
           </div>
          </div>
          <div class="form-group">
           <label class="col-md-4 text-left">Jumlah</label>
           <div class="col-md-8">
            <input type="text" name="jumlah" value="{{ $data->jumlah }}" class="form-control input-lg" />
           </div>
          </div>
          <div class="form-group text-left">
           <input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" style="margin-left: 20px; padding-left: 50px; padding-right: 50px;" />
          </div>
        </div>
      </div>
      
     </form>

@endsection