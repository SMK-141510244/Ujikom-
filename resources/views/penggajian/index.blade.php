@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-0 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Data Penggajian </h1></div>
                <div class="panel-body">

	
	<a href="{{ url('/PENGGAJIAN/create') }}" class="btn btn-success"> Tambah Data Penggajian</a>
	<hr>

	<table class="table table-striped table-bordered table-hover">
		<thead>
		<tr class="bg-info">
			<th> No </th>
			<th> Nama Pegawai </th>
			<th> Jabatan </th>
			<th> Golongan </th>
			<th> Jumlah Jam Lembur</th>
			<th> Jumlah Uang Lembur</th>
			<th> Gaji Pokok</th>
			<th> Total Gaji</th>
			<th> Tanggal Pengambilan</th>
			<th> Status Pengambilan </th>
			<th> Petugas Penggambilan</th>
			<th> Tunjangan</th>
			<th colspan="2"><center> Action </center></th>
		</tr>
		</thead>
		
		<tbody>
			<?php
				$No = 1; 
			?>
			@foreach($gajian as $gaji)
			<tr>
				<td> {{ $No++ }} </td>
				<td> {{ $gajian->Tunjangan_pegawai->Pegawai->User->name }} </td>
			<td> {{ $gajian->Tunjangan_pegawai->Pegawai->Jabatan->Nama_jabatan}} </td>
			<td> {{ $gajian->Tunjangan_pegawai->Pegawai->Golongan->Nama_golongan}} </td>
		<td> {{ $gajian->Tunjangan_pegawai->Pegawai->Lembur_pegawai->Jumlah_jam}} </td>
		<td> {{ $gajian->Tunjangan_pegawai->Pegawai->Lembur_pegawai->Besaran_uang}}</td>
		<td> {{ $gajian->Tunjangan_pegawai->Tunjangans->Jabatan->Besaran_uang }} </td>
				<td> {{ $gajian->Total_gaji}}</td>
				<td> {{ $gajian->Tanggal_pengambilan}}</td>
				<td> {{ $gajian->Status_pengambilan}}</td>
				<td> {{ $gajian->Petugas_penerima}}</td>
				<td> {{ $gajian->Tunjangan_pegawai->Tunjangans->Besaran_uang}}</td>
				
				
				 <a href="{{ url('PENGGAJIAN', $gajian->id) }}" ></a>
				<td> <a href="{{ route('PENGGAJIAN.edit', $gajian->id) }}" class="btn btn-warning">Ubah</a></td>
				<td>
					{!! Form::open(['method' => 'DELETE', 'route' => ['PENGGAJIAN.destroy', $gajian->id]]) !!}
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