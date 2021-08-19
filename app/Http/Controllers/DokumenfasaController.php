<?php

namespace App\Http\Controllers;

use App\Models\Dokumenfasa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DokumenfasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dokumenfasas = Dokumenfasa::all();
        return view('dokumenfasa', [
            'dokumenfasas' => $dokumenfasas,
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
        $request->validate(
            [
                'dokumen' => 'required|mimes:jpg,jpeg,pdf|max:2048'
            ],
            [
                'dokumen.required' => 'Sila penuhkan butiran tersebut',
                'dokumen.mimes' => 'Lampiran hendaklah dalam bentuk jpg, jpeg, atau pdf'
            ]
        );

        $dokumenfasa = new Dokumenfasa;

        $dokumenfasa->nama_dok = $request->nama_dok;
        $dokumenfasa->fasa = $request->fasa;
        $dokumenfasa->catatan = $request->catatan;

        $rules = [
            'nama_dok' => 'required',
            'fasa' => 'required',
            'catatan' => 'required',
        ];

        $messages = [
            'nama_dok.required' => 'Sila isi ruang nama dokumen tersebut',
            'catatan.required' => 'Sila berikan catatan untuk dokumen tersebut',
        ];

        Validator::make($request->input(), $rules, $messages)->validate();

        if ($request->file()) {
            $fileName = time() . '_' . $request->file('dokumen')->getClientOriginalName();
            $filePath = Storage::putFile('najhan', $request->file('dokumen'), 'public');#$request->file('file')->storeAs('najhan', $fileName, 'public');
            $extension = $request->file('dokumen')->getClientOriginalExtension();
            
            if ($extension == "pdf") {
                $saiz = $request->file('dokumen')->getSize();
                if($saiz) {
                    $saiz = $saiz / 1000;
                } else {
                    $saiz = rand(500,2000);
                }
                if ($saiz > 2000) {
                    echo "<script>alert('Saiz lampiran tidak boleh melebihi 2mb.');</script>";
                } else {
                    $dokumenfasa->saiz = $request->file('dokumen')->getSize();
                    $dokumenfasa->nama_fail = time() . '_' . $request->file('dokumen')->getClientOriginalName();
                    $dokumenfasa->laluan_fail = $filePath;
                    $dokumenfasa->save();
                }
            } else {
                echo "<script>alert('Sila masukkan lampiran berbentuk pdf.');</script>";
            }
        } else {
            echo "<script>alert('Sila muatnaik dokumen berbentuk pdf dan saiz tidak melebihi 2mb.');</script>";
        }
        return redirect('/dokumenfasa/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dokumenfasa  $dokumenfasa
     * @return \Illuminate\Http\Response
     */
    public function show(Dokumenfasa $dokumenfasa)
    {
        //
        return view('dokumenfasa', [
            'dokumenfasa' => $dokumenfasa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dokumenfasa  $dokumenfasa
     * @return \Illuminate\Http\Response
     */
    public function edit(Dokumenfasa $dokumenfasa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dokumenfasa  $dokumenfasa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dokumenfasa $dokumenfasa)
    {
        //
        $dokumenfasa->nama_dok = $request->nama_dok;
        $dokumenfasa->fasa = $request->fasa;

        if ($dokumenfasa->nama_dok == null) {
            die("Sila masukkan maklumat yang kosong");
        } elseif ($dokumenfasa->fasa == null) {
            die("Sila masukkan maklumat yang kosong");
        }

        if ($request->file()) {
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $filePath = Storage::putFile('najhan', $request->file('file'), 'public');#$filePath = $request->file('file')->storeAs('najhan', $fileName, 'public');

            $extension = $request->file('file')->extension();
            $saiz = $request->file('file')->getSize();
            $saiz = $saiz / 1000;
            // dd($extension);
            if ($extension != "pdf") {
                die("Fail hendaklah dalam bentuk pdf");
            }

            if ($saiz > 2000) {
                die("Fail tidak boleh melebihi 2mb");
            }

            $dokumenfasa->saiz = $request->file('file')->getSize();
            $dokumenfasa->nama_fail = $request->file->getClientOriginalName();
            $dokumenfasa->laluan_fail = '/dokumenfasa/' . $filePath;
            $dokumenfasa->save();
        }
        $dokumenfasa->save();
        return redirect('/dokumenfasa/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dokumenfasa  $dokumenfasa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dokumenfasa $dokumenfasa)
    {
        //
    }
}
