@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading"><center><h2><b>Pegawai</b></h2></center></div>

                <div class="panel-body">
                    <a href="{{url('/pegawai/create')}}" class="btn btn-primary">Tambah</a>
					<hr>
					<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr class="danger">
					<th><center>No</center></th>
					<th><center>Nip</center></th>
					<th><center>Nama Pegawai</center></th>
					<th><center>Nama Jabatan</center></th>
					<th><center>Nama Golongan</center></th>
					<th><center>Photo</center></th>
					<th colspan="3"><center>Action</center></th>
				</tr>
			</thead>
			<tbody>
			<?php
				$no = 1;
			?>
				@foreach($pegawai as $data)
					<tr>
						<td><center>{{ $no++ }}</center></td>
						<td>{{ $data->nip }}</td>
						<td>{{ $data->User->name }}</td>
						<td>{{ $data->Jabatan->nama_jabatan }}</td>
						<td>{{ $data->Golongan->nama_golongan }}</td>
						<td>
							<center>
								<img src="{{asset('/image/'.$data->poto)}}" height="100px" width="100px">
							</center>
						</td>
						<td><center><a href="{{ url('pegawai', $data->id) }}" class="btn btn-primary">Lihat</a></center></td>
						<td><center><a href="{{ route('pegawai.edit', $data->id) }}" class="btn btn-warning">Ubah</a></center></td>
						<td><center>
							{!! Form::open(['method' => 'DELETE', 'route' => ['pegawai.destroy', $data->id]]) !!}
							{!! Form::submit('Hapus', ['class' => 'btn btn-danger']) !!}
							{!! Form::close() !!}
						</center></td>
					</tr>
				@endforeach
			</tbody>
		</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection