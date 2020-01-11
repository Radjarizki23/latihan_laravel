<?php

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

use App\Buku;
use App\Petualang;

Route::get('/', function () {
    return Buku::all();
    return Petualang::all();
});

Route::get('contoh', function () {
    return view('Selamat Datang');

});

Route::get('pertama', function () {
    return ('Belajar_Laravel');
});

Route::get('kedua', function () {
    return ('Membuat Halaman Web');
});

Route::get('ketiga', function () {
    return ('Mengecek');
});

Route::get('keempat', function () {
    return ('Menampilkan');
});

Route::get('kelima', function () {
    return ('Dll'); 
});

Route::get('variable', function () {
    $data1 = 'ini variable data 1';
    $data2 = 'ini variable data 2';
    $data3 = 'ini variable data 3';
    $data4 = 'ini variable data 4';
    $data5 = 'ini variable data 5';
    return $data1.'<br>'.$data2.'<br>'.$data3.'<br>'.$data4.'<br>'.$data5;
});

Route::get('angkot/{jurusan}/{bayar}', function () {
    $jurusan = 'Cibaduyut - Karang Setra';
    $data = 'Angkot Jurusan:';
    $bayar = 'Rp.12000';
    $aa = 'Harga Bayar:';
    return $data .' '. $jurusan .'<br>'. $aa .' '. $bayar;
});

Route::get('user/{nama}/{usia}/{alamat}', function ($nama,$usia,$alamat) {
    return ' Halo ' . $nama . ' Usia ' . $usia . ' Alamat Di ' . $alamat;
});

Route::get('siswa/{nama}/{nilai?}', function ($nama,$nilai = 'Belum Mempunyai Nilai') {
    if ($nilai > 50) {
        $grade = 'Grade A';
    }
    else if($nilai <= 50 && $nilai >= 40) {
        $grade = 'Grade B';
    }
    else if($nilai <= 40 && $nilai >= 30) {
        $grade = 'Grade C';
    }
    else if($nilai <= 30 && $nilai >= 20) {
        $grade = 'Grade D';
    }
    else if($nilai <= 20 && $nilai >= 1) {
        $grade = 'Grade E';
    }
    else {
        $grade = 'Tidak Mempunyai Nilai !!';
    }
    return ' Hai : '.$nama.'<br>' .$nilai. '<br>' .$grade;  
});