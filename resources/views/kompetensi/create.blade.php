@extends('layouts.app')

@section('content')
    <h1>Tambah Kompetensi</h1>

    <form action="{{ route('kompetensi.store', $mahasiswaId) }}" method="POST">
        @csrf
        <label for="kompetensi">Kompetensi:</label>
        <input type="text" name="kompetensi" id="kompetensi" required>
        <br>
        <label for="nilai">Nilai:</label>
        <input type="number" name="nilai" id="nilai" required>
        <br>
        <button type="submit">Simpan</button>
    </form>
@endsection
