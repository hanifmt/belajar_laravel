<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    //
    public function index()
    {
        //mengambil data mahasiwa
        $mahasiswa = Mahasiswa::all();

        //mengirima data mahasiwa ke view mahasiswa
        return view('mahasiswa.index',['mahasiswa' => $mahasiswa]);
    }
}
