@extends('master')
@section('container')
<div class="panel pane-primary">
	<div class="panel-headling">
		<strong><a href="{{ url('pengguna') }}"><i style="color:white;" class="fa text-dafault fa-chevron-left"></i></a>Tambah Data Pengguna</strong>
	</div>
	{!! Form::open(['url'=>'pengguna/simpan', 'class'=>'form-horizontal']) !!}
	@include('pengguna.form')
	<div style="width: 100%;text-align: right;">
		<button class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
		<button class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
	</div>
	{!! Form::close() !!}
</div>
@stop
