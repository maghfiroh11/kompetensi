<?php

namespace App\Http\Controllers;

use App\Models\Kompetensi;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class KompetensiController extends Controller
{
    // Fungsi untuk menampilkan kompetensi mahasiswa berdasarkan mahasiswaId
    public function index($mahasiswaId)
    {
        $kompetensis = Kompetensi::where('mahasiswa_id', $mahasiswaId)->get();
        return view('kompetensi.index', compact('kompetensis', 'mahasiswaId'));
    }

    // Fungsi untuk menampilkan form tambah kompetensi
    public function create($mahasiswaId)
    {
        return view('kompetensi.create', compact('mahasiswaId'));
    }

    // Fungsi untuk menyimpan kompetensi baru
    public function store(Request $request, $mahasiswaId)
    {
        $request->validate([
            'kompetensi' => 'required|string|max:255',
            'nilai' => 'required|integer',
        ]);

        Kompetensi::create([
            'mahasiswa_id' => $mahasiswaId,
            'kompetensi' => $request->kompetensi,
            'nilai' => $request->nilai,
        ]);

        return redirect()->route('kompetensi.index', $mahasiswaId);
    }

    // Fungsi untuk menampilkan form edit kompetensi
    public function edit($mahasiswaId, Kompetensi $kompetensi)
    {
        return view('kompetensi.edit', compact('kompetensi', 'mahasiswaId'));
    }

    // Fungsi untuk memperbarui kompetensi
    public function update(Request $request, $mahasiswaId, Kompetensi $kompetensi)
    {
        $request->validate([
            'kompetensi' => 'required|string|max:255',
            'nilai' => 'required|integer',
        ]);

        $kompetensi->update($request->all());
        return redirect()->route('kompetensi.index', $mahasiswaId);
    }

    // Fungsi untuk menghapus kompetensi
    public function destroy($mahasiswaId, Kompetensi $kompetensi)
    {
        $kompetensi->delete();
        return redirect()->route('kompetensi.index', $mahasiswaId);
    }
}
