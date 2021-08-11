<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Mesej;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use phpDocumentor\Reflection\PseudoTypes\True_;

class RoomController extends Controller
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

        return view('room', [
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
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
        return view('room', [
            'room' => $room
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        //
    }
    public function hantar($id)
    {
        $mesejs = Mesej::all();
        $room_selected = Room::where("id", $id)->first();

        return view('mesej', [
            'mesejs' => $mesejs,
            'room_selected' => $room_selected,
        ]);
    }

    public function cari(Request $request)
    {
        $url = "https://murai.io/api/whatsapp/numbers/601154212526/rooms";
        $phone = $request->phone;
        $response = Http::post($url, [
            "phone" => $phone
        ]);

        $biliks = $response->json();
        $biliks = json_encode($biliks);
        $biliks = json_decode($biliks, TRUE)['rooms'];

        return view('room', [
            'biliks' => $biliks,
        ]);
    }

    public function aktif_bot($room_id)
    {
        $url = "https://murai.io/api/whatsapp/numbers/601154212526/rooms/".$room_id."/activate";
        $response = Http::get($url);

        if ($response->successful()) {
            return redirect('/room');
        } else {
            return redirect('/room')->withErrors('Tak dapat');
        }  
    }

    public function add_officer($room_id, Request $request)
    {
        $url = "https://murai.io/api/whatsapp/numbers/601154212526/rooms/".$room_id."/officer";
        $response = Http::post($url, [
            "officer_name"=>'Najhan'#$request->officer_name
        ]);

        if ($response->successful()) {
            return redirect('/aktif');
        } else {
            return redirect('/aktif')->withErrors('Tak dapat');
        }  
    }    
}
