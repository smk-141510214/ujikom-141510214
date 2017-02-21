@extends('layouts.app')
@section('content')

<br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading"><center><h2><b>Edit</b></h2></center></div>

                <div class="panel-body">
                    {!! Form::model($lembur, ['method'=> 'PATCH','route'=>['lembur.update', $lembur->id]]) !!}
					<div class="form-group">
						{!! Form::label('kode lembur', 'kode lembur :') !!}
						<select name="kode_lembur_id" required="">
							@foreach($kategori as $mata)
							<option value="{!! $mata->id !!}" class="form-control" required>{!! $mata->kode_lembur !!}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						{!! Form::label('pegawai id', 'pegawai id :') !!}
						<select name="pegawai_id" required="">
							@foreach($pegawai as $mata)
							<option value="{!! $mata->id !!}" class="form-control" required>{!! $mata->nip !!}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						{!! Form::label('Jumlah Jam', 'Jumlah Jam :') !!}
						{!! Form::text('jumlah_jam', null, ['class'=>'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::submit('Save', ['class'=>'btn btn-primary form-control']) !!}
					</div>
                </div>
            </div>
        </div>
    </div>
</div>

{!! Form::close() !!}
@stop