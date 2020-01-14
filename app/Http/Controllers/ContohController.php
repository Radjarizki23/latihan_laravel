<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function latihan()
    {
        return 'Ini Contoh Latihan Controller';
    }

    public function latihan2()
    {
        $a = 'Muhammad Raden';
        $b = 'Rizky Maulana';
        return 'Nama Saya Adalah '.$a.' '.$b;

    }
    public function latihan3()
    {
        $a = 'emammie';
        return view('test', compact('a'));
    }

    public function latihan4()
    {
        $a = 'man ana laulakum';
        return view('test2', ['nama' => $a]);
    }

    public function menu($a)
    {
        return view('menu', compact('a'));
    }

    public function menu2($a = null, $b= null, $uang=null)
    {
        if (isset($uang)) {
        if($uang >= 25000){
            $uang = ', Anda Mendapat Ukuran JUMBO!';
        }    
        else if($uang >= 15000 && $uang <= 25000) {
            $uang = ', Anda Mendapat Ukuran MEDIUM!';
        }
        else if($uang >= 1 && $uang <= 15000) {
            $uang = ', Anda Mendapat Ukuran SMALL!';
        }
        elseif ($uang <= 1){
            $uang = ', Harga Tidak Valid!';
        }

    }

        if(isset($a))
        {
            $a = 'Anda Memesan ' .$a;
        }
        if(isset($b))
        {
            $b = '& ' .$b;
        }
        if(!isset($a))
        {
            $a = 'Anda Belum Memesan Sesuatu';
        }
        return view('menu2', compact('a', 'b', 'uang'));
    }
}