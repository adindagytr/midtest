@extends('layout.app')
@section('title')
Edit Data Pegawai
@endsection
@section('content')
			<form action="/pegawai/{{$pegawai->id}}" method="POST">
				@csrf
				@method('PUT')
				<p>
        		<label for="nama_pegawai">Nama Pegawai</label>
        		<input type="text" name="nama_pegawai" value="{{$pegawai->nama_pegawai}}">
       			<p><label for="dob">Tanggal Lahir</label>
        		<input type="date" name="dob" value="{{$pegawai->dob}}">
        		<p><label for="alamat">Alamat Pegawai</label>
        		<input type="text" name="alamat" value="{{$pegawai->alamat}}">
        		<p><label for="no_hp">Nomor HP Pegawai</label>
        		<input type="text" name="no_hp" value="{{$pegawai->no_hp}}">
      			</p>
				<p>
					<input type="submit" value="Simpan">
			
					<input type="submit" value="Kembali" onclick="location.href='/pegawai">
					
				
			</form>
		@endsection