@extends('layouts.app')
@section('content')

<br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading"><center><h2><b>Edit</b></h2></center></div>

                <div class="panel-body">
                    {!! Form::model($kategori, ['method'=> 'PATCH','route'=>['kategori.update', $kategori->id]]) !!}
					<div class="form-group">
						{!! Form::label('Kode Lembur', 'Kode Lembur :') !!}
						{!! Form::text('kode_lembur', null, ['class'=>'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('Jabatan id', 'Jabatan id :') !!}
						<select name="jabatan_id" required="">
							@foreach($jabatan as $mata)
							<option value="{!! $mata->id !!}" class="form-control" required>{!! $mata->kode_jabatan !!}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						{!! Form::label('Golongan id', 'Golongan id :') !!}
						<select name="golongan_id" required="">
							@foreach($golongan as $mata)
							<option value="{!! $mata->id !!}" class="form-control" required>{!! $mata->kode_golongan !!}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						{!! Form::label('Besaran Uang', 'Besaran Uang :') !!}
						{!! Form::text('besaran_uang', null, ['class'=>'form-control']) !!}
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