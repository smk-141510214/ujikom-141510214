@extends('layouts.app')
@section('content')

<br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading"><center><h2><b>JABATAN</b></h2></center></div>

                <div class="panel-body">
                    <a href="{{url('/jabatans/create')}}" class="btn btn-primary">Tambah</a>
					<hr>
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr class="bg-info">
								<th><center>No</center></th>
								<th><center>Kode Jabatan</center></th>
								<th><center>Nama Jabatan</center></th>
								<th><center>Besaran Uang</center></th>
								<th colspan="3">Actions</th>
							</tr>
						</thead>
						<tbody>
							@php
							$n=1;
							@endphp
							@foreach($jabatans as $data)
							<tr>
								<td><center>{{ $n++ }}</center></td>
								<td><center>{{ $data->kode_jabatan }}</center></td>
								<td><center>{{ $data->nama_jabatan }}</center></td>
								<td><center>{{ $data->besaran_uang }}</center></td>

								<td><center><a href="{{route('jabatans.edit', $data->id)}}" class="btn btn-warning">Edit</center></td>
								<td><center>
									{!! Form::open(['method'=>'DELETE','route'=>['jabatans.destroy',$data->id]]) !!}
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
</div>
@endsection