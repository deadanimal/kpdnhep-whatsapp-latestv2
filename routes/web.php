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
    return view('loginpage');
});

Route::get('/sm', function () {
    return view('sm');
});

Route::get('/jana_2020', function () {
    return view('jana_2020');
});

Route::get('/jana_2021', function () {
    return view('jana_2021');
});
Route::get('/login2', function () {
    return view('loginpage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/feedback', function () {
    return view('feedback');
});

Route::get('/admin-case', function () {
    return view('admin_case');
});

Route::get('/admin-case/create', function () {
    return view('admin-case/create');
});

use App\Http\Controllers\RoomController;
Route::get('/room/{room}/aktif', [RoomController::class, 'aktif_bot']);
Route::post('/room/{room}/officer', [RoomController::class, 'add_officer']);
Route::post('/room/{room}/officer_buang', [RoomController::class, 'buang_officer']);
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

use App\Http\Controllers\AktifController;
Route::resource('aktif', AktifController::class);

use App\Http\Controllers\LaporanpegawaiController;
Route::resource('laporanpegawai', LaporanpegawaiController::class);


// use App\Http\Controllers\RoomController;
// Route::resource('room', RoomController::class);


// custom

Route::get('/hantar/{id}', [RoomController::class, 'hantar']);

Route::get('/hantar/{id}', [TugasanController::class, 'hantar']);

Route::get('/hantaraktif/{id}', [AktifController::class, 'hantaraktif']);

Route::get('/terimakerja/{id}', [MesejController::class, 'terimakerja']);

Route::get('/buangkerja/{id}', [MesejController::class, 'buangkerja']);

Route::get('/showstat', [LaporanbulananController::class, 'showstat']);

Route::post('/simpan_muatnaik', [LaporanhelpdeskController::class, 'simpan_muatnaik']);

Route::post('/kemaskini/{id}', [LaporanhelpdeskController::class, 'kemaskini']);

Route::post('/cari', [RoomController::class, 'cari']);
Route::post('/caritugasan', [TugasanController::class, 'caritugasan']);
Route::post('/cariaktif', [AktifController::class, 'cariaktif']);

Route::post('/hantarrr/{id}', [TugasanController::class, 'hantarrr']);

Route::post('/jananik', [LaporanbulananController::class, 'jananik']);

Route::post('/hantaq', [LaporanpegawaiController::class, 'hantaq']);

Route::get('/potong/{id}/{index}', [TugasanController::class, 'potong']);

// auth
use App\Http\Controllers\AuthController;
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('/signout', [AuthController::class, 'signOut']);
Route::post('/customlogin', [AuthController::class, 'customlogin']);