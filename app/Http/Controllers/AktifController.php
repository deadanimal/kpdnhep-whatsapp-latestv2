<?php

namespace App\Http\Controllers;

use App\Models\Aktif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AktifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $url = "https://murai.io/api/whatsapp/numbers/601154212526/rooms";
        $response = Http::get($url);//
        $biliks = $response->json()['rooms'];
        // $biliks = json_encode($biliks);
        $biliks = json_encode($biliks);
        $biliks = json_decode($biliks, TRUE);
        // dd($biliks);
        // foreach($biliks as $bilik) {
        //     $bilik->pegawai = 'asd';
        // }

        // dd($response['rooms']);

        return view('aktif', [
            'biliks' => $biliks
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
     * @param  \App\Models\Aktif  $aktif
     * @return \Illuminate\Http\Response
     */
    public function show(Aktif $aktif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aktif  $aktif
     * @return \Illuminate\Http\Response
     */
    public function edit(Aktif $aktif)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aktif  $aktif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aktif $aktif)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aktif  $aktif
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aktif $aktif)
    {
        //
    }

    public function hantaraktif($id)
    {
        $url = "https://murai.io/api/whatsapp/numbers/601154212526/rooms/$id/messages";
        $response = Http::get($url);
        $mesejs = $response->json();
        $try = json_encode($mesejs);
        $mesejs = json_decode($try, TRUE)['messages'];
        $rooms = json_decode($try, TRUE)['room'];

        return view('mesejaktif', [
            'mesejs' => $mesejs,
            'rooms' => $rooms
        ]);
    }

    public function cariaktif(Request $request)
    {
        $url = "https://murai.io/api/whatsapp/numbers/601154212526/rooms";
        $phone = $request->phone;
        $name = $request->name;
        $officer_name = $request->officer_name;
        // dd($name, $phone);
        if ( $phone != null && $name == null && $officer_name == null) {
            $response = Http::post($url, [
                "phone" => $phone,
            ]);
        } else if($phone == null && $name != null && $officer_name == null ) {
            $response = Http::post($url, [
                "name" => $name
            ]);
        }else if($phone == null && $name == null && $officer_name != null ) {
            $response = Http::post($url, [
                "officer_name" => $officer_name
            ]);
        }else{
            return redirect('/aktif');
        }
        $biliks = $response->json();
        $biliks = json_encode($biliks);
        $biliks = json_decode($biliks, TRUE)['rooms'];

        return view('aktif', [
            'biliks' => $biliks,
        ]);
    }
}
