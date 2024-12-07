@extends('layouts.app')

@section('content')
    <h1>Kompetensi Mahasiswa</h1>
    <a href="{{ route('kompetensi.create', $mahasiswaId) }}">Tambah Kompetensi</a>
    <table border="1">
        <thead>
            <tr>
                <th>Kompetensi</th>
                <th>Nilai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kompetensis as $kompetensi)
                <tr>
                    <td>{{ $kompetensi->kompetensi }}</td>
                    <td>{{ $kompetensi->nilai }}</td>
                    <td>
                        <a href="{{ route('kompetensi.edit', [$mahasiswaId, $kompetensi->id]) }}">Edit</a>
                        <form action="{{ route('kompetensi.destroy', [$mahasiswaId, $kompetensi->id]) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
