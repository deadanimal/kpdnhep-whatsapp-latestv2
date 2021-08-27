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
        // dd($biliks);
        $biliks = json_encode($biliks);
        $biliks = json_decode($biliks, TRUE)['rooms'];
        

        return view('tugasans', [
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
        $try = json_encode($mesejs);
        $mesejs = json_decode($try, TRUE)['messages'];
        // dd($mesejs);
        // dd($mesejs[87]['message_text']);

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

       //API Url
$url = 'https://murai.io/api/whatsapp/numbers/601154212526/rooms/$id/messages';

//Initiate cURL.
$ch = curl_init($url);

//The JSON data.
$jsonData = array(
    "message_text" => $hantar,
);

//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);

//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);

//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 

//Execute the request
$result = curl_exec($ch); 

curl_close($ch);

$result_json = var_dump(json_decode($result, true));

        // if($send->successful()) {
        //     $url = '/hantar/{{$id}}';
        //     return redirect($url);
        // }

        $url = "https://murai.io/api/whatsapp/numbers/601154212526/rooms/$id/messages";
        $response = Http::get($url);
        $mesejs = $response->json();
        $try = json_encode($mesejs);
        $mesejs = json_decode($try, TRUE)['messages'];
        $room = json_decode($try, TRUE)['room'];

        return view('mesej', [
            'mesejs' => $mesejs,
            'room' => $room
        ]);
    }
    public function caritugasan(Request $request)
    {
        $url = "https://murai.io/api/whatsapp/numbers/601154212526/rooms";
        $phone = $request->phone;
        $name = $request->name;
        $officer_name = $request->officer_name;
        // dd($name, $phone);
        if ($phone != null && $name == null && $officer_name == null) {
            $response = Http::post($url, [
                "phone" => $phone,
            ]);
        } else if ($phone == null && $name != null && $officer_name == null) {
            $response = Http::post($url, [
                "name" => $name
            ]);
        } else if ($phone == null && $name == null && $officer_name != null) {
            $response = Http::post($url, [
                "officer_name" => $officer_name
            ]);
        } else {
            return redirect('/tugasans');
        }
        $biliks = $response->json();
        $biliks = json_encode($biliks);
        $biliks = json_decode($biliks, TRUE)['rooms'];

        return view('tugasans', [
            'biliks' => $biliks,
        ]);
    }

    public function potong($id, $index)
    {
        $url = "https://murai.io/api/whatsapp/numbers/601154212526/rooms/$id/messages";
        $response = Http::get($url);
        $mesejs = $response->json();
        $try = json_encode($mesejs);
        $mesejs = json_decode($try, TRUE)['messages'];
        // dd($mesejs[$index]['message_text']);

        $long_string = $mesejs[$index]['message_text'];
        $array_string = explode("\n", $long_string);
        echo '<br/>';

        $engl = implode(" ", array_slice(explode(" ", $array_string[0]),0));
        $engl_string = "Thank you for contacting Whatsapp Aduan KPDNHEP. To file a complaint, please furnish information below:";
        $mal_string = "Terima kasih kerana menghubungi Whatsapp Aduan KPDNHEP. Bagi melaporkan aduan sila lengkapkan maklumat berikut:";
        // dd($engl, $engl_string);
        if ($engl == $engl_string){
            # nama
            $nama = implode(" ", array_slice(explode(" ", $array_string[1]),5));

            # ic number
            $ic = implode(" ", array_slice(explode(" ", $array_string[2]),3));

            # alamat
            $alamat = implode(" ", array_slice(explode(" ", $array_string[3]),3));

            # telefon
            $telefon = implode(" ", array_slice(explode(" ", $array_string[4]),3));

            # email
            $email = implode(" ", array_slice(explode(" ", $array_string[5]),2));

            # nama premis
            $namaprem = implode(" ", array_slice(explode(" ", $array_string[6]),5));

            # alamat premis
            $alprem = implode(" ", array_slice(explode(" ", $array_string[7]),7));

            # keterangan aduan
            $keteranganaduan = implode(" ", array_slice(explode(" ", $array_string[8]),4));

            // dd($nama, $ic, $alamat, $telefon, $email);
        }else if (($engl == $mal_string)){
            # nama
            $nama = implode(" ", array_slice(explode(" ", $array_string[2]),4));

            # ic number
            $ic = implode(" ", array_slice(explode(" ", $array_string[3]),5));

            # alamat
            $alamat = implode(" ", array_slice(explode(" ", $array_string[4]),4));

            # telefon
            $telefon = implode(" ", array_slice(explode(" ", $array_string[5]),3));

            # email
            $email = implode(" ", array_slice(explode(" ", $array_string[6]),2));

            # nama premis
            $namaprem = implode(" ", array_slice(explode(" ", $array_string[7]),5));

            # alamat premis
            $alprem = implode(" ", array_slice(explode(" ", $array_string[8]),6));

            # keterangan aduan
            $keteranganaduan = implode(" ", array_slice(explode(" ", $array_string[9]),3));

            // dd($nama, $ic, $alamat, $telefon, $email);
        } else {
            echo "<script>alert('Sila pilih mesej aduan');</script>";

            $url = "https://murai.io/api/whatsapp/numbers/601154212526/rooms/$id/messages";
            $response = Http::get($url);
            $mesejs = $response->json();
            $try = json_encode($mesejs);
            $mesejs = json_decode($try, TRUE)['messages'];

            $room = json_decode($try, TRUE)['room'];
            return view('mesej', [
                'mesejs' => $mesejs,
                'room' => $room
            ]);

        }
        
        return view('/admin-case.prefill', [
            'nama' => $nama,
            'ic' => $ic,
            'alamat' => $alamat,
            'telefon' => $telefon,
            'email' => $email,
            'namaprem' => $namaprem,
            'alprem' => $alprem,
            'keteranganaduan' => $keteranganaduan
        ]);
    }

    public function testing($id,Request $request)
    {
        $url = "https://murai.io/api/whatsapp/numbers/601154212526/rooms/$id/messages";
        $msgid = $request->msgid;
        $response = Http::post($url, [
            "id" => $msgid,
        ]);
        $mesejs = $response->json();
        // dd($mesejs);
        $try = json_encode($mesejs);
        $mesejs = json_decode($try, TRUE)['messages'];
        $room = json_decode($try, TRUE)['room'];
        return view('mesej', [
            'mesejs' => $mesejs,
            'room' => $room
        ]);
    }
}
