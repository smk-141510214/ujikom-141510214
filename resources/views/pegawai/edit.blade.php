@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading">Edit Data Pegawai</div>
                <div class="panel-body">
				<hr>
				{!! Form::model($pegawai, ['class' => 'form-horizontal',  'enctype' => 'multipart/form-data', 'method' => 'PATCH', 'route' => ['pegawai.update', $pegawai->id], 'files' => true]) !!}

					<div class="form-group{{ $errors->has('nip') ? ' has-error' : '' }}">
	                    <label for="nip" class="col-md-4 control-label">NIP</label>
						<div class="col-md-6">
	                        <input type="text" name="Nip" class="form-control" value="{{ $pegawai->nip }}" readonly>
	                    </div>
	                </div>
	                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
	                    <label for="name" class="col-md-4 control-label">Nama Pegawai</label>
						<div class="col-md-6">
	                        <input type="text" name="name" class="form-control" value="{{ $pegawai->User->name }}" readonly>
	                    </div>
	                </div>
	                <div class="form-group{{ $errors->has('jabatan_id') ? ' has-error' : '' }}">
	                    <label for="jabatan_id" class="col-md-4 control-label">Nama Jabatan</label>
						<div class="col-md-6">
	                        <select name="jabatan_id" class="form-control">
                                @foreach($jabatan as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_jabatan }}</option>
                                @endforeach
                            </select>
	                    </div>
	                </div>
	                <div class="form-group{{ $errors->has('golongan_id') ? ' has-error' : '' }}">
	                    <label for="golongan_id" class="col-md-4 control-label">Nama Golongan</label>
						<div class="col-md-6">
	                        <select name="golongan_id" class="form-control">
                                @foreach($golongan as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_golongan }}</option>
                                @endforeach
                            </select>
	                    </div>
	                </div>
	                <div class="form-group{{ $errors->has('poto') ? ' has-error' : '' }}">
                        <label for="poto" class="col-md-4 control-label">poto</label>
                            <div class="col-md-6">
                                <input id="poto" type="file" class="form-control" name="poto" value="{{ old('poto') }}" required autofocus>
                            </div>
                        </div>
					<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </div>
					{!! Form::close() !!}
	           </div>
	       </div>
	   </div>
    </div>
</div> 	
@endsection