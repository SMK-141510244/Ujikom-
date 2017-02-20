<?php

namespace App\Http\Controllers;

use Request;
use App\Kategori_lembur;
use App\Lembur_pegawai;
use App\Pegawai;



class Lembur_PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lembur = Lembur_pegawai::all();
        return view('lembur_pegawai.index', compact('lembur'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kategori = Kategori_lembur::all();
        $pegawai = Pegawai::all();
        return view('lembur_pegawai.create', compact('pegawai' , 'kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lembur = Request::all();
        lembur_pegawai::create($lembur);
        return redirect('LEMBUR');
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
         $kategori = Kategori_lembur::all();
         $pegawai = Pegawai::all();
        $lembur = Lembur_pegawai::find($id);
        return view('lembur_pegawai.edit', compact('lembur','pegawai', 'kategori'));
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
         $lemburUpdate = Request::all();
        $lembur = Lembur_pegawai::find($id);
        $lembur->update($lemburUpdate);
        return redirect('LEMBUR');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lembur_pegawai::find($id)->delete();
        return redirect('LEMBUR');
    }
}
