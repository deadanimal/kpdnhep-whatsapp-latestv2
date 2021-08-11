<?php

namespace App\Http\Controllers;

use App\Models\Laporanpegawai;
use Illuminate\Http\Request;

class LaporanpegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $start = 1;
        $end = 2;
        return view('/laporanpegawai',[
            'start'=>$start,
            'end'=>$end
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporanpegawai  $laporanpegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Laporanpegawai $laporanpegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporanpegawai  $laporanpegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporanpegawai $laporanpegawai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laporanpegawai  $laporanpegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporanpegawai $laporanpegawai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporanpegawai  $laporanpegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporanpegawai $laporanpegawai)
    {
        //
    }

    public function hantaq(Request $request)
    {
        # code...
        $start = $request->start;
        $end = $request->end;

        return view('laporanpegawai', [
            'start'=>$start,
            'end'=>$end
        ]);

    }
}
