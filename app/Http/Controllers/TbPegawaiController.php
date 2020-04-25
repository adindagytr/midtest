<?php

namespace App\Http\Controllers;

use App\tb_pegawai;
use Illuminate\Http\Request;

class TbPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_pegawai = tb_pegawai::select('tb_pegawais.id','nama_pegawai','dob','alamat','no_hp')->get();
        return view('pegawai',compact('all_pegawai'));
    }

    public function create()
    {
        return view('newPegawai');
    }

    public function store(Request $request)
    {
        $pegawai = new tb_pegawai();
        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->dob = $request->dob;
        $pegawai->alamat = $request->alamat;
        $pegawai->no_hp = $request->no_hp;
        $pegawai->save();
        return redirect('/pegawai');
    }

    public function show(tb_pegawai $pegawai)
    {
        $all_pegawai = tb_pegawai::select('tb_pegawais.id','nama_pegawai','dob','alamat','no_hp');
        return view('pegawai',compact('all_pegawai'));
    }

    public function edit($id)
    {
        $pegawai = tb_pegawai::where("id",$id)->first();
        return view('editPegawai',compact('pegawai'));
    }

   
    public function update(Request $request, $id)
    {
        $pegawai = tb_pegawai::where("id",$id)->first();
        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->dob = $request->dob;
        $pegawai->alamat = $request->alamat;
        $pegawai->no_hp = $request->no_hp;
        $pegawai->update();
        return redirect('/pegawai');

    }

    public function destroy(tb_pegawai $pegawai)
    {
        $pegawai->delete();
        return redirect('/pegawai');
    }
}
