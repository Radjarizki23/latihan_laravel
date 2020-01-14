<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function Biodata()
    {
        $a = 'Muhammad Raden Rizky Maulana';
        $b = 'Islam';
        $c = 'Pria';
        $d = 'Bandung';
        $e = 'SMK Assalaam Bandung';
        $f = 'XI';
        $g = 'RPL (Rekayasa Perangkat Lunak)';
        $h = 'Menyanyikan Sholawat Kepada Rasul';
        $i = '17';
        return view('biodata', ['nama' => $a, 'agama' => $b, 'jenis_kelamin' => $c, 'alamat' => $d,
        'sekolah' => $e, 'kelas' => $f, 'jurusan' => $g, 'hobi' => $h, 'umur' => $i]);
    }
}