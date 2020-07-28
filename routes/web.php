<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Beranda_controller@index');

Auth::routes();

Route::get('/home', function(){
	return redirect('admin/banner');
});

Route::get('keluar',function(){
	\Auth::logout();

	return redirect('/');
});

Route::get('my-service',function(){
	$title = 'Jasa Pembuatan Website';
	return view('jasa.jasa_index',compact('title'));
});


Route::group(['middleware'=>'auth'],function(){
	// Banner
	Route::get('admin/banner','Admin\Banner_controller@index');
	Route::post('admin/banner/upload/{id}','Admin\Banner_controller@upload');
	Route::post('admin/banner','Admin\Banner_controller@update');

	// Penganten
	Route::get('admin/penganten','Admin\Penganten_controller@index');
	Route::post('admin/penganten','Admin\Penganten_controller@update');

	// Story
	Route::get('admin/penganten/story','Admin\Penganten_controller@story');
	Route::post('admin/penganten/story','Admin\Penganten_controller@story_update');
	Route::get('admin/penganten/story/delete/{id}','Admin\Penganten_controller@story_delete');

	// Acara
	Route::get('admin/acara','Admin\Acara_controller@index');
	Route::put('admin/acara','Admin\Acara_controller@update');

	// Jasa
	Route::get('admin/jasa','Admin\Jasa_controller@index');
	Route::post('admin/jasa','Admin\Jasa_controller@update');
});
