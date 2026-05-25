<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// import
class DosenController extends Controller
{
    //
// public function index(){
//     return "<h1>Halo ini adalah method index</h1>, dalam controller DosenController. - www.malasngoding.com";
// }

public function biodata(){
    $nama = "Muhammad Ajie Aditya";
    $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
    return view('biodata', ['nama' => $nama , 'matkul' => $pelajaran]);
}

}
