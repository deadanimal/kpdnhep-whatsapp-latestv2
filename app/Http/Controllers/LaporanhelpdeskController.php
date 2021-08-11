<?php

namespace App\Http\Controllers;

use App\Models\Laporanhelpdesk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Mail;
use App\Mail\Helpdesk;

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

        $rules = [
            'isu' => 'required',
            'tahap' => 'required',
            'keterangan' => 'required'
        ];

        $messages = [
            'isu.required' => 'Sila masukkan isu yang dilaporkan',
            'tahap.rquired' => 'Sila pilih tahap isu tersebut',
            'keterangan.required' => 'Sila berikan keterangan mengenai isu tersebut'
        ];

        Validator::make($request->input(), $rules, $messages)->validate();

        $laporanhelpdesk->isu = $request->isu;
        $laporanhelpdesk->tahap = $request->tahap;
        $laporanhelpdesk->keterangan = $request->keterangan;
        $laporanhelpdesk->keterangan_vendor = "Baru";

        if ($request->file()) {
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $filePath = Storage::putFile('najhan', $request->file('file'), 'public');#$filePath = $request->file('file')->storeAs('najhan', $fileName, 'public');

            $saiz = $request->file('file')->getSize();
            $saiz = $saiz / 1000;

            $laporanhelpdesk->saiz = $saiz;
            $laporanhelpdesk->nama_fail = time() . '_' . $request->file->getClientOriginalName();
            $laporanhelpdesk->laluan_fail = '/laporanhelpdesk/' . $filePath;
            $laporanhelpdesk->save();
        }
        if ($laporanhelpdesk->laluan_fail == null) {
            die("Mana bukti?");
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
        $laporanhelpdesk->keterangan_vendor = "Baru";

        if ($laporanhelpdesk->isu == null) {
            die("Medan isu perlu diisi");
        } elseif ($laporanhelpdesk->tahap == null) {
            die("Medan tahap perlu diisi");
        } elseif ($laporanhelpdesk->keterangan == null) {
            die("Medan keterangan perlu diisi");
        }

        if ($request->file()) {
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $filePath = Storage::putFile('najhan', $request->file('file'), 'public');#$filePath = $request->file('file')->najhan', $fileName, 'public');

            $saiz = $request->file('file')->getSize();
            $saiz = $saiz / 1000;

            $laporanhelpdesk->saiz = $saiz;
            $laporanhelpdesk->nama_fail = time() . '_' . $request->file->getClientOriginalName();
            $laporanhelpdesk->laluan_fail = '/laporanhelpdesk/' . $filePath;
        }
        if ($laporanhelpdesk->laluan_fail == null) {
            die("Mana bukti?");
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
        $extension = $request->file('dokumen')->getClientOriginalExtension();
        if ($extension != "pdf") {
            return redirect('/laporanhelpdesk')->withErrors('Sila masukkan lampiran berbentuk pdf.');
        }

        $laporanhelpdesk = new laporanhelpdesk;

        $laporanhelpdesk->isu = $request->isu;
        $laporanhelpdesk->tahap = $request->tahap;
        $laporanhelpdesk->keterangan = $request->keterangan;
        $laporanhelpdesk->status = "Baru";
        $laporanhelpdesk->keterangan_vendor = $request->keterangan_vendor;
        $laporanhelpdesk->save();

        if ($request->file()) {
            $fileName = time() . '_' . $request->file('dokumen')->getClientOriginalName();
            $filePath = Storage::putFile('najhan', $request->file('dokumen'), 'public');#$filePath = $request->file('dokumen')->storeAs('najhan', $fileName, 'public');
            $extension = $request->file('dokumen')->getClientOriginalExtension();

            if ($extension == "pdf") {
                $saiz = $request->file('dokumen')->getSize();
                if($saiz) {
                    $saiz = $saiz / 1000;
                } else {
                    $saiz = rand(500,1999);
                }
                if ($saiz > 2000) {
                    echo "<script>alert('Saiz lampiran tidak boleh melebihi 2mb.');</script>";
                } else {
                    $laporanhelpdesk->bentuk = $extension;
                    $laporanhelpdesk->saiz = $saiz;
                    $laporanhelpdesk->nama_fail = time() . '_' . $request->file('dokumen')->getClientOriginalName();
                    $laporanhelpdesk->laluan_fail = $filePath;
                    $laporanhelpdesk->save();
                
                    // $rules = [
                    //     'isu' => 'required',
                    //     'tahap' => 'required',
                    //     'keterangan' => 'required',
                    // ];

                    // $messages = [
                    //     'isu.required' => 'Sila masukkan isu yang dilaporkan',
                    //     'tahap.rquired' => 'Sila pilih tahap isu tersebut',
                    //     'keterangan.required' => 'Sila berikan keterangan mengenai isu tersebut',
                    // ];

                    // Validator::make($request->input(), $rules, $messages)->validate();
                    
                    $laporanhelpdesk->save();
    
                    $recipient = ["harizhasani@pipeline-network.com"];
                    Mail::to($recipient)->send(new Helpdesk());
                    return redirect('/laporanhelpdesk/');
                }
            } else {
                echo "<script>alert('Sila masukkan lampiran berbentuk pdf.');</script>";
            }
        } else {
            echo "<script>alert('Sila masukkan lampiran berbentuk pdf dan saiz tidak melebihi 2mb.');</script>";
        }
        return redirect('/laporanhelpdesk/');
    }

    public function kemaskini(Request $request, $id)
    {
        $status = $request->status;
        $keterangan_vendor = $request->keterangan_vendor;
        $selectedlaporan = Laporanhelpdesk::find($id);
// dd($id);
        $selectedlaporan->status = $status;
        $selectedlaporan->keterangan_vendor = $keterangan_vendor;
        $rules = [
            'status' => 'required',
            'keterangan_vendor' => 'required',
        ];

        $messages = [
            'status.required' => 'Sila isi ruang tersebut',
            'keterangan_vendor.required' => 'Kemaskini gagal. Sila isi maklumat tersebut.',
        ];

        Validator::make($request->input(), $rules, $messages)->validate();
        $selectedlaporan->save();

        return redirect('laporanhelpdesk');
    }
}
