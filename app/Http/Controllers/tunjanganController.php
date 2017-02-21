<?php

namespace App\Http\Controllers;

use Request;
use App\Golongan;
use App\Jabatan;
use App\Tunjangans;

class tunjanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tunjangans = Tunjangans::all();
        return view('tunjangans.index', compact('tunjangans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $golongans=Golongan::all();
        $jabatans=Jabatan::all();
        return view('tunjangans.create', compact('golongans','jabatans'));
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
        $tunjangans=Request::all();
        Tunjangans::create($tunjangans);
        return redirect('tunjangans');
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
        $tunjangans=Tunjangans::find($id);
        $jabatan=Jabatan::all();
        $golongan=Golongan::all();
        return view('tunjangans.edit', compact('tunjangans','jabatan','golongan'));
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
        $kom=Tunjangans::find($id);
        $kom->update($komUpdate);
        return redirect('tunjangans');
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
        Tunjangans::find($id)->delete();
        return redirect('tunjangans');
    }
}
