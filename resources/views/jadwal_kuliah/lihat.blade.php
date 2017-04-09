@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('Jadwal_Kuliah') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Jadwal Mahasiswa</strong>		
	</div>
	<table class="table">
		<tr>
			<td>Nama Mahasiswa</td>
			<td>:</td>
			<td>{{ $Jadwal_Kuliah->Mahasiswa->nama }}</td>
		</tr>
		<tr>
			<td>NIM Mahasiswa</td>
			<td>:</td>
			<td>{{ $Jadwal_Kuliah->Mahasiswa->nim }}</td>
		</tr>
		<tr>
			<td>Nama Dosen</td>
			<td>:</td>
			<td>{{ $Jadwal_Kuliah->dosen_matakuliah->nip }}</td>
		</tr>
		<tr>
			<td>NIP Dosen</td>
			<td>:</td>
			<td>{{ $Jadwal_Kuliah->dosen_matakuliah->dosen->nip }}</td>
		</tr>
		<tr>
			<td>Nama Matakuliah</td>
			<td>:</td>
			<td>{{ $Jadwal_Kuliah->dosen_matakuliah->matakuliah->title }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$Jadwal_Kuliah->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$Jadwal_Kuliah->updated_at}}</td>
		</tr>
	</table>
</div>
@stop