

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<html>


<head>
	<title>Daftar Menu</title>
</head>
<body>
	<div class="mt-5">
	<div class="mx-auto" style="width: 80%;">
	<a class="btn btn-outline-primary" href="/toko/tambah" role="button">Tambah Menu Makanan</a>

	<br>
	<table class="table table-bordered">
  <thead>
    <tr>
			<th>KODE</th>
			<th>NAMA</th>
			<th>HARGA</th>
			<th>ACTION</th>
    </tr>
  </thead>
  <tbody>
    @foreach($barang as $b)
		<tr>
			<td>{{$b->kode}}</td>
			<td>{{$b->nama}}</td>
			<td>{{$b->harga}}</td>
			<td>
			<a class="btn btn-info" href="/toko/edit/{{$b->id}}" role="button">EDIT</a>
			<a class="btn btn-danger" href="/toko/hapus/{{ $b->id }}" role="button">HAPUS</a>
		</tr>
		@endforeach
  </tbody>
</table>

</body>
</html>