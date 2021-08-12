<?php

namespace App\Http\Controllers;

use App\Models\Mesej;
use App\Models\Room;
use Illuminate\Http\Request;

class MesejController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mesejs = Mesej::all();
        $id = 1;
        $room_selected = Room::where("id", $id)->first();

        dd($mesejs);

        return view('mesej',[
            'msj'=>$mesejs,
            'room_selected'=>$room_selected,
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
        $mesej = new mesej;

        $mesej->chat = $request->chat;

        $mesej->save();
        return redirect('/mesej/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mesej  $mesej
     * @return \Illuminate\Http\Response
     */
    public function show(Mesej $mesej)
    {
        //
        return view('mesej',[
            'mesej'=>$mesej
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mesej  $mesej
     * @return \Illuminate\Http\Response
     */
    public function edit(Mesej $mesej)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mesej  $mesej
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mesej $mesej)
    {
        //
        $mesej->chat = $request->chat;

        $mesej->save();
        return redirect('/mesej/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mesej  $mesej
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mesej $mesej)
    {
        //
    }

    public function terimakerja($id){
        // $user = $request->user();
        $user = "Najhan";
        $room_selected = Room::find($id);

        $room_selected->pegawai = $user;
        $room_selected->save();
        
        return redirect('room');

    }

    public function buangkerja($id){
        // $user = $request->user();
        $user = null;
        $room_selected = Room::find($id);

        $room_selected->pegawai = $user;
        $room_selected->save();
        
        return redirect('room');

    }

    public function segar($id){
        
    }
}
