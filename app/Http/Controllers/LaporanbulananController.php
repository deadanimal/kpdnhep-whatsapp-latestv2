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


        return view('laporanbulanan', [
            'laporanbulanans' => $laporanbulanans,
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
        return view('laporanbulanan', [
            'laporanbulanan' => $laporanbulanan
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

    public function jana(Request $request)
    {
        $tahun = $request->query('tahun');
        if (empty($tahun)) {
            $tahun = 2021;
        } else {
            $lol = 'ada tahun ' . $tahun;
        }

        $laporanbulanans = [
            "agensi"=> [
                "nama"=> "KPDNHEP",
                "bulan"=> [1, 2, 3]
            ]   
            ];
        
        // ' array(
        //     array(
        //         'nama' => 'Aduan KPDNHEP',
        //         'bulan' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]
        //     )
            
        // );

        return view('laporanbulanan', compact('tahun', 'laporanbulanans'));
    }

    public function jananik(Request $request){
        $tahun = $request->tahun;
        if ($tahun == 2020){
            return redirect('/jana_2020');
        }
        else if($tahun == 2021){
            return redirect('/jana_2021');
        }
    }
}
