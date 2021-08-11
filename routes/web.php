<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('sm');
});

Route::get('/sm', function () {
    return view('sm');
});

use App\Http\Controllers\RoomController;
Route::get('/room/{room}/aktif', [RoomController::class, 'aktif_bot']);
Route::resource('room', RoomController::class);

use App\Http\Controllers\MesejController;
Route::resource('mesej', MesejController::class);

use App\Http\Controllers\TugasanController;
Route::resource('tugasans', TugasanController::class);

Route::get('/feedback/whatsapp/message2', function () {
    return view('feedback.whatsapp.message2');
});

use App\Http\Controllers\LaporanbulananController;
Route::resource('laporanbulanan', LaporanbulananController::class);

use App\Http\Controllers\LaporanhelpdeskController;
Route::resource('laporanhelpdesk', LaporanhelpdeskController::class);

use App\Http\Controllers\DokumenfasaController;
Route::resource('dokumenfasa', DokumenfasaController::class);


// use App\Http\Controllers\RoomController;
// Route::resource('room', RoomController::class);


// custom

Route::get('/hantar/{id}', [RoomController::class, 'hantar']);

Route::get('/hantar/{id}', [TugasanController::class, 'hantar']);

Route::get('/terimakerja/{id}', [MesejController::class, 'terimakerja']);

Route::get('/buangkerja/{id}', [MesejController::class, 'buangkerja']);

Route::get('/showstat', [LaporanbulananController::class, 'showstat']);

Route::post('/simpan_muatnaik', [LaporanhelpdeskController::class, 'simpan_muatnaik']);

Route::post('/kemaskini/{id}', [LaporanhelpdeskController::class, 'kemaskini']);

Route::post('/cari', [RoomController::class, 'cari']);

Route::post('/hantarrr/{id}', [TugasanController::class, 'hantarrr']);

Route::post('/jana', [LaporanbulananController::class, 'jana']);