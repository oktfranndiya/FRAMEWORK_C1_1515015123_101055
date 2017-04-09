@extends('master')
@section('container')

<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{ url('Dosen_Matakuliah') }}"><i class="fa text-default fa-cheron-left"></i></a> Perbarui Data Jadwal Dosen</strong>
	</div>
	{!! Form::model($Dosen_Matakuliah,['url'=>'Dosen_Matakuliah/edit/'.$Dosen_Matakuliah->id,'class'=>'form-horizontal']) !!}
	@include('Dosen_Matakuliah.form')
	<div style="width: 100%; text-align: right;">
		<button class="btn btn-info"><i class="fa fa-save"></i>Perbaharui</button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
	</div>
	{!! Form::close() !!}
</div>
@stop