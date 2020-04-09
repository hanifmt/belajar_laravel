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

    public function tambah()
    {
        return view('mahasiswa.tambah');
    }

    public function store(Request $request)
    {
        $messages=[
            'required' => ':attribute wajib diisi',
            'min' => ':attribute harus diisi minimal :min karakter',
            'max' => ':attribute harus diisi minimal :max karakter',
            'numeric' => ':attribute hanya boleh diisi angka'
        ];
        
        $this->validate($request,[
            'nama' => 'required',
            'alamat' => 'required'
        ],$messages);

        Mahasiswa::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);

        return redirect('/mahasiswa');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', ['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request)
    {
        $messages=[
            'required' => ':attribute wajib diisi',
            'min' => ':attribute harus diisi minimal :min karakter',
            'max' => ':attribute harus diisi minimal :max karakter',
            'numeric' => ':attribute hanya boleh diisi angka'
        ];
        
        $this->validate($request,[
            'nama' => 'required',
            'alamat' => 'required'
        ],$messages);

        $mahasiswa = Mahasiswa::find($request->id);
        $mahasiswa->nama = $request->nama;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->save();
        return redirect('/mahasiswa');
    }

    public function hapus($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa');
    }
}
