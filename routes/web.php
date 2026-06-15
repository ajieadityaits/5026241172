<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\BelanjaDBController;
use App\Http\Controllers\NilaiKuliahController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\dvdDBController;
use App\Http\Controllers\TagihanAirDBController;

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

//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

//route CRUD DVD
Route::get('/dvd', [dvdDBController::class, 'index']);
Route::get('/tambahdvd', [dvdDBController::class, 'tambahdvd']);
Route::post('/storedvd',[dvdDBController::class, 'store']);

//Beranda UAS
Route::get('home', function () {
    return view('template');
});

//CRUD TAGIHAN AIR
Route::get('/eas', [TagihanAirDBController::class, 'index']);
Route::get('/tagihanairtambah',[TagihanAirDBController::class, 'tambah']);
Route::post('/tagihanairstore',[TagihanAirDBController::class, 'store']);

