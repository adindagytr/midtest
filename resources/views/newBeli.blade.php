@extends('layout.app')

    @section('title','Tambah Pembelian')


    @section('content')
      <form action="/beli" method="POST">
        @csrf
        <p>
          <label for="tgl_beli">Tanggal Pembelian</label>
          <input type="date" name="tgl_beli" >
        </p>
        <p>
          <label for="nama_cust">Nama Customer</label>
          <input type="text" name="nama_cust" >
        </p>
        <p>
          <label for="pegawai">Nama_Pegawai</label>
          <select name="pegawai">
            @foreach($pegawai as $p)
              <option value="{{$p->id}}">{{$p->nama_pegawai}}</option>
            @endforeach
          </select>
        </p>
        <p>
          <label for="roti">Nama Roti</label>
          <select name="roti">
            @foreach($roti as $r)
              <option value="{{$r->id}}">{{$r->nama_roti}}</option>
            @endforeach
          </select>
        </p>
        
        <p>
          <input type="submit" value="Simpan">
          <input type="button" value="Kembali" onclick="location.href='/matakuliah'">
        </p>
      </form>
    @endsection