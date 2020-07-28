<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use App\Models\Banner;

class Banner_controller extends Controller
{
    public function index(){
    	$title = 'Manage Banner';
    	$data = Banner::first();

    	return view('admin.banner.banner_index',compact('title','data'));
    }

    public function upload(Request $request, $id){
    	$file = $request->file('image');

    	if($file){
    		$nama = $file->getClientOriginalName();
    		\Image::make(Input::file('image'))->resize(563, 580)->save('uploads/'.$nama);

    		Banner::where('banner_id',$id)->update([
    			'gambar'=>$nama,
    		]);

    		\Session::flash('pesan','Gambar berhasil diubah');
    		return redirect()->back();
    	}else{
    		\Session::flash('pesan','Gambar Wajib Dipilih');
    		return redirect()->back();
    	}
    }

    public function update(Request $request){
    	$this->validate($request,[
    		'nama1'=>'required',
    		'nama2'=>'required',
    		'title'=>'required',
    		'waktu_mundur'=>'required',
    	]);

    	Banner::where('banner_id',1)->update([
    		'nama1'=>$request->nama1,
    		'nama2'=>$request->nama2,
    		'title'=>$request->title,
    		'waktu_mundur'=>$request->waktu_mundur,
    	]);

    	\Session::flash('pesan','Data berhasil di Update');
    	return redirect()->back();
    }
}
