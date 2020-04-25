@extends('layout.app')
@section('title')
Edit Data Roti
@endsection
@section('content')
			<form action="/roti/{{$roti->id}}" method="POST">
				@csrf
				@method('PUT')
				<p>
        		<label for="nama_roti">Nama Roti</label>
        		<input type="text" name="nama_roti" value="{{$roti->nama_roti}}">
       			<p><label for="tgl_exp">Tanggal Expire</label>
        		<input type="date" name="tgl_exp" value="{{$roti->tgl_exp}}">
        		<p><label for="harga">Harga</label>
        		<input type="integer" name="harga" value="{{$roti->harga}}">
				<p>
					<input type="submit" value="Simpan">
			
					<input type="submit" value="Kembali" onclick="location.href='/roti">
					
				
			</form>
		@endsection