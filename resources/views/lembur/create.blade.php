@extends('layouts.app')
@section('content')

<br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading"><center><h2><b>Tambah</b></h2></center></div>

                <div class="panel-body">
                    {!! Form::open(['url' => 'lembur']) !!}


                    <div class="form-group{{ $errors->has('kode_lembur_id') ? ' has-error' : '' }}">
                        <label for="kode_lembur_id" class="col-md-4 control-label">Kode Lembur</label>
                            <div class="col-md-6">
                                <select name="kode_lembur_id" class="form-control">
                                    @foreach($kategori as $mata)
                                        <option value="{!! $mata->id !!}" class="form-control" required>{!! $mata->kode_lembur_id !!}</option>
                                    @endforeach
                                </select>
                            </div>
                    </div><br>

                    <div class="form-group{{ $errors->has('pegawai_id') ? ' has-error' : '' }}">
                        <label for="pegawai_id" class="col-md-4 control-label">NIP Pegawai</label>
                            <div class="col-md-6">
                                <select name="pegawai_id" class="form-control">
                                    @foreach($Pegawai as $mata)
                                        <option value="{!! $mata->id !!}" class="form-control" required>{!! $mata->nip !!}</option>
                                    @endforeach
                                </select>
                            </div>
                    </div><br>

                    <div class="form-group{{ $errors->has('jumlah_jam') ? ' has-error' : '' }}">
                        <label for="jumlah_jam" class="col-md-4 control-label">Jumlah Jam</label>
                        <div class="col-md-6">
                            <input id="jumlah_jam" type="jumlah_jam" class="form-control" name="jumlah_jam" value="{{ old('jumlah_jam') }}" required>

                            @if ($errors->has('jumlah_jam'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('jumlah_jam') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div><br>
                    
					<div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
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