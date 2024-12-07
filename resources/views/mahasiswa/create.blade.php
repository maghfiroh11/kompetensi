@extends('layouts.app')

@section('content')
    <h1>Tambah Mahasiswa</h1>

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>
        <br>
        <label for="nim">NIM:</label>
        <input type="text" name="nim" id="nim" required>
        <br>
        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" id="jurusan" required>
        <br>
        <label for="tahun_masuk">Tahun Masuk:</label>
        <input type="number" name="tahun_masuk" id="tahun_masuk" required>
        <br>
        <button type="submit">Simpan</button>
    </form>
@endsection
