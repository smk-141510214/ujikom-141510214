@extends('layouts.app')
@section('content')

<br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading"><center><h2><b>Edit</b></h2></center></div>

                <div class="panel-body">
                    {!! Form::model($jabatans, ['method'=> 'PATCH','route'=>['jabatans.update', $jabatans->id]]) !!}
					<div class="form-group">
						{!! Form::label('Kode Jabatan ', 'Kode Jabatan :') !!}
						{!! Form::text('kode_jabatan', null, ['class'=>'form-control']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('Nama Jabatan', 'Nama Jabatan :') !!}
						{!! Form::text('nama_jabatan', null, ['class'=>'form-control']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('Besaran Uang ', 'Besaran Uang :') !!}
						{!! Form::text('besaran_uang', null, ['class'=>'form-control']) !!}
					</div>
					<div class="form-group">
						{!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
                	</div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
@stop