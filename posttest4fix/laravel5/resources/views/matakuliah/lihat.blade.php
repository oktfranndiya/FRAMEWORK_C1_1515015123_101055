@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('Matakuliah') }}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data Matakuliah</strong>		
	</div>
	<table class="table">
		<tr>
			<td>Matakuliah</td>
			<td>:</td>
			<td>{{ $Matakuliah->title }}</td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td>:</td>
			<td>{{ $Matakuliah->keterangan }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{ $Matakuliah->created_at }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{ $Matakuliah->updated_at }}</td>
		</tr>
	</table>
</div>
@stop
