@extends('layouts.app')
@section('content')

<div class="container">
	<h1> Tambah Data Jabatan </h1>
	{!! Form::open(['url' => 'JABATAN']) !!}
	<hr>

	<div class="form-group">
		{!! Form::label('Kode', 'Kode Jabatan:') !!}
		<input type="text" name="Kode_jabatan" class="form-control" required> 
	</div>
	<div class="form-group">
		{!! Form::label('Nama', 'Nama Jabatan:') !!}
		<input type="text" name="Nama_jabatan" class="form-control" required> 
	</div>
	<div class="form-group">
		{!! Form::label('Besar uang', 'Besaran Uang:') !!}
		<input type="text" name="Besaran_uang" class="form-control" required> 
	</div>
	<div class="form-group">
		{!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
	</div>
</div>

@stop