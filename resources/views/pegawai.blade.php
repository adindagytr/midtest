@extends('layout.app')
@section('title')
DATA PEGAWAI
@endsection
@section('content')
<input type="button" class="btn btn-primary" value="Tambah Pegawai" onclick="location.href='/pegawai/create'">
<input type="button" class="btn btn-primary" value="Main Menu" onclick="location.href='/'">

	<br>
	@if($all_pegawai->isEmpty())
		Belum Ada Data
	@else
	<table class="table" border='1'>
		<tr>
			<th>ID</th>
			<th>Nama Pegawai</th>
			<th>Tanggal Lahir</th>
			<th>Alamat Pegawai</th>
			<th>Nomor HP</th>
			<th>Action</th>
			
		</tr>
		@foreach($all_pegawai as $pegawai)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$pegawai->nama_pegawai}}</td>
				<td>{{$pegawai->dob}}</td>
				<td>{{$pegawai->alamat}}</td>
				<td>{{$pegawai->no_hp}}</td>
				<td>
					<span>
						<input type="button" value="Edit" onclick="location.href='/pegawai/{{$pegawai->id}}/edit'">
						<form style="display:inline-block;" action="/pegawai/{{$pegawai->id}}" method="post">
							@csrf
							@method('DELETE')
							<input type="Submit" class="btn btn-danger" value="Delete">
						</form>
						
							</span>
						</td>
					</tr>
				@endforeach
			</table>

			@endif
		@endsection
