@extends('layouts.app')
@section('content')

<br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading"><center><h2><b> Lembur</b></h2></center></div>

                <div class="panel-body">
                    <a href="{{url('/lembur/create')}}" class="btn btn-primary">Tambah</a>
					<hr>
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr class="bg-info">
								<th><center>No</center></th>
								<th><center>Kode lembur</center></th>
								<th><center>Nip</center></th>
								<th><center>Jumlah Jam</center></th>
								<th colspan="3">Actions</th>
							</tr>
						</thead>
						<tbody>
						@php
						$n=1;
						@endphp
						@foreach($lembur as $gur)
						<tr>
							<td><center>{{ $n++ }}</center></td>
							<td><center>{{ $gur->kategori->kode_lembur }}</center></td>
							<td><center>{{ $gur->Pegawai->nip }}</center></td>
							<td><center>{{ $gur->jumlah_jam }} jam</center></td>
							<td><center><a href="{{route('lembur.edit', $gur->id)}}" class="btn btn-warning">Edit</a></center></td>
							<td><center>
								{!! Form::open(['method'=>'DELETE','route'=>['lembur.destroy',$gur->id]]) !!}
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