<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //show data mahasiswa
    public function index()
    {
        $data_mahasiswa = \App\Models\Mahasiswa::all();
        return view('mahasiswa.index', ['mahasiswa' => $data_mahasiswa]);
    }
    //create data mahasiswa

    public function store(Request $request)
    {
        \App\Models\Mahasiswa::create($request->all());
        return redirect('/mahasiswa')->with('sukses', 'Data berhasil diinput');
    }
    //tambah mahasiswa
    public function tambah()
    {
        $prodi = \App\Models\Prodi::all();
        return view('mahasiswa.tambah', ['prodi' => $prodi]);
    }
}
