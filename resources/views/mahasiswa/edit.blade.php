@extends('layouts.app')

@section('content')
    <h1>Edit Mahasiswa</h1>

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="{{ $mahasiswa->nama }}" required>
        <br>
        <label for="nim">NIM:</label>
        <input type="text" name="nim" id="nim" value="{{ $mahasiswa->nim }}" required>
        <br>
        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" id="jurusan" value="{{ $mahasiswa->jurusan }}" required>
        <br>
        <label for="tahun_masuk">Tahun Masuk:</label>
        <input type="number" name="tahun_masuk" id="tahun_masuk" value="{{ $mahasiswa->tahun_masuk }}" required>
        <br>
        <button type="submit">Update</button>
    </form>
@endsection
