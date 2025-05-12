<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{

    public function getTabel()
    {

        $mahasiswa = [
            ['nim' => 'NIM 1', 'nama' => 'Nama Lengkap 1', 'kelas' => 'Kelas 1'],
            ['nim' => 'NIM 2', 'nama' => 'Nama Lengkap 2', 'kelas' => 'Kelas 2'],
        ];

        return view('latihan.tabel', compact('mahasiswa'));
    }

    // public function getForm()
    // {
    //     return view('latihan.form');
    // }
    public function create()
    {
        return view('form');
    }

    // POST /simpan
    public function store(Request $r)
    {
        $data = $r->validate([
            'nim'   => 'required|string|max:50|unique:mahasiswas',
            'nama'  => 'required|string|max:100',
            'kelas' => 'required|string|max:50',
        ]);

        Mahasiswa::create($data);

        return redirect('/tabel')->with('pesan', 'Data berhasil disimpan!');
    }

    // GET /tabel
    public function index()
    {
        $rows = Mahasiswa::orderBy('id')->get();
        return view('tabel', compact('rows'));
    }

    public function getSomething()
    {
        //
    }
}
