<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
Route::get('test','Tester@index');
Route::get('/profil', function()
{
	return View::make('mahasiswa.profil');
});
Route::resource('login','userController@login');
Route::post('authenticate', 'UserController@authenticate');
Route::resource('home', 'HomeController');
Route::resource('profil','mahasiswaController@profil');
Route::post('krs/get','krsController@getKRS');
Route::resource('krs','krsController');
Route::get('tambahkrs/{tahun}/{semester}','krsController@getmatkul');
Route::get('print/{tahun}/{semester}','mahasiswaController@print');
Route::resource('logout','userController@logout');
Route::resource('bo','boController');
Route::get('formbo','boController@formbo');
Route::resource('listpesanbomhs','boController@listpesanbomhs'); //listpesan
Route::get('pesanbomhs/{idbo}','boController@pesanbomhs');
Route::post('pesanbomhs/{idbo}','boController@createpesan');
Route::resource('newpesan','boController@newpesan');
//untuk dosen
Route::get('pesanbo/{idbo}','boDosenController@pesanbomhs');
Route::post('pesanbo/{idbo}','boDosenController@createpesan');
//dosen
Route::resource('profildosen','dosenController@profil');
Route::resource('mhs','dosenController@mhs');
Route::resource('transkrip','dosenController@transkrip');
Route::resource('bomhs','dosenController@bomhs');
Route::resource('listbo','boDosenController@list');
Route::resource('detailbo','boDosenController@detail');
Route::resource('listpesanbo','boDosenController@listpesanbo');
//krskontroller dosen
Route::resource('krshome','krsDosenController');
// Route::resource('detailkrs/{nim}','krsDosenController@detailkrs');
Route::get('pw/{password}','PasswordCreater@create');

// $apps['router']->get('post'.'postController@showPost');