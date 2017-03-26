@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('Ruangan') }}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data Ruangan</strong>		
	</div>
	<table class="table">
		<tr>
			<td>Nama Ruangan</td>
			<td>:</td>
			<td>{{ $Ruangan->title }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$Ruangan->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$Ruangan->updated_at}}</td>
		</tr>
	</table>
</div>
@stop
