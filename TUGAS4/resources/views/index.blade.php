<!DOCTYPE html>
<html>
<head>
	<title>HALAMAN SISWA</title>
</head>
<body >

	<h3 align="center">Data Siswa</h3>

	<br/>

	<table border="1" align="center">
		<tr>
            <th>No</th>
			<th>Nama</th>
			<th>Nim</th>
			<th>Kelas</th>
		</tr>
        @php
            $no=0;
        @endphp
		@foreach($siswa as $s)
        @php
            $no++;
        @endphp
		<tr>
            <td>{{ $no }}</td>
			<td>{{ $s->nama }}</td>
			<td>{{ $s->nim }}</td>
			<td>{{ $s->kelas }}</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
