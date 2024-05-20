<?php

use App\Models\Siswa;
use App\Models\Mahasiswa;
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

Route::get('siswa', function () {
    return Siswa::all();
});

Route::get('daftarsiswa', function () {
    return view('daftar-siswa');
});

Route::get('daftarwarga', function () {
    return view('daftar-warga');
});

Route::get('relasi-1', function () {

    $mahasiswa = App\Models\Mahasiswa::where('nim','=','1015015072')->first();

    #tampilkan nama wali mahasiswa
    return $mahasiswa->wali->nama;
});

Route::get('relasi-2', function () {

    $mahasiswa = App\Models\Mahasiswa::where('nim','=','1015015088')->first();

    #tampilkan nama wali mahasiswa
    return $mahasiswa->dosen->nama;
});

Route::get('relasi-3', function () {

    $dosen = App\Models\Dosen::where('nama','=','yulianto')->first();

    #tampilkan nama wali mahasiswa
    foreach ($dosen->mahasiswa as$data) {
        echo "<li>Nama : <strong>" . $data->nama . "</strong> -" . $data->nim . "</li>";
    }
});

Route::get('relasi-4', function () {

    $novay = App\Models\Mahasiswa::where('nama','=','Noviyanto rachmadi')->first();

    #tampilkan nama wali mahasiswa
    foreach ($novay->hobi as$data) {
        echo '<li>' . $data->hobi .  '</li>';
    }
});

Route::get('relasi-5', function () {

    $mandi_hujan = App\Models\Hobi::where('hobi','=','Mandi Hujan')->first();

    #tampilkan nama wali mahasiswa
    foreach ($mandi_hujan->mahasiswa as $data) {
        echo '<li>Nama :' . $data->nama . '<strong>' . $data->nim . '</strong></li>';
    }
});

Route::get('eloquent', function () {

    $mahasiswa = App\Models\Mahasiswa::with('wali', 'dosen', 'hobi')->get();

    // tampilkan
    return view('eloquent', compact('mahasiswa'));
});
