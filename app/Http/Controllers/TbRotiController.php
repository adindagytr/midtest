<?php

namespace App\Http\Controllers;

use App\tb_roti;
use Illuminate\Http\Request;

class TbRotiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_roti = tb_roti::select('tb_rotis.id','nama_roti','tgl_exp','harga')->get();
        return view('roti',compact('all_roti'));
    }


    public function create()
    {
        return view('newRoti');
    }

    public function store(Request $request)
    {
        $roti = new tb_roti();
        $roti->nama_roti = $request->nama_roti;
        $roti->tgl_exp = $request->tgl_exp;
        $roti->harga = $request->harga;
        $roti->save();
        return redirect('/roti');
    }

    public function show(tb_roti $roti)
    {
        $all_roti = tb_roti::select('tb_rotis.id','nama_roti','tgl_exp','harga');
        return view ('roti',compact('all_roti'));
    }

    public function edit($id)
    {
        $roti = tb_roti::where("id",$id)->first();
        return view('editRoti',compact('roti'));
    }

    public function update(Request $request, $id)
    {
        $roti = tb_roti::where("id",$id)->first();
        $roti->nama_roti = $request->nama_roti;
        $roti->tgl_exp = $request->tgl_exp;
        $roti->harga = $request->harga;
        $roti->update();
        return redirect('/roti');
    }

    public function destroy(tb_roti $roti)
    {
        $roti->delete();
        return redirect('/roti');
    }
}
