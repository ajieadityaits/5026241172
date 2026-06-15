<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class TagihanAirDBController extends Controller
{
    public function index()
    {
        // mengambil data dari table nilaikuliah
        $tagihan_air = DB::table('tagihan_air')->get();

        // mengirim data nilaikuliah ke view index
        return view('eas.index', ['tagihan_air' => $tagihan_air]);
    }

    public function tambah()
    {
        // memanggil view tambah
        return view('eas.tambah');
    }

    public function store(Request $request)
    {
        // insert data ke table nilaikuliah
        DB::table('tagihan_air')->insert([
            'NoMeteran' => $request->NoMeteran,
            'MeterAwal' => $request->MeterAwal,
            'MeterAkhir' => $request->MeterAkhir
        ]);

        // alihkan halaman ke halaman nilaikuliah
        return redirect('/eas');
    }
}
