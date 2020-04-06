<html>
<head>
    <title>Tutorial Laravel | Membuat CRUD pada Laravel</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

    <div class="container">
		<div class="card">
			<div class="card-body">

                <h3>Tambah Data Pegawai</h3>
                
                <!-- menampilkan error validasi -->
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <br>

                <form action="/pegawai/store" method="post">
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input class="form-control" type="text" name="nama" value="{{ old('nama') }}">
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input class="form-control" type="text" name="jabatan" value="{{ old('jabatan') }}">
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input class="form-control" type="text" name="umur" value="{{ old('umur') }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat">{{ old('alamat') }}</textarea>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Simpan Data">
                        <a class="btn btn-primary" href="/pegawai">Kembali</a>
                    </div>
                </form>
                
            </div>
		</div>
	</div>
</body>
</html>