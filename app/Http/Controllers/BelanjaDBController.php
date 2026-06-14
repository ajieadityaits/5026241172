<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BelanjaDBController extends Controller
{
    //
    public function indexbelanja()
    {
    	// mengambil data dari table pegawai
    	$keranjangbelanja = DB::table('keranjangbelanja')->paginate();

    	// mengirim data pegawai ke view index
    	return view('keranjangbelanja.indexbelanja',['keranjangbelanja' => $keranjangbelanja]);

    }

    public function belanjabeli()
    {
    return view('keranjangbelanja.belanjabeli');
    }

    public function hapusbelanja($id)
    {
        DB::table('keranjangbelanja')
            ->where('ID', $id)
            ->delete();

        return redirect('/belanja');
    }
}

