<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD Laravel</title>
    <style>
        .tombolEdit {
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    <h1>Latihan CRUD Laravel</h1>
    <a href="{{ route('mahasiswa.create') }}">Tambah data</a>
    <table border="1" style="border-collapse: collapse; width: 600px">
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Nomer HP</th>
            <th>Aksi</th>
        </tr>
        @php $no = 1; @endphp
        @foreach ($mahasiswa as $data)
        <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->nomer_hp }}</td>
                <td>
                    <form action="{{route('mahasiswa.destroy', $data->id)}}" method="post" style="text-align: center">
                        {{-- Tombol untuk edit --}}
                        <button>
                            <a class="tombolEdit" href="{{route('mahasiswa.edit', $data->id)}}">Update</a>
                        </button>

                        {{-- Tombol untuk Hapus --}}
                        @csrf
                        @method('delete')
                        <input type="submit" value="Hapus">
                    </form>
                </td>
            </tr>
            @endforeach
    </table>
</body>
</html>
