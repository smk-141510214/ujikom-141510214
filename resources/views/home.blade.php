@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
                    <li><a href="{{ url('/jabatans') }}">jabatan</a></li>
                    <li><a href="{{ url('/pegawai') }}">pegawai</a></li>
                    <li><a href="{{ url('/golongans') }}">golongan</a></li>
                    <li><a href="{{ url('/kategori') }}">kategori</a></li>
                    <li><a href="{{ url('/lembur') }}">lembur</a></li>
                    <li><a href="{{ url('/tunjangans') }}">tunjangan</a></li>
                    <li><a href="{{ url('/tunjanganpegawai') }}">tunnjangan pegawai</a></li> 
            </div>
        </div>
    </div>
</div>
@endsection
