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

Route::get('/', function () {
    return view('welcome');
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('dosen', 'DosenController@index');

Route::get('/formulir/{nama}','FormulirController@index');

Route::get('/formulir','FormulirController@formulir');
Route::post('/formulir/proses', 'FormulirController@proses');


//route blog
Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');

//route CRUD Pegawai
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

//route CRUD Mahasiswa
Route::get('/mahasiswa','MahasiswaController@index');
Route::get('/mahasiswa/tambah','MahasiswaController@tambah');
Route::post('/mahasiswa/store','MahasiswaController@store');
Route::get('/mahasiswa/edit/{id}','MahasiswaController@edit');
Route::post('/mahasiswa/update','MahasiswaController@update');
Route::get('/mahasiswa/hapus/{id}','MahasiswaController@hapus');