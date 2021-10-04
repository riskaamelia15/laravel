<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    public function dataSiswa(){
        $nama = "Dimas";
        return $nama;
    }

    public function dataSiswi(){
        $nama = "Riska";
        return $nama;
    }

    public function nama($nama = 'belum diisi'){

        return 'Nama anda adalah ' . $nama;
    }
}
