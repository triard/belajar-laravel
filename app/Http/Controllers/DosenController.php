<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $nama = "Tri Ardiansyah";
        $pelajaran = ["Algoritma Pemrogaman", "Kalkulus","Pemrogaman Web"];
        return view('biodata',['nama'=>$nama, 'matkul'=>$pelajaran]);
    }
}
