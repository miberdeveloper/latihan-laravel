<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Edit data mahasiswa</h2>

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="post">
        @method('put')
        @csrf
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="{{ $mahasiswa->nama }}">
            <br><br>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" value="{{ $mahasiswa->alamat }}">
            <br><br>
        <label for="nomerhp">Nomer HP</label>
        <input type="text" name="nomer_hp" id="nomerhp" value="{{ $mahasiswa->nomer_hp }}">
            <br><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
