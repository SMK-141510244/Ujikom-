@extends('layouts.app')
@section('content')

<div class="container">
	<h1> Update Data Tunjangan </h1>
	{!! Form::model($tunjangan, ['method' => 'PATCH', 'route' => ['TUNJANGAN.update', $tunjangan->id]]) !!}
	<input type="hidden" class="form-control" value="{{ $tunjangan->id }}">
	<hr>

	<div class="form-group">
		{!! Form::label('Kode', 'Kode Tunjangan:') !!}
		<input type="text" name="Kode_tunjangan" class="form-control" value="{{ $tunjangan->Kode_tunjangan }}" required> 
	</div>

	{!! Form::label('Jabatan', 'Jabatan:') !!}
	<select class="form-control" name="jabatan_id">
		@foreach($jabatan as $jab)
			<option value="{{ $jab->id }}"> {{ $jab->Nama_jabatan }}</option>
		@endforeach
	</select>
	{!! Form::label('Golongan', 'Golongan:') !!}
	<select class="form-control" name="golongan_id">
		@foreach($golongan as $gol)
			<option value="{{ $gol->id }}"> {{ $gol->Nama_golongan }}</option>
		@endforeach
	</select>
	<div class="form-group">
		{!! Form::label('Status', 'Status Perkawinan:') !!}
		<input type="text" name="Status" class="form-control" value="{{ $tunjangan->Status }}" required> 
	</div>
	<div class="form-group">
		{!! Form::label('Jumlah anak', 'Jumlah Anak:') !!}
		<input type="text" name="Jumlah_anak" class="form-control" value="{{ $tunjangan->Jumlah_anak }}" required> 
	</div>
	<div class="form-group">
		{!! Form::label('Besaran', 'Besaran Uang:') !!}
		<input type="text" name="Besaran_uang" class="form-control" value="{{ $tunjangan->Besaran_uang }}" required> 
	</div>

	<div class="form-group">
		{!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
	</div>
	{!! Form::close() !!}
</div>

@stop