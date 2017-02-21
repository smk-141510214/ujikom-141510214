<?php

namespace App\Http\Controllers;

use Request;
use App\Pegawai;
use App\kategori;
use App\Lembur_pegawai;

class lemburController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        //
        $kategori = kategori::all();
        $lembur = Lembur_pegawai::all();
        return view('lembur.index', compact('lembur', 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kategori=kategori::all();
        $Pegawai=Pegawai::all();
        return view('lembur.create', compact('kategori','Pegawai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $lembur=Request::all();
        Lembur_pegawai::create($lembur);
        return redirect('lembur');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $lembur=Lembur_pegawai::find($id);
        $kategori=kategori::all();
        $pegawai=Pegawai::all();
        return view('lembur.edit', compact('lembur','kategori','pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $komUpdate=Request::all();
        $kom=Lembur_pegawai::find($id);
        $kom->update($komUpdate);
        return redirect('lembur');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Lembur_pegawai::find($id)->delete();
        return redirect('lembur');
    }
}
