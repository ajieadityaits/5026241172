<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\BelanjaDBController;
use App\Http\Controllers\NilaiKuliahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <i>www.malasngoding.com</i>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('pert5', function () {
    return view('pertemuan5');
});

Route::get('tugaspert5', function () {
    return view('tugaspertemuan5');
});

Route::get('beranda', function () {
    return view('berandatugas');
});

Route::get('intro', function () {
    return view('intro');
});

Route::get('mercedesf1', function () {
    return view('webmercedes');
});

Route::get('responsive', function () {
    return view('responsive');
});

Route::get('news', function () {
    return view('news');
});


Route::get('dosen', [DosenController::class, 'index']);

Route::get('biodata', [DosenController::class, 'biodata']);

//CRUD Table pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawaitambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawaistore', [PegawaiDBController::class, 'store']);
Route::get('/pegawaiedit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawaiupdate', [PegawaiDBController::class, 'update']);
Route::get('/pegawaihapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawaicari', [PegawaiDBController::class, 'cari']);


//CRUD TABEL KERANJANGBELANJA
Route::get('/belanja', [BelanjaDBController::class, 'indexbelanja']);
Route::get('/belanjabeli', [BelanjaDBController::class, 'belanjabeli']);
Route::get('/belanjahapus/{id}', [BelanjaDBController::class, 'hapusbelanja']);

//CRUD TABEL NILAI
Route::get('/nilaikuliah', [NilaiKuliahController::class, 'index']);
Route::get('/nilaikuliahtambah',[NilaiKuliahController::class, 'tambah']);
Route::post('/nilaikuliahstore',[NilaiKuliahController::class, 'store']);
