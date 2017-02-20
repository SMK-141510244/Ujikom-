<?php

namespace App\Http\Controllers;

use Request;
use App\Tunjangan_pegawai;
use App\Pegawai;
use App\Jabatan;
use App\Golongan;
use App\Tunjangans;
use App\Penggajian;


class PenggajianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $gajian = Penggajian::all();
        return view('penggajian.index', compact('gajian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tunjangan= Tunjangans::all();
         $tunjanganpeg = Tunjangan_pegawai::all();
         $pegawai = Pegawai::all();
         $jabatan = Jabatan::all();
         $golongan = Golongan::all();

        return view('penggajian.create', compact('golongan', 'jabatan', 'pegawai','tunjanganpeg', 'tunjangan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $gajian = Request::all();
        Penggajian::create($gajian);
        return redirect('PENGGAJIAN');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
