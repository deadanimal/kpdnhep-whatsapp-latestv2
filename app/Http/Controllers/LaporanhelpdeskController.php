<?php

namespace App\Http\Controllers;

use App\Models\Laporanhelpdesk;
use Illuminate\Http\Request;

class LaporanhelpdeskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $laporanhelpdesks = Laporanhelpdesk::all();
        return view('laporanhelpdesk', [
            'laporanhelpdesks' => $laporanhelpdesks,
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
        $laporanhelpdesk = new laporanhelpdesk;

        $laporanhelpdesk->isu = $request->isu;
        $laporanhelpdesk->tahap = $request->tahap;
        $laporanhelpdesk->keterangan = $request->keterangan;

        if ($laporanhelpdesk->isu == null) {
            die("Medan isu perlu diisi");
        } elseif ($laporanhelpdesk->tahap == null) {
            die("Medan tahap perlu diisi");
        } elseif ($laporanhelpdesk->keterangan == null) {
            die("Medan keterangan perlu diisi");
        }

        if ($request->file()) {
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');

            $saiz = $request->file('file')->getSize();
            $saiz = $saiz / 1000;

            $laporanhelpdesk->saiz = $saiz;
            $laporanhelpdesk->nama_fail = time() . '_' . $request->file->getClientOriginalName();
            $laporanhelpdesk->laluan_fail = '/laporanhelpdesk/' . $filePath;
            $laporanhelpdesk->save();
        }
        $laporanhelpdesk->save();
        return redirect('/laporanhelpdesk/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporanhelpdesk  $laporanhelpdesk
     * @return \Illuminate\Http\Response
     */
    public function show(Laporanhelpdesk $laporanhelpdesk)
    {
        //
        return view('laporanhelpdesk', [
            'laporanhelpdesk' => $laporanhelpdesk
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporanhelpdesk  $laporanhelpdesk
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporanhelpdesk $laporanhelpdesk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laporanhelpdesk  $laporanhelpdesk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporanhelpdesk $laporanhelpdesk)
    {
        //
        $laporanhelpdesk->isu = $request->isu;
        $laporanhelpdesk->tahap = $request->tahap;
        $laporanhelpdesk->keterangan = $request->keterangan;

        if ($laporanhelpdesk->isu == null) {
            die("Medan isu perlu diisi");
        } elseif ($laporanhelpdesk->tahap == null) {
            die("Medan tahap perlu diisi");
        } elseif ($laporanhelpdesk->keterangan == null) {
            die("Medan keterangan perlu diisi");
        }

        if ($request->file()) {
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');

            $saiz = $request->file('file')->getSize();
            $saiz = $saiz / 1000;

            $laporanhelpdesk->saiz = $saiz;
            $laporanhelpdesk->nama_fail = time() . '_' . $request->file->getClientOriginalName();
            $laporanhelpdesk->laluan_fail = '/laporanhelpdesk/' . $filePath;
        }
        $laporanhelpdesk->save();
        return redirect('/laporanhelpdesk/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporanhelpdesk  $laporanhelpdesk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporanhelpdesk $laporanhelpdesk)
    {
        //
    }

    public function simpan_muatnaik(Request $request)
    {
        $laporanhelpdesk = new laporanhelpdesk;

        $laporanhelpdesk->isu = $request->isu;
        $laporanhelpdesk->tahap = $request->tahap;
        $laporanhelpdesk->keterangan = $request->keterangan;

        if ($laporanhelpdesk->isu == null) {
            die("Medan isu perlu diisi");
        } elseif ($laporanhelpdesk->tahap == null) {
            die("Medan tahap perlu diisi");
        } elseif ($laporanhelpdesk->keterangan == null) {
            die("Medan keterangan perlu diisi");
        }

        if ($request->file()) {
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');

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

            $laporanhelpdesk->saiz = $saiz;
            $laporanhelpdesk->nama_fail = time() . '_' . $request->file->getClientOriginalName();
            $laporanhelpdesk->laluan_fail = '/laporanhelpdesk/' . $filePath;
            $laporanhelpdesk->save();
        }
        $laporanhelpdesk->save();
        return redirect('/laporanhelpdesk/');
    }

    public function kemaskini(Request $request, $id)
    {
        $status = $request->status;
        $selectedlaporan = Laporanhelpdesk::find($id);

        $selectedlaporan->status = $status;
        if ($status == null) {
            die("Sila masukkan maklumat yang kosong");
        }
        $selectedlaporan->save();

        return redirect('laporanhelpdesk');
    }
}
