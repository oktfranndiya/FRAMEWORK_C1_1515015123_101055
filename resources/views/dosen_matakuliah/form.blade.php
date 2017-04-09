<div class="form-group">
	<label class="col-sm-2 control-label" id="dosen_id">Nama Dosen</label>
	<div class="col-sm-10">
		{!! Form::select('dosen_id',$Dosen->listDosenDanNip(),null,['class'=>'form-control','id'=>'dosen_id','placeholder'=>"Dosen"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="matakuliah_id"> Matakuliah </label>
	<div class="col-sm-10">
		{!! Form::select('matakuliah_id' ,$Matakuliah->lists('title','id'),null,['class'=>'form-control','id'=>'matakuliah_id','placeholder'=>"Matakuliah"]) !!}
	</div>
</div>
