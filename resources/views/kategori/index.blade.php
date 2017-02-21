@extends('layouts.app')
@section('content')

<br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading"><center><h2><b>Kategori Lembur</b></h2></center></div>

                <div class="panel-body">
                    <a href="{{url('/kategori/create')}}" class="btn btn-primary">Tambah</a>
					<hr>
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr class="bg-info">
								<th><center>No</center></th>
								<th><center>Kode lembur</center></th>
								<th><center>jabatan_id</center></th>
								<th><center>golongan_id</center></th>
								<th><center>besaran uang</center></th>
								<th colspan="3">Actions</th>
							</tr>
						</thead>
						<tbody>
						@php
						$n=1;
						@endphp
						@foreach($kategori as $gur)
						<tr>
							<td><center>{{ $n++ }}</center></td>
							<td><center>{{ $gur->kode_lembur}}</center></td>
							<td><center>{{ $gur->Jabatan->nama_jabatan }}</center></td>
							<td><center>{{ $gur->Golongan->nama_golongan }}</center></td>
							<td><center>{{ $gur->besaran_uang }}</center></td>
							<td><center><a href="{{route('kategori.edit', $gur->id)}}" class="btn btn-warning">Edit</a></center></td>
							<td><center>
								{!! Form::open(['method'=>'DELETE','route'=>['kategori.destroy',$gur->id]]) !!}
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