<?php

namespace App\Http\Controllers;

use Request;
use App\Jabatan;
use App\Golongan;
use App\User;
use App\Pegawai;
use DB;
use Validator;
use Input;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class pegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

  use RegistersUsers;
    
    public function index()
    {
        //
        $jabatan = Jabatan::all();
        $golongan = Golongan::all();
        $pegawai = Pegawai::all();
        return view('pegawai.index', compact('jabatan', 'golongan', 'pegawai'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $dd = User::all();
        $jabatan = Jabatan::all();
        $golongan = Golongan::all();
        return view('pegawai.create', compact('kode', 'pegawai', 'dd', 'jabatan', 'golongan'));
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
        $input = Request::all();
        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => bcrypt($input['password']),
            'permission' => $input['permission']
        ]);

        $file = Input::file('poto');
        $destinationPath = public_path().'/image/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $uploadSuccess = $file->move($destinationPath, $filename);

        if(Input::hasFile('poto')){
           $mm = new Pegawai;
           $mm->nip = Input::get('nip'); 
           $mm->user_id = $user->id;  
           $mm->jabatan_id = Input::get('jabatan_id'); 
           $mm->golongan_id = Input::get('golongan_id'); 
           $mm->poto = $filename;
           $mm->save();
        }
        return redirect('pegawai');
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
         $pegawai = Pegawai::find($id);
        return view('pegawai.show', compact('pegawai'));
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
         $pegawai = Pegawai::find($id);
        $jabatan = Jabatan::all();
        $golongan = Golongan::all();

        return view('pegawai.edit', compact('pegawai', 'jabatan', 'golongan'));
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
         $pegawai = Pegawai::find($id);

        if(Request::hasFile('poto')){
            $file = Request::file('poto');
            $destinationPath = public_path().'/image/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
        }
        
        $pegawai->nip = Request::get('Nip'); 
        $pegawai->jabatan_id = Request::get('jabatan_id'); 
        $pegawai->golongan_id = Request::get('golongan_id'); 
        $pegawai->poto = $filename;
        $pegawai->save();
        return redirect('pegawai');
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
         Pegawai::find($id)->delete();
        return redirect('pegawai');
    }
}
