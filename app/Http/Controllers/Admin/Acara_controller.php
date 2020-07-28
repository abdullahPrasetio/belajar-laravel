<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Acara_controller extends Controller
{
    public function index(){
    	$title = 'Manage Acara';
    	$tc = \DB::table('acara_title')->first();
    	$akad = \DB::table('acara_akad')->first();
    	$resepsi = \DB::table('acara_resepsi')->first();

    	return view('admin.acara.acara_index',compact('title','tc','akad','resepsi'));
    }

    public function update(Request $request){
    	$this->validate($request,[
    		'title'=>'required',
    		'nama'=>'required',
    		'namaa'=>'required',
    		'jam1'=>'required',
    		'jam11'=>'required',
    		'jam2'=>'required',
    		'jam22'=>'required',
    		'tanggal1'=>'required',
    		'tanggal11'=>'required',
    		'tanggal2'=>'required',
    		'tanggal22'=>'required',
    		'keterangan'=>'required',
    		'keterangann'=>'required',
    	]);

    	\DB::transaction(function() use($request){
    		\DB::table('acara_title')->update([
    		'title'=>$request->title,
	    	]);

	    	\DB::table('acara_akad')->update([
	    		'nama'=>$request->nama,
	    		'jam1'=>$request->jam1,
	    		'jam2'=>$request->jam2,
	    		'tanggal1'=>$request->tanggal1,
	    		'tanggal2'=>$request->tanggal2,
	    		'keterangan'=>$request->keterangan
	    	]);

	    	\DB::table('acara_resepsi')->update([
	    		'nama'=>$request->namaa,
	    		'jam1'=>$request->jam11,
	    		'jam2'=>$request->jam22,
	    		'tanggal1'=>$request->tanggal11,
	    		'tanggal2'=>$request->tanggal22,
	    		'keterangan'=>$request->keterangann
	    	]);
    	});

    	\Session::flash('pesan','Data berhasil di update');
    	return redirect()->back();
    }
}
