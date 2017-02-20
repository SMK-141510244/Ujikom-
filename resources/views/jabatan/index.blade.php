@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-0 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><h1> Data Jabatan </h1></div>
                <div class="panel-body">

	
	<a href="{{ url('/JABATAN/create') }}" class="btn btn-success"> Tambah Data Jabatan </a>
	<hr>

	<table class="table table-striped table-bordered table-hover">
		<thead>
		<tr class="bg-info">
			<th> No </th>
			<th> Kode Jabatan </th>
			<th> Nama Jabatan </th>
			<th> Besaran Uang </th>
			<th colspan="2"><center> Action </center></th>
		</tr>
		</thead>
			
		<tbody>
			<?php
				$No = 1; 
			?>
			@foreach($jabatan as $jab)
			<tr>
				<td> {{ $No++ }} </td>
				<td> {{ $jab->Kode_jabatan }} </td>
				<td> {{ $jab->Nama_jabatan }} </td>
				<td> {{ $jab->Besaran_uang }} </td>
				 <a href="{{ url('JABATAN', $jab->id) }}" ></a>
				<td> <a href="{{ route('JABATAN.edit', $jab->id) }}" class="btn btn-warning">Ubah</a></td>
				<td>
					{!! Form::open(['method' => 'DELETE', 'route' => ['JABATAN.destroy', $jab->id]]) !!}
					{!! Form::submit('Hapus', ['class' => 'btn btn-danger']) !!}
					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>

	</table>
</div>
</div>
</div>
</div>
</div>
</div>
@stop