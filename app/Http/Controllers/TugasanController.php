<?php

namespace App\Http\Controllers;

use App\Models\Tugasan;
use App\Models\Room;
use App\Models\Mesej;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TugasanController extends Controller
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
        $response = Http::get($url);
        $biliks = $response->json();
        $biliks = json_encode($biliks);
        $biliks = json_decode($biliks, TRUE)['rooms'];
        // dd($response['rooms']);
        $rooms = Room::all();

        return view('tugasans', [
            'rooms' => $rooms,
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
     * @param  \App\Models\Tugasan  $tugasan
     * @return \Illuminate\Http\Response
     */
    public function show(Tugasan $tugasan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tugasan  $tugasan
     * @return \Illuminate\Http\Response
     */
    public function edit(Tugasan $tugasan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tugasan  $tugasan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tugasan $tugasan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tugasan  $tugasan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tugasan $tugasan)
    {
        //
    }
    public function hantar($id)
    {
        $url = "https://murai.io/api/whatsapp/numbers/601154212526/rooms/$id/messages";
        $response = Http::get($url);
        $mesejs = $response->json();
        dd($mesejs);
        $try = json_encode($mesejs);
        $mesejs = json_decode($try, TRUE)['messages'];
        $room = json_decode($try, TRUE)['room'];

        return view('mesej', [
            'mesejs' => $mesejs,
            'room' => $room
        ]);
    }

    public function hantarrr(Request $request, $id)
    {
        $url = "https://murai.io/api/whatsapp/numbers/601154212526/rooms/$id/messages";
    
        $hantar = $request->hantar;
        $send = Http::post($url, [
            "message_text" => $hantar,
        ]);

        if($send->successful()) {
            $url = '/hantar/{{$id}}';
            return redirect($url);
        }

        // $url = "https://murai.io/api/whatsapp/numbers/601154212526/rooms/$id/messages";
        // $response = Http::get($url);
        // $mesejs = $response->json();
        // $try = json_encode($mesejs);
        // $mesejs = json_decode($try, TRUE)['messages'];
        // $rooms = json_decode($try, TRUE)['room'];

        // return view('mesej', [
        //     'mesejs' => $mesejs,
        //     'rooms' => $rooms
        // ]);
    }
}
