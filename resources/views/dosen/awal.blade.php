@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Dosen</strong>
		<a href="{{ url('Dosen/tambah') }}" class="btn btn-xs-primary pull-right">
			<i class="fa da-plus"></i>Dosen</a>
			<div class="clearfix"></div>
	</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>nama</th>
			<th>nip</th>
			<th>alamat</th>
			<th>pengguna_id</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $x=1;?>
		@foreach ($data as $Dosen)
		<tr>
			<td>{{ $x++ }}</td>
			<td>{{ $Dosen->nama or 'username kosong' }}</td>
			<td>{{ $Dosen->nip or 'password kosong' }}</td>
			<td>{{ $Dosen->alamat or 'password kosong' }}</td>
			<td>{{ $Dosen->pengguna_id or 'password kosong' }}</td>

			<td>
				<div class="btn-group" role="group">
					<a href="{{url('Dosen/edit/'.$Dosen->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
						<i class="fa fa-pencil"></i></a>
						<a href="{{url('Dosen/lihat/'.$Dosen->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('Dosen/hapus/'.$Dosen->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="hapus"><i class="fa fa-remove"></i></a>
				</div>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
@stop