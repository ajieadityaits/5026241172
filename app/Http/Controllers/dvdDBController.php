<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dvdDBController extends Controller
{
    //
    public function index()
    {
    	// mengambil data dari table pegawai
    	$dvd = DB::table('dvd')->paginate();

    	// mengirim data pegawai ke view index
    	return view('dvd.index',['dvd' => $dvd]);

    }

    public function tambahdvd()
    {
        // memanggil view tambah
        return view('dvd.tambahdvd');
    }

    public function store(Request $request)
    {
    $tersedia = $request->stockdvd > 0 ? 1 : 0;

        DB::table('dvd')->insert([
            'merkdvd' => $request->merkdvd,
            'stockdvd' => $request->stockdvd,
            'tersedia' => $tersedia
        ]);

    return redirect('/dvd');
    }

}
