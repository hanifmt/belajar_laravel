<html>
<head>
    <title>Tutorial Laravel | CRUD Eloquent pada Laravel</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <h3>Ubah Data Mahasiswa</h3>
            </div>
            <div class="card-body">
                
                <form action="/mahasiswa/update" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <input class="form-control" type="hidden" name="id" value="{{ $mahasiswa->id }}">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}">

                        @if($errors->has('nama'))
                            <div class="text-danger">
                                {{ $errors->first('nama') }}
                            </div>
                        @endif

                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control" cols="30" rows="2">{{ $mahasiswa->alamat }}</textarea>

                        @if($errors->has('alamat'))
                            <div class="text-danger">
                                {{ $errors->first('alamat') }}
                            </div>
                        @endif
                        
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Simpan">
                        <a href="/mahasiswa" class="btn btn-primary">Kembali</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
</html>