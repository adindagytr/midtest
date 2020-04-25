@extends('layout.app')

    @section('title','TAMBAH PEGAWAI')


    @section('content')
    <form action="/pegawai" method="POST">
      @csrf
      <p>
        <label for="nama_pegawai">Nama Pegawai</label>
        <input type="text" name="nama_pegawai">
        <p><label for="dob">Tanggal Lahir</label>
        <input type="date" name="dob">
        <p><label for="alamat">Alamat Pegawai</label>
        <input type="text" name="alamat">
        <p><label for="no_hp">Nomor HP Pegawai</label>
        <input type="text" name="no_hp">
      </p>
      
       <p>
          <input type="submit" value="Simpan" onclick="location.href='/pegawai'">
          <input type="button" value="Kembali" onclick="location.href='/pegawai'">
        </p>
      </form>
    @endsection




