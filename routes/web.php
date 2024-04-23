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
    return view('welcome');
});

Route::get('/about', function () {
    $nama = "Saliman";
    $jenis_kelamin = "Laki laki";
    $pendidikan_trakhir = "SMK";
    $pekerjaan = "Bekerja di PT.Pindad";
    $alamat = "cibaduyut";
    return view('data_diri', compact('nama','jenis_kelamin','pendidikan_trakhir','pekerjaan','alamat')); 
});

Route::get('/sendiri', function () {
    $nama = "Rishky Saliman";
    $umur = "17";
    $tanggal_lahir ="12-02-2006";
    $cita_cita = "TNI/POLRI";
    $kesibukan = "Bekerja di PT.Pindad";
    $hobi = "Berkendara motor";
    $kemampuan = "Bisa berubah menjadi spiderman";
    $pesan  = "Tetap menjadi generasi yang bisa mempertahan kan budaya, dan semangat mengejar cita cita";
    return view('data_saliman', compact('nama','umur','tanggal_lahir','cita_cita','kesibukan','hobi','kemampuan','pesan')); 
});
