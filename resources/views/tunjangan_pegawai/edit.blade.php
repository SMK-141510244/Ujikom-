@extends('layouts.app')
@section('content')

<div class="container">
	<h1> Update Data Tunjangan Pegawai</h1>
	{!! Form::model($tunjanganpeg, ['method' => 'PATCH', 'route' => ['TUNJANGANPEG.update', $tunjanganpeg->id]]) !!}
	<input type="hidden" class="form-control" value="{{ $tunjanganpeg->id }}">
	<hr>

	<div class="form-group">
		{!! Form::label('Kode', 'Kode Tunjangan:') !!}
	<select class="form-control" name="Kode_tunjangan_id">
		@foreach($tunjangan as $tunjang)
			<option value="{{ $tunjang->id }}"> {{ $tunjang->Kode_tunjangan }}</option>
		@endforeach
	</select> 
	</div>

	<div>
	{!! Form::label('Nama', 'Nama Pegawai:') !!}
	<select class="form-control" name="pegawai_id">
		@foreach($pegawai as $peg)
			<option value="{{ $peg->id }}"> {{ $peg->User->name }}</option>
		@endforeach
	</select>
	</div>
	<div class="form-group">
		{!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
	</div>
</div>
@stop


