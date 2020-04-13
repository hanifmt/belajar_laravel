<html>
<head>
    <title>Tutorial Laravel | Relasi Many To Many Eloquent pada Laravel</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
    <div class="container">
		<div class="card mt-5">
			<div class="card-body">
				<h5 class="text-center my-4">Eloquent One To Many Relationship</h5>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Nama Anggota</th>
							<th>Hadiah</th>
                            <th width="1%" class="text-center">Jumlah</th>
						</tr>
					</thead>
					<tbody>
						@foreach($anggota as $a)
						<tr>
							<td>{{ $a->nama }}</td>
							<td>
                                <ul>
                                    @foreach($a->hadiah as $h)
                                        <li>{{ $h->nama_hadiah }},</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td class="text-center"> {{ $a->hadiah->count() }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>