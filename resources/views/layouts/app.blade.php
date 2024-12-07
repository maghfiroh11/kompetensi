<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kompetensi Mahasiswa</title>
</head>
<body>
    <header>
        <h1>Kompetensi Mahasiswa</h1>
        <nav>
            <a href="{{ route('mahasiswa.index') }}">Daftar Mahasiswa</a>
        </nav>
    </header>

    <div>
        @yield('content')
    </div>
</body>
</html>
