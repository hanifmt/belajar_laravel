<html>
<head>
    <title>Tutorial Laravel | Membuat CRUD pada Laravel</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-body">

				<h3>Ubah Data Pegawai</h3>

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

				@foreach($pegawai as $p)
				<form action="/pegawai/update" method="post">
					{{ csrf_field() }}
					<div class="form-group">
                        <input class="form-control" type="hidden" name="id" value="{{ $p->pegawai_id }}">
                    </div>
					<div class="form-group">
                        <label for="nama">Nama</label>
                        <input class="form-control" type="text" name="nama" value="{{ $p->pegawai_nama }}">
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input class="form-control" type="text" name="jabatan" value="{{ $p->pegawai_jabatan }}">
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input class="form-control" type="text" name="umur" value="{{ $p->pegawai_umur }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat">{{ $p->pegawai_alamat }}</textarea>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Simpan Data">
                        <a class="btn btn-primary" href="/pegawai">Kembali</a>
                    </div>
				</form>
				@endforeach

			</div>
		</div>
	</div>
		
</body>
</html>