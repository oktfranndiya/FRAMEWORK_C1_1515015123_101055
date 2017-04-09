@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Dosen</strong>
		<a href="{{url('Dosen_Matakuliah/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i>Jadwal Dosen</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Dosen</th>
				<th>NIP</th>
				<th>Nama Matakuliah</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuaDosen_Matakuliah as $Dosen_Matakuliah)
			<tr>
				<td>{{ $x++}}</td>
				<td>{{ $Dosen_Matakuliah->Dosen->nama or 'Nama Kosong' }}</td>
				<td>{{ $Dosen_Matakuliah->Dosen->nip or 'NIP Kosong' }}</td>
				<td>{{ $Dosen_Matakuliah->Matakuliah->title or 'Matakuliah Kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('Dosen_Matakuliah/edit/'.$Dosen_Matakuliah->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('Dosen_Matakuliah/lihat/'.$Dosen_Matakuliah->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('Dosen_Matakuliah/hapus/'.$Dosen_Matakuliah->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop

<!-- 
$dosen->nama = $input->nama;
    	$dosen->nip = $input->nip;
    	$dosen->alamat = $input->alamat;
    	$dosen->pengguna_id = $input->pengguna_id; -->