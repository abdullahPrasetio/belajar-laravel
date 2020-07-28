<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Input;
use DB;

class Penganten_controller extends Controller
{
    public function index(){
    	$title = 'Manage Penganten';
    	$data = \DB::table('penganten')->first();

    	return view('admin.penganten.penganten_index',compact('title','data'));
    }

    public function story(){
    	$title = 'Our Story';
    	$judul = \DB::table('story_title')->first();
    	$data = \DB::table('story')->orderBy('story_id','asc')->get();

    	return view('admin.penganten.story',compact('title','judul','data'));
    }

    public function story_update(Request $request){
    	$this->validate($request,[
    		'title1'=>'required',
    		'title2'=>'required',
    		'judul'=>'required',
    		'tanggal'=>'required',
    		'keterangan'=>'required',
    	]);

    	$file = $request->file('image');
    	if($file){
    		$nama = $file->getClientOriginalName();
	    	\Image::make(Input::file('image'))->resize(363, 380)->save('uploads/'.$nama);

	    	DB::transaction(function() use($request,$nama){

	    		DB::table('story_title')->where('story_title_id',1)->update([
	    			'title1'=>$request->title1,
	    			'title2'=>$request->title2,
	    		]);

                $file = $request->file('image');
                if($file){
                    $nama = $file->getClientOriginalName();
                    \Image::make(Input::file('image'))->resize(363, 380)->save('uploads/'.$nama);

                    DB::table('story')->insert([
                        'judul'=>$request->judul,
                        'tanggal'=>$request->tanggal,
                        'keterangan'=>$request->keterangan,
                        'gambar'=>$nama,
                    ]);
                }else{
                    DB::table('story')->insert([
                        'judul'=>$request->judul,
                        'tanggal'=>$request->tanggal,
                        'keterangan'=>$request->keterangan,
                    ]);
                }

	    	});

            \Session::flash('pesan','Story berhasil di Tambah');
            return redirect()->back();

    	}
    }

    public function story_delete($id){
        \DB::table('story')->where('story_id',$id)->delete();
        \Session::flash('pesan','Story berhasil dihapus');
        return redirect()->back();
    }

    public function update(Request $request){
    	$this->validate($request,[
    		'salam'=>'required',
    		'tanggal'=>'required',
    		'title'=>'required',
    		'nama1'=>'required',
    		'nama2'=>'required',
    		'keterangan1'=>'required',
    		'keterangan2'=>'required',
    	]);

    	DB::transaction(function() use($request){
    		\DB::table('penganten')->where('penganten_id',1)->update([
	    		'salam'=>$request->salam,
	    		'tanggal'=>$request->tanggal,
	    		'title'=>$request->title,
	    		'nama1'=>$request->nama1,
	    		'nama2'=>$request->nama2,
	    		'keterangan1'=>$request->keterangan1,
	    		'keterangan2'=>$request->keterangan2,
	    	]);

	    	$file1 = $request->file('gambar1');
	    	if($file1){
	    		$nama = $file1->getClientOriginalName();
	    		\Image::make(Input::file('gambar1'))->resize(363, 380)->save('uploads/'.$nama);

	    		\DB::table('penganten')->where('penganten_id',1)->update([
	    			'gambar1'=>$nama,
	    		]);
	    	}

	    	$file2 = $request->file('gambar2');
	    	if($file2){
	    		$nama = $file2->getClientOriginalName();
	    		\Image::make(Input::file('gambar2'))->resize(363, 380)->save('uploads/'.$nama);

	    		\DB::table('penganten')->where('penganten_id',1)->update([
	    			'gambar2'=>$nama,
	    		]);
	    	}
    	});

    	\Session::flash('pesan','Data berhasil di Update');
    	return redirect()->back();
    }
}
