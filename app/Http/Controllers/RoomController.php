<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Mesej;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
        $response->json();
        $rooms = Room::all();

        return view('room', [
            'rooms' => $rooms,
            'data' => $response
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
        $rooms = Room::where([
            ['tarikh', '=', $request->tarikh]
        ])->orWhere([
            ['notelefon', '=', $request->notelefon]
        ])->orWhere([
            ['pegawai', '=', $request->pegawai]
        ])->orWhere([
            ['noaduan', '=', $request->noaduan]
        ])->orWhere([
            ['namapengadu', '=', $request->namapengadu]
        ])->get();

        return view('room', [
            'rooms' => $rooms,
        ]);
    }
}
