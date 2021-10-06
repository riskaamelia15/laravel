<?php

// JANGAN lupa import URL controllernya
use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\UserController;

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
    return view('index');
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


// latihan
Route::get('/luas-segitiga/{tinggi?}/{alas?}', function ($tinggi = 1, $alas = 1) {
    return 'Hitung Luas Segitiga <br>
    Tinggi : ' . $tinggi .
        '<br> Alas : ' . $alas .
        '<br> L = 1/2 x Alas x Tinggi
        <br> Hasil : ' . 1 / 2 * ($tinggi * $alas);
});

//Route group
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

//membuat route untuk controller
Route::get('data-siswa', [DataSiswaController::class, 'dataSiswa']);
Route::get('data-siswi', [DataSiswaController::class, 'dataSiswi']);
Route::get('nama/{nama?}', [DataSiswaController::class, 'nama']);

Route::resource('user', UserController::class);

// https://bit.ly/laravel-pertemuan-3

//membuat route untuk untuk blade
Route::get('profile', function () {
        return view('profile.index');
    });

// Yang ini tidak disaran
// Route::get('profile/{nama}', function ($nama) {
//         return view('profile.detail', ['nama_user' => 'Riska']);
//     });

Route::get('ganjil', function () {
        return view('profile.ganjil');
    });

Route::get('adxddnfny', function () {
        return view('album');
    })->name('album');
