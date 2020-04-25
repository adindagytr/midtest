@extends('layout.app')
@section('title')
DATA PEMBELIAN
@endsection
@section('content')
<input type="button" class="btn btn-primary" value="Tambah Pembelian" onclick="location.href='/beli/create'">
<input type="button" class="btn btn-primary" value="Main Menu" onclick="location.href='/'">
	<br>
	@if($all_beli->isEmpty())
		Belum Ada Data
	@else
	<table class="table" border='1'>
		<tr>
			<th>ID</th>
			<th>Tanggal Pembelian</th>
			<th>Nama Customer</th>
			<th>Nama Pegawai</th>
			<th>Nama Roti</th>
			<th>Action</th>
			
			
		</tr>

		@foreach($all_beli as $beli)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$beli->tgl_beli}}</td>
				<td>{{$beli->nama_cust}}</td>
				<td>{{$beli->nama_pegawai}}</td>
				<td>{{$beli->nama_roti}}</td>
				
				<td>
					<span>
								<input type="button" value="Edit" onclick="location.href='/beli/{{$beli->id}}/edit'">
								<form style="display:inline-block;" action="/beli/{{$beli->id}}" method="post">
									@csrf
									@method('DELETE')
									<input type="submit" value="delete">
								</form>

							
							</span>
						</td>
					</tr>
				@endforeach
			</table>
			@endif
		@endsection
