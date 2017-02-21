@extends('layouts.app')
@section('content')

<br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading"><center><h2><b>Tunjangan Pegawai</b></h2></center></div>

                <div class="panel-body">
                    <a href="{{url('/tunjanganpegawai/create')}}" class="btn btn-primary">Tambah</a>
					<hr>
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr class="bg-info">
								<th><center>No</center></th>
								<th><center>Kode Tunjangan</center></th>
								<th><center>NIP pegawai</center></th>
								<th><center>Nama pegawai</center></th>
								<th><center>Jabatan</center></th>
								<th><center>Golongan</center></th>
								<th colspan="3">Actions</th>
							</tr>
						</thead>
						<tbody>
						@php
						$n=1;
						@endphp
						@foreach($tunjanganpegawai as $gur)
						<tr>
							<td><center>{{ $n++ }}</center></td>
							<td><center>{{ $gur->Tunjangans->kode_tunjangan}}</center></td>
							<td><center>{{ $gur->Pegawai->nip }}</center></td>
							<td><center>{{ $gur->Pegawai->User->name }}</center></td>
							<td><center>{{ $gur->Pegawai->Jabatan->nama_jabatan }}</center></td>
							<td><center>{{ $gur->Pegawai->Golongan->nama_golongan }}</center></td>
							<td><center><a href="{{route('tunjanganpegawai.edit', $gur->id)}}" class="btn btn-warning">Edit</a></center></td>
							<td><center>
								{!! Form::open(['method'=>'DELETE','route'=>['tunjanganpegawai.destroy',$gur->id]]) !!}
								{!! Form::submit('Hapus',['class'=>'btn btn-danger']) !!}
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
@endsection