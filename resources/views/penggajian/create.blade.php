@extends('layouts.app')
@section('content')

<div class="container">
	<h1> Tambah Data Penggajian </h1>
	{!! Form::open(['url' => 'PENGGAJIAN']) !!}
	<hr>

	<div class="form-group">
		{!! Form::label('Kode', 'Kode Tunjangan:') !!}
	<select class="form-control" name="tunjangan_pegawai_id">
		@foreach($tunjangan as $tunjang)
			<option value="{{ $tunjang->id }}"> {{ $tunjang->Kode_tunjangan }}</option>
		@endforeach
	</select> 
	</div>

	{!! Form::label('Nama', 'Nama Pegawai:') !!}
	<select class="form-control" name="pegawai_id">
		@foreach($pegawai as $peg)
			<option value="{{ $peg->id }}"> {{ $peg->User->name }}</option>
		@endforeach
	</select>

	
	
       <label for="Status_pengambilan" class="col-md-0 control-label">Status pengambilan</label>
                                <select class="form-control" name="Status_pengambilan">
                                    <option>Sudah</option>
                                    <option>Belum</option>

                                </select>

                                @if ($errors->has('Status_pengambilan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Status_pengambilan') }}</strong>
                                    </span>
                                @endif
                           <br>
	<div class="form-group">
		{!! Form::submit('Simpan', ['class' => 'btn btn-danger']) !!}
	</div>
</div>

@stop