@extends('layouts.app')
@section('content')

<br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading"><center><h2><b>Tambah</b></h2></center></div>

                <div class="panel-body">
                {!! Form::open(['url' => 'jabatans']) !!}
					<div class="form-group{{ $errors->has('kode_jabatan') ? ' has-error' : '' }}">
                        <label for="kode_jabatan" class="col-md-4 control-label">Kode Jabatan</label>
                        <div class="col-md-6">
                            <input id="kode_jabatan" type="kode_jabatan" class="form-control" name="kode_jabatan" value="{{ old('kode_jabatan') }}" required autofocus>

                            @if ($errors->has('kode_jabatan'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('kode_jabatan') }}</strong>
                                </span>
                             @endif
                        </div>
                    </div>
                    <br>
                    <div class="form-group{{ $errors->has('nama_jabatan') ? ' has-error' : '' }}">
                        <label for="nama_jabatan" class="col-md-4 control-label">Nama Jabatan</label>
                        <div class="col-md-6">
                            <input id="nama_jabatan" type="nama_jabatan" class="form-control" name="nama_jabatan" value="{{ old('nama_jabatan') }}" required autofocus>

                            @if ($errors->has('nama_jabatan'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nama_jabatan') }}</strong>
                                </span>
                             @endif
                        </div>
                    </div>
                    <br>
                    <div class="form-group{{ $errors->has('besaran_uang') ? ' has-error' : '' }}">
                        <label for="besaran_uang" class="col-md-4 control-label">Besaran Uang</label>
                        <div class="col-md-6">
                            <input id="besaran_uang" type="besaran_uang" class="form-control" name="besaran_uang" value="{{ old('besaran_uang') }}" required autofocus>

                            @if ($errors->has('besaran_uang'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('besaran_uang') }}</strong>
                                </span>
                             @endif
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                    Save
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

{!! Form::close() !!}
@stop