@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 130px; margin-bottom: 60px">
        <p align="center" style="margin-bottom: -30px; font-size: 70px">Pratama's Hotel</p>
    </div>
    <div align="center">
        <a href="/crud" class="btn btn-primary" id="tombol">Daftar Kamar</a>
        <a href="/pesanan" class="btn btn-primary" id="tombol">Cek Pesanan</a>
        <a href="/pengguna" class="btn btn-primary" id="tombol">Cek Pengguna</a>
        <a href="/laporan" class="btn btn-primary" id="tombol">Laporan</a>
    </div>

@endsection
<style type="text/css">
    #tombol{
        padding: 20px 20px 20px 20px;
        font-size: 25px;
    }
    html, body{
        background-image: url(image/bg6.jpg);
        background-size: cover;
    }
</style>