<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class Jasa_controller extends Controller
{
    public function index(){
    	$title = 'Jasa Yg Kami Gunakan';
    	$judul = \DB::table('jasa_title')->first();
    	$tenda = \DB::table('jasa_tenda')->first();
    	$rias = \DB::table('jasa_rias')->first();
    	$photo = \DB::table('jasa_photo')->first();

    	return view('admin.jasa.jasa_index',compact('title','judul','tenda','rias','photo'));
    }

    public function update(Request $request){
    	ini_set('upload_max_filesize', '2G');
	    ini_set('post_max_size', '4G');
	    ini_set('max_execution_time', '5000000');
	    ini_set('max_input_time', '5000000');
	    ini_set('memory_limit', '200M');

    	$this->validate($request,[
    		'title'=>'required',
    		'namaTenda'=>'required',
    		'keteranganTenda'=>'required',
    		'namaRias'=>'required',
    		'keteranganRias'=>'required',
    		'namaPhoto'=>'required',
    		'keteranganPhoto'=>'required',
    	]);

    	DB::transaction(function() use($request){

    		DB::table('jasa_title')->update([
    			'title'=>$request->title,
    		]);

    		DB::table('jasa_tenda')->update([
    			'nama'=>$request->namaTenda,
    			'keterangan'=>$request->keteranganTenda,
    		]);

    		DB::table('jasa_rias')->update([
    			'nama'=>$request->namaRias,
    			'keterangan'=>$request->keteranganRias,
    		]);

    		DB::table('jasa_photo')->update([
    			'nama'=>$request->namaPhoto,
    			'keterangan'=>$request->keteranganPhoto,
    		]);

    		$file = $request->file('video');
    		if($file){
    			$file->move('uploads',$file->getClientOriginalName());

    			DB::table('jasa_title')->update([
	    			'video'=>$file->getClientOriginalName(),
	    		]);
    		}

    	});

    	return response()->json([
    		'data'=>'Mantaps',
    	]);
    }
}
