<html>
<head>
    <title>Tutorial Laravel | CRUD Eloquent pada Laravel</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <h3>Data Mahasiswa</h3>
            </div>
            <div class="card-body">
                <a href="/mahasiswa/tambah" class="btn btn-primary">+ Tambah Mahasiswa</a>
                <br>
                <br>
                <table  class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mahasiswa as $m)
                        <tr>
                            <td>{{ $m->nama }}</td>
                            <td>{{ $m->alamat }}</td>
                            <td>
                                <a href="/mahasiswa/edit/{{ $m->id }}" class="btn btn-warning">Edit</a>
                                |
                                <a href="/mahasiswa/hapus/{{ $m->id }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>