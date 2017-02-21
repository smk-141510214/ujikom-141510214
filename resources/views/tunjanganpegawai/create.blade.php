@extends('layouts.app')
@section('content')

<br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading"><center><h2><b>Tambah</b></h2></center></div>

                <div class="panel-body">
                    {!! Form::open(['url' => 'tunjanganpegawai']) !!}

                    <div class="form-group{{ $errors->has('kode_tunjangan_id') ? ' has-error' : '' }}">
                        <label for="kode_tunjangan_id" class="col-md-4 control-label">Kode Tunjangan</label>
                            <div class="col-md-6">
                                <select name="kode_tunjangan_id" class="form-control">
                                    @foreach($tunjangans as $mata)
										<option value="{!! $mata->id !!}" class="form-control" required>{!! $mata->kode_tunjangan !!}</option>
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