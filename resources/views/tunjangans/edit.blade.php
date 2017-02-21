@extends('layouts.app')
@section('content')

<br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading"><center><h2><b>Edit</b></h2></center></div>

                <div class="panel-body">
                    {!! Form::model($tunjangans, ['method'=> 'PATCH','route'=>['tunjangans.update', $tunjangans->id]]) !!}

					<div class="form-group{{ $errors->has('kode_tunjangan') ? ' has-error' : '' }}">
                        <label for="kode_tunjangan" class="col-md-4 control-label">Kode Tunjangan</label>
                        <div class="col-md-6">
                            {!! Form::text('kode_tunjangan', null, ['class'=>'form-control']) !!}
                        </div>
                    </div><br>

					<div class="form-group{{ $errors->has('jabatan_id') ? ' has-error' : '' }}">
                        <label for="jabatan_id" class="col-md-4 control-label">Nama Jabatan</label>
                            <div class="col-md-6">
                                <select name="jabatan_id" class="form-control">
                                    @foreach($jabatan as $mata)
										<option value="{!! $mata->id !!}" class="form-control" required>{!! $mata->nama_jabatan !!}</option>
									@endforeach
                                </select>
                            </div>
                    </div><br>

                    <div class="form-group{{ $errors->has('golongan_id') ? ' has-error' : '' }}">
                        <label for="golongan_id" class="col-md-4 control-label">Nama Golongan</label>
                        <div class="col-md-6">
                            <select name="golongan_id" class="form-control">
                                @foreach($golongan as $mata)
									<option value="{!! $mata->id !!}" class="form-control" required>{!! $mata->nama_golongan !!}</option>
								@endforeach
                            </select>
                        </div>
                   	</div><br>

                   	<div class="form-group">
                        <label for="status" class="col-md-4 control-label">Status</label>
                        <div class="col-md-6">
                           <select class="form-control" name="status">
                                <option value="Menikah">Menikah</option>
                                <option value="BelumMenikah">Belum Menikah</option>
                            </select>
                        </div>
                    </div>
                    
					<div class="form-group{{ $errors->has('jumlah_anak') ? ' has-error' : '' }}">
                    	<label for="jumlah_anak" class="col-md-4 control-label">Jumlah Anak</label>
                    	<div class="col-md-6">
                        	{!! Form::text('jumlah_anak', null, ['class'=>'form-control']) !!}
                    	</div>
                	</div><br>

                	<div class="form-group{{ $errors->has('besaran_uang') ? ' has-error' : '' }}">
                    	<label for="besaran_uang" class="col-md-4 control-label">Besaran Uang</label>
                    	<div class="col-md-6">
                        	{!! Form::text('besaran_uang', null, ['class'=>'form-control']) !!}
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