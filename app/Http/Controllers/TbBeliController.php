<?php

namespace App\Http\Controllers;

use App\tb_beli;
use Illuminate\Http\Request;
use App\tb_roti;
use App\tb_pegawai;

class TbBeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_beli = tb_beli::select('tb_belis.id','tgl_beli','nama_cust','nama_pegawai','nama_roti')
        ->join('tb_pegawais','tb_belis.id_pegawai','=','tb_pegawais.id')
        ->join('tb_rotis','tb_belis.id_roti','=','tb_rotis.id')
        ->get();

        return view('beli',compact('all_beli'));
    }

    public function create()
    {
        $beli = tb_beli::get();
        $pegawai = tb_pegawai::get();
        $roti = tb_roti::get();
        return view('newBeli',compact('beli','roti','pegawai'));
    }


    public function store(Request $request)
    {
        $beli = new tb_beli();
        $beli->tgl_beli = $request->tgl_beli;
        $beli->nama_cust = $request->nama_cust;
        $beli->id_pegawai = $request->pegawai;
        $beli->id_roti = $request->roti;
        $beli->save();
        return redirect('/beli');
    }

    public function show(tb_beli $tb_beli)
    {
        $all_beli = tb_beli::select('tb_belis.id','tgl_beli','nama_cust','nama_pegawai','nama_roti')
        ->join('tb_pegawais','tb_belis.id_pegawai','=','tb_pegawai.id')
        ->join('tb_rotis','tb_belis.id_roti','=','tb_rotis.id')
        ->where('tb_belis.id',$tb_beli)->first();
        $pegawai = tb_pegawai::get();
        $roti = tb_roti::get();
        return view('beli',compact('all_beli','pegawai','roti'));
    }

    public function edit($id)
    {
        $pegawai = tb_pegawai::get();
        $roti = tb_roti::get();
        $beli = tb_beli::where("id",$id)->first();
        return view('editBeli',compact('pegawai','roti','beli'));
    }

    public function update(Request $request, $id)
    {
        $beli = tb_beli::where("id",$id)->first();
        $beli->tgl_beli = $request->tgl_beli;
        $beli->nama_cust = $request->nama_cust;
        $beli->id_pegawai = $request->pegawai;
        $beli->id_roti = $request->roti;
        $beli->update();
        return redirect('/beli');
    }

    public function destroy(tb_beli $beli)
    {
        $beli->delete();
        return redirect('/beli');
    }
}
