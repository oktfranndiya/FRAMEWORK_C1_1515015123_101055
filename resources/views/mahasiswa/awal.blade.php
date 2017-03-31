@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Mahasiswa</strong>
		<a href="{{ url('Mahasiswa/tambah') }}" class="btn btn-xs-primary pull-right">
			<i class="fa da-plus"></i>Mahasiswa</a>
			<div class="clearfix"></div>
	</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Nim</th>
			<th>Alamat</th>
			<th>pengguna_id</th>
		</tr>
	</thead>
	<tbody>
		<?php $x=1;?>
		@foreach ($data as $Mahasiswa)
		<tr>
			<td>{{ $x++ }}</td>
			<td>{{ $Mahasiswa->nama or 'nama kosong' }}</td>
			<td>{{ $Mahasiswa->nim or 'nim kosong' }}</td>
			<td>{{ $Mahasiswa->alamat or 'alamat kosong' }}</td>
			<td>{{ $Mahasiswa->pengguna_id or 'pengguna_id kosong' }}</td>
			<td>
				<div class="btn-group" role="group">
					<a href="{{url('Mahasiswa/edit/'.$mahasiswa->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
						<i class="fa fa-pencil"></i></a>
						<a href="{{url('Mahasiswa/lihat/'.$mahasiswa->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('Mahasiswa/hapus/'.$mahasiswa->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="hapus"><i class="fa fa-remove"></i></a>
				</div>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
@stop