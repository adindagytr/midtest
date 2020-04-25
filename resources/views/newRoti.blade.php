@extends('layout.app')

    @section('title','TAMBAH ROTI')


    @section('content')
    <form action="/roti" method="POST">
      @csrf
      <p>
        <label for="nama_roti">Nama Roti</label>
        <input type="text" name="nama_roti">
        <p><label for="tgl_exp">Tanggal Expire</label>
        <input type="date" name="tgl_exp">
        <p><label for="harga">Harga</label>
        <input type="integer" name="harga">
      </p>
      
       <p>
          <input type="submit" value="Simpan" onclick="location.href='/roti'">
          <input type="button" value="Kembali" onclick="location.href='/roti'">
        </p>
      </form>
    @endsection




