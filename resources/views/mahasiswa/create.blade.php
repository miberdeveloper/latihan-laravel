<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Tambah data mahasiswa</h2>

    <form action="{{ route('mahasiswa.store') }}" method="post">
        @csrf
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama">
            <br><br>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat">
            <br><br>
        <label for="nomerhp">Nomer HP</label>
        <input type="text" name="nomer_hp" id="nomerhp">
            <br><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
