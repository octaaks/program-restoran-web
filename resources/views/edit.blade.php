<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<html>
<head>
</head>
<body>
	@foreach( $barang as $p)
	<form method="post" action="/toko/queryupdate">
		{{ csrf_field() }}
	<div class="mt-5">
	<div class="mx-auto" style="width: 40%;">
		<table class="table table-borderless">
			<tr>
				<input type="hidden" name="id" value="{{ $p->id }}" required="">
			</tr>
			<tr>
				<td>KODE</td>
				<td><input class="form-control" type="text" placeholder="Kode" name="kode" value="{{ $p->kode }}" ></td>
			</tr>
			<tr>
				<td>NAMA</td>
				<td><input class="form-control" type="text" placeholder="Nama" name="nama" value="{{ $p->nama }}" ></td>
				
			</tr>
			<tr>
				<td>HARGA BARANG</td>
				<td><input class="form-control" type="text" placeholder="Harga" name="harga" value="{{ $p->harga }}" ></td>
				
			</tr>
			<tr>
				<td colspan="2"><center><input class="btn btn-primary btn-lg btn-block" type="submit" value="Simpan"></td>

			</tr>
		</table>
	</form>
	@endforeach
</body>
</html>