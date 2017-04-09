@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('Dosen_Matakuliah') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Dosen Matakuliah</strong>		
	</div>
	<table class="table">
		<tr>
			<td>Dosen ID</td>
			<td>:</td>
			<td>{{ $Dosen_Matakuliah->Dosen->nama }}</td>
		</tr>	
		<tr>
			<td>Matakuliah ID</td>
			<td>:</td>
			<td>{{ $Dosen_Matakuliah->Matakuliah->title}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$Dosen_Matakuliah->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$Dosen_Matakuliah->updated_at}}</td>
		</tr>
	</table>
</div>
@stop