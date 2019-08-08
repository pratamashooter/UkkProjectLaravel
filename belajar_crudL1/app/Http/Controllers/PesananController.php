<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PesananController extends Controller
{
	public function kamar(){
		// mengambil data dari table pegawai
    	$pemesan = DB::table('cruds')->get();

    	// mengirim data pegawai ke view index
    	return view('pesan',['kamar' => $pemesan]);
	}

	public function pengguna(){
		$bayar = DB::table('bayar')->get();

		return view('pengguna', ['pengguna' => $bayar]);
	}

	public function index()
    {
    	// mengambil data dari table pegawai
    	$pemesan = DB::table('pemesan')->get();
 
    	// mengirim data pegawai ke view index
    	return view('pesanan',['pemesan' => $pemesan]);
 
    }

    public function search(Request $request){
    	$search = $request->get('search');
    	$laporan = DB::table('laporan')->where('nama','like','%'.$search.'%')
								    	->orwhere('no_hp','like','%'.$search.'%')
								    	->orwhere('tipe_kamar','like','%'.$search.'%')
								    	->orwhere('harga','like','%'.$search.'%')
								    	->orwhere('lama_inap','like','%'.$search.'%')->paginate();
    	return view('laporan', ['laporan' => $laporan]);
    }

    public function laporan()
    {
    	// mengambil data dari table pegawai
    	$laporan = DB::table('laporan')->get();
 
    	// mengirim data pegawai ke view index
    	return view('laporan',['laporan' => $laporan]);
 
    }

    public function cetaklaporan()
    {
    	// mengambil data dari table pegawai
    	$laporan = DB::table('laporan')->get();
 
    	// mengirim data pegawai ke view index
    	return view('cetaklaporan',['laporan' => $laporan]);
 
    }

	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('pemesan')->insert([
			'nama' => $request->nama,
			'no_hp' => $request->no_hp,
			'tipe_kamar' => $request->tipe_kamar,
			'harga' => $request->harga,
			'lama_inap' => $request->lamainap,
			'total' => $request->total,
			'jumlah' => $request->jumlah_kamar
		]);

		DB::table('laporan')->insert([
			'nama' => $request->nama,
			'no_hp' => $request->no_hp,
			'tipe_kamar' => $request->tipe_kamar,
			'harga' => $request->harga,
			'lama_inap' => $request->lamainap,
			'total' => $request->total,
			'jumlah' => $request->jumlah_kamar
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/pesan');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('pemesan')->where('id',$id)->delete();
			
		// alihkan halaman ke halaman pegawai
		return redirect('/pesanan');
	}

	public function hapuspengguna($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('bayar')->where('id',$id)->delete();
			
		// alihkan halaman ke halaman pegawai
		return redirect('/pengguna');
	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$pemesan = DB::table('pemesan')->where('id',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('checkout',['pemesan' => $pemesan]);

	}

	public function struk(Request $request)
	{
		$id = $request->get('id');
        $nama = $request->input('nama');
     	$no_hp = $request->input('no_hp');
     	$tipe_kamar = $request->input('tipe_kamar');
     	$harga = $request->input('harga');
     	$lama_inap = $request->input('lama_inap');
     	$total = $request->input('totalt');
     	$bayar = $request->input('bayar');
     	$kembali = $request->input('kembalian');
     	$jumlah = $request->input('jumlah');
     	
     	DB::table('bayar')->insert([
			'nama' => $request->nama,
			'no_hp' => $request->no_hp,
			'tipe_kamar' => $request->tipe_kamar,
			'harga' => $request->harga,
			'lama_inap' => $request->lama_inap,
			'total' => $request->totalt,
			'jumlah' => $request->jumlah,
			'bayar' => $request->bayar,
			'kembalian' => $request->kembalian,
			'keterangan' => $request->keterangan
		]);

		DB::table('pemesan')->where('id',$id)->delete();

     	return view('struk',['id' => $id,'nama' => $nama, 'no_hp' => $no_hp, 'tipe_kamar' => $tipe_kamar, 'harga' => $harga, 'lama_inap' => $lama_inap, 'total' => $total, 'bayar' => $bayar, 'kembali' => $kembali]);
	}
}