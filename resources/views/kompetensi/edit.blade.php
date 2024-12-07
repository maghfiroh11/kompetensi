@extends('layouts.app')

@section('content')
    <h1>Edit Kompetensi</h1>
    <form action="{{ route('kompetensi.update', [$mahasiswaId, $kompetensi->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="kompetensi">Kompetensi:</label>
            <input type="text" name="kompetensi" id="kompetensi" value="{{ $kompetensi->kompetensi }}" required>
        </div>
        <div>
            <label for="nilai">Nilai:</label>
            <input type="number" name="nilai" id="nilai" value="{{ $kompetensi->nilai }}" required>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
