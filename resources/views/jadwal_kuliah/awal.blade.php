@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Jadwal Mahasiswa</strong>
		<a href="{{url('Jadwal_Kuliah/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> Jadwal Mahasiswa</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Mahasiswa</th>
				<th>Nim Mahasiswa</th>
				<th>Nama Matakuliah</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuaJadwal_Kuliah as $jadwal_kuliah)
			<tr>
				<td>{{ $x++}}</td>
				
				<td>{{ $jadwal_kuliah->Mahasiswa->nama or 'Nama Kosong' }}</td>
				<td>{{ $jadwal_kuliah->Mahasiswa->nim or 'NIM Kosong' }}</td>
				<td>{{ $jadwal_kuliah->Dosen_Matakuliah->Matakuliah->title or 'MataKuliah kosong'}}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('Jadwal_Kuliah/edit/'.$jadwal_kuliah->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('Jadwal_Kuliah/lihat/'.$jadwal_kuliah->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('Jadwal_Kuliah/hapus/'.$jadwal_kuliah->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop