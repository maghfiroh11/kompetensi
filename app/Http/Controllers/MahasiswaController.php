<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // Fungsi untuk menampilkan daftar mahasiswa
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    // Fungsi untuk menampilkan form tambah mahasiswa
    public function create()
    {
        return view('mahasiswa.create');
    }

    // Fungsi untuk menyimpan data mahasiswa baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|unique:mahasiswas,nim',
            'jurusan' => 'required|string|max:255',
            'tahun_masuk' => 'required|integer',
        ]);

        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index');
    }

    // Fungsi untuk menampilkan form edit mahasiswa
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    // Fungsi untuk memperbarui data mahasiswa
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|unique:mahasiswas,nim,' . $mahasiswa->id,
            'jurusan' => 'required|string|max:255',
            'tahun_masuk' => 'required|integer',
        ]);

        $mahasiswa->update($request->all());
        return redirect()->route('mahasiswa.index');
    }

    // Fungsi untuk menghapus mahasiswa
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index');
    }
}
