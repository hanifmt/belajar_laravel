<html>
<head>
    <title>Tutorial Laravel | Eloquent CRUD pada Laravel</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>

    <ul>
        @foreach($mahasiswa as $m)
        <li>{{ "Nama : ".$m->nama." | Alamat : ".$m->alamat }}</li>
        @endforeach
    </ul>
    
</body>
</html>