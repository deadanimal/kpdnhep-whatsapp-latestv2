<?php

namespace App\Http\Controllers;

use App\Models\Laporanbulanan;
use Illuminate\Http\Request;

class LaporanbulananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $laporanbulanans = Laporanbulanan::all();
        return view('laporanbulanan',[
            'laporanbulanans'=>$laporanbulanans,
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
        $laporanbulanan = new laporanbulanan;

        $laporanbulanan->tahun = $request->tahun;

        $laporanbulanan->save();
        return redirect('/laporanbulanan/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporanbulanan  $laporanbulanan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporanbulanan $laporanbulanan)
    {
        //
        return view('laporanbulanan',[
            'laporanbulanan'=>$laporanbulanan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporanbulanan  $laporanbulanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporanbulanan $laporanbulanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laporanbulanan  $laporanbulanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporanbulanan $laporanbulanan)
    {
        //
        $laporanbulanan->tahun = $request->tahun;

        $laporanbulanan->save();
        return redirect('/laporanbulanan/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporanbulanan  $laporanbulanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporanbulanan $laporanbulanan)
    {
        //
    }

    public function showstat(Request $request)
    {
        //
        $tahun = $request->tahun;
        $laporan_selected = Laporanbulanan::find("1");

        $laporan_selected->tahun = $tahun;
        $laporan_selected->save();

        return redirect('laporanbulanan');
    }

}
