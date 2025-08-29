<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h1>Tambah Mahasiswa</h1>

    <a href="{{ route('mahasiswa.index') }}">Kembali</a>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ old('nama') }}"><br><br>

        <label>NIM:</label><br>
        <input type="text" name="nim" value="{{ old('nim') }}"><br><br>

        <label>Jurusan:</label><br>
        <input type="text" name="jurusan" value="{{ old('jurusan') }}"><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
