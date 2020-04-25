@extends('layout.app')
@section('title')
DATA ROTI
@endsection
@section('content')
<input type="button" class="btn btn-primary" value="Tambah Roti" onclick="location.href='/roti/create'">
<input type="button" class="btn btn-primary" value="Main Menu" onclick="location.href='/'">

	<br>
	@if($all_roti->isEmpty())
		Belum Ada Data
	@else
	<table class="table" border='1'>
		<tr>
			<th>ID</th>
			<th>Nama Roti</th>
			<th>Tanggal Expire</th>
			<th>Harga</th>
			<th>Action</th>
			
		</tr>
		@foreach($all_roti as $roti)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$roti->nama_roti}}</td>
				<td>{{$roti->tgl_exp}}</td>
				<td>{{$roti->harga}}</td>
				<td>
					<span>
						<input type="button" value="Edit" onclick="location.href='/roti/{{$roti->id}}/edit'">
						<form style="display:inline-block;" action="/roti/{{$roti->id}}" method="post">
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
