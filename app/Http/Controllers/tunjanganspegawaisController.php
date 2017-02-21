<?php

namespace App\Http\Controllers;

use Request;
use App\Tunjangan_pegawai;
use App\Tunjangans;
use App\Pegawai;

class tunjanganspegawaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tunjangans=Tunjangans::all();
        $tunjanganpegawai = Tunjangan_pegawai::all();
        $pegawai=Pegawai::all();
        return view('tunjanganpegawai.index', compact('tunjanganpegawai','tunjangans','pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tunjangans=Tunjangans::all();
        $Pegawai=Pegawai::all();
        return view('tunjanganpegawai.create', compact('tunjangans','Pegawai'));
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
        $tunjanganpegawai=Request::all();
        Tunjangan_pegawai::create($tunjanganpegawai);
        return redirect('tunjanganpegawai');
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
        $tunjanganpegawai=Tunjangan_pegawai::find($id);
        $tunjangans=Tunjangans::all();
        $pegawai=Pegawai::all();
        return view('tunjanganpegawai.edit', compact('tunjanganpegawai','tunjangans','pegawai'));
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
        $kom=Tunjangan_pegawai::find($id);
        $kom->update($komUpdate);
        return redirect('tunjanganpegawai');
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
        Tunjangan_pegawai::find($id)->delete();
        return redirect('tunjanganpegawai');
    }
}
