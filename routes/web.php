<?php

use Illuminate\Routing\RouteGroup;
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
    return 'Hallo pak';
});

Route::get('laravel', function () {
    return 'Hallo Laravel';
});

Route::get('beranda', function () {
    return 'Hallo Selamat datang!';
});

// Parameter wajib
//penulisan url contoh about/riska
Route::get('/about/{nama}', function ($nama) {
    return 'Nama saya ' . $nama;
});

Route::get('kontak/{email}', function ($email) {
    return 'Hubungi : ' . $email;
});

// opsional parameter
//beri tanda tanya(?) untuk parameter opsional

Route::get('/nama-saya/{nama?}', function ($nama = null) {
    return 'Nama saya ' . $nama;
});

Route::get('/nama/{nama?}', function ($nama = 'wajib diisi') {
    return 'Nama saya ' . $nama;
});

// latihan
Route::get('/luas-segitiga/{tinggi?}/{alas?}', function ($tinggi = 1, $alas = 1) {
    return 'Hitung Luas Segitiga <br>
    Tinggi : ' . $tinggi .
        '<br> Alas : ' . $alas .
        '<br> L = 1/2 x Alas x Tinggi
        <br> Hasil : ' . 1 / 2 * ($tinggi * $alas);
});

//Route group
Route::prefix('jurusan')->group(function () {
    Route::get('/', function () {
        return 'Berhasil';
    });
    Route::get('/kelas/{namaKelas}', function ($namaKelas) {
        return $namaKelas;
    });
    Route::get('/wali-kelas/{nama}', function ($nama) {
        return $nama;
    });
});

Route::group(['prefix'=>'jurusan'], function () {
    Route::get('/', function () {
        return 'Berhasil';
    });
    Route::get('/kelas/{namaKelas}', function ($namaKelas) {
        return $namaKelas;
    });
    Route::get('/wali-kelas/{nama}', function ($nama) {
        return $nama;
    });
});
