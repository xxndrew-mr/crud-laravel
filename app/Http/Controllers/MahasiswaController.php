<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // READ - Tampilkan data
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    // CREATE - Form tambah data
    public function create()
    {
        return view('mahasiswa.create');
    }

    // STORE - Simpan data
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|unique:mahasiswas',
            'jurusan' => 'required'
        ]);

        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil ditambahkan.');
    }

    // EDIT - Form edit data
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    // UPDATE - Update data
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|unique:mahasiswas,nim,' . $mahasiswa->id,
            'jurusan' => 'required'
        ]);

        $mahasiswa->update($request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil diupdate.');
    }

    // DELETE - Hapus data
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil dihapus.');
    }
}

