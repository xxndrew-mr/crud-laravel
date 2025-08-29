<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h1>Edit Mahasiswa</h1>

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

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ old('nama', $mahasiswa->nama) }}"><br><br>

        <label>NIM:</label><br>
        <input type="text" name="nim" value="{{ old('nim', $mahasiswa->nim) }}"><br><br>

        <label>Jurusan:</label><br>
        <input type="text" name="jurusan" value="{{ old('jurusan', $mahasiswa->jurusan) }}"><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
