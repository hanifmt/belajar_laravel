<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;
use App\Hadiah;

class KadoController extends Controller
{
    public function index()
    {
    	$anggota = Anggota::get();
    	return view('RelasiManyToMany.kado', ['anggota' => $anggota]);
    }

}
