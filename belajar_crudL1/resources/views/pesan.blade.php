<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pratama's Hotel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
                <div class="top-right links">
                  <a href="/">Home</a>
                </div>
        </div>
        <div class="card text-white bg-dark mb-3" style="max-width: 18rem; margin-top: -680px; margin-left: 20px; position: absolute;">
          <div class="card-body">
            <img src="images/566513925.jpg" width="300">
          </div>
          <div class="card-body">
            <img src="images/1291489257.jpg" width="300">
          </div>
          <div class="card-body">
            <img src="images/1544904837.jpg" width="300">
          </div>
        </div>
        <form style="margin-top: -530px; margin-left: 500px" action="{{ route('kirimpesan') }}" name="AutoSum" method="post" class="col-md-6 offset-md-6">
            @csrf
            <p align="center" style="font-size: 30px; margin-bottom: 40px">Pesan Kamar</p>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama" placeholder="ex : Budi">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">No Hp</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="no_hp" maxlength="13" placeholder="ex : 08XXXXXXXXX">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Tipe Kamar</label>
              <div class="col-sm-6">
                  <select class="form-control" id="tipek" onchange="hargak();" name="tipe_kamar">
                    @foreach($kamar as $k)
                      <option value="{{ $k->first_name }}">{{ $k->first_name }}</option>
                    @endforeach
<!--                  <option value="Deluxe"></option>
                      <option value="Standard"></option>
                      <option value="Suite"></option>
                      <option value="Superior"></option> -->
                  </select>
              </div>
              <div class="col-sm-4">
                  <input type="text" id="harga" name="harga" class="form-control" readonly="">
              </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Lama Inap</label>
            <div class="col-sm-2">
              <input type="text" class="form-control" name="lamainap" id="lamainap" placeholder="ex : 3">
            </div>
            <label class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-sm-2">
              <input type="text" class="form-control" name="jumlah_kamar" onkeyup="ganti()" placeholder="ex : 2" name="">
            </div>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="total" id="total" readonly="">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
              <button type="submit" class="btn btn-dark" style="padding-left: 50px; padding-right: 50px;">Kirim</button>
            </div>
          </div>
        </form>
    </body>
</html>
<script type="text/javascript">
    function ganti() {
        var b1 = parseFloat(document.AutoSum.harga.value);
        var b2 = parseFloat(document.AutoSum.lamainap.value);
        var b3 = parseFloat(document.AutoSum.jumlah_kamar.value);
        var jumlah = b1 * b2;
        document.AutoSum.total.value = jumlah * b3;
    }

    function hargak() {
        var x = document.getElementById("tipek").value;
        
        if(x == 'Deluxe'){
            document.getElementById('harga').value = '700000';
        }else if(x == 'Standard'){
            document.getElementById('harga').value = '400000';
        }else if(x == 'Superior'){
            document.getElementById('harga').value = '600000';
        }else if(x == 'Suite'){
            document.getElementById('harga').value = '500000';
        }
    }
</script>