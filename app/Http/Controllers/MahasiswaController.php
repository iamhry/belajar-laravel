<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //show data mahasiswa
    public function index()
    {
        //pagination
        //searching
        if(request()->has('search')){
            //searching data mahasiswa prodi
            $data_mahasiswa = \App\Models\Mahasiswa::where('nama', 'LIKE', '%'.request('search').'%')->paginate(10);
        }else{
            $data_mahasiswa = \App\Models\Mahasiswa::paginate(20);
        }
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
