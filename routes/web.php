<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PendaftaranController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landingPage');
});

// Route::get('/landingPage', function () {
//     return view('landingPage');
// });
 Route::get('/login', function () {
     return view('auth/login');
 });

Route::get('/admin', function () {
    return view('admin');
});
Route::get('/bkk', function () {
    return view('tampilan.bkk');
});

Route::get('/alumni', function () {
    return view('tampilan.alumni');
});

Route::get('/detail', function () {
    return view('tampilan.detail');
});

Route::get('/contact', function () {
    return view('tampilan.contact');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/detail', [App\Http\Controllers\DetailController::class, 'index'])->name('detail');

Route::get('/', [App\Http\Controllers\LandingpageController::class,  'index'])->name('landingPage');





Route::get('alumni',[AlumniController::class,'show']);
Route::get('alumni/add',[AlumniController::class,'add']);
Route::post('alumni/create',[AlumniController::class,'create']);
    Route::post('alumni/store',[AlumniController::class,'store']);
    Route::get('alumni/edit/{id}',[AlumniController::class,'edit']);
    Route::get('alumni/delete/{id}',[AlumniController::class,'delete']);
    Route::post('alumni/update/{id}',[AlumniController::class,'update']);
    Route::get('alumni/destroy/{id}',[AlumniController::class,'destroy']);
    Route::get('/daftar', [AlumniController::class, 'daftar'])->name('daftar');
    Route::post('/daftar', [AlumniController::class, 'daftar']);
    Route::post('/daftar', [PendaftaranController::class, 'daftar']);

    Route::get('perusahaan',[PerusahaanController::class,'show']);
    Route::get('perusahaan/add',[PerusahaanController::class,'add']);
    Route::post('perusahaan/create',[PerusahaanController::class,'create']);
    Route::get('perusahaan/delete/{id_perusahaan}',[PerusahaanController::class,'delete']);
    Route::post('perusahaan/update/{id_perusahaan}',[Perusahaanontroller::class,'update']);
    Route::post('perusahaan/store',[PerusahaanController::class,'store']);
    Route::get('perusahaan/destroy/{id_perusahaan}',[PerusahaanController::class,'destroy']);
    Route::get('perusahaan/edit/{id_perusahaan}',[PerusahaanController::class,'edit']);
    Route::post('perusahaan/update/{id_perusahaan}',[PerusahaanController::class,'update']);


    Route::get('contact', [ContactController::class, 'contact']);
    Route::get('contactadmin', [ContactController::class, 'admin']);
    Route::get('contact/add', [ContactController::class, 'add']);
    Route::post('contact/create', [ContactController::class, 'create']);
    Route::get('contact/delete/{id}', [ContactController::class, 'delete']);

    Route::get('pendaftaran', [PendaftaranController::class, 'show']);
    Route::get('pendaftaran/add', [PendaftaranController::class, 'add']);
    Route::post('pendaftaran/create', [PendaftaranController::class, 'create']);
    Route::get('pendaftaran/delete/{id}', [PendaftaranController::class, 'delete']);

