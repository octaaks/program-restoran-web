<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BarangController extends Controller
{
    function home(){
    	$data = DB::table('barang')->get();
    	return view('home',['barang' => $data]);
    }
    function tambah (){
    	return view('tambah');
    }
    //"Request $req" =untuk menerima post
    function qinsert(Request $req){
    	DB::table('barang')->insert(
    		['kode'=>$req->kode,
    		'nama'=>$req->nama,
    		'harga'=>$req->harga,
    	]
    );
    	return redirect('/');
    }
    function hapus($id){
    	DB::table('barang')->where('id',$id)->delete();
    	return redirect('/');
    }
    function edit($id){
    	$barang= DB::table('barang')->where('id',$id)->get();
    	return view('edit',['barang' => $barang]);
    }
    function qupdate(Request $req){
	// update data pegawai
	DB::table('barang')->where('id',$req->id)->update([
		'kode' => $req->kode,
		'nama' => $req->nama,
		'harga' => $req->harga,
	]
	);
	// alihkan halaman ke halaman pegawai
	return redirect('/');
}
}
