<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function pass()
    {
    $nama = "Ucup Abdul Syamsudin";
    return view('latihan', compact('nama'));
    }

    public function pass1()
    {
    $gaji = "2000000";
    return view('latihan1', ['penghasilan'=> $gaji]);
    }

    //Pas Data Parameter
    public function status($status = 'jomblo')
    {
        //dd($status);
        return view('latihan2', compact('status'));
    }

    public function loop()
    {
        $buku = [
            ['judul'=>'Bangkit Dari Remedial','penerbit'=>'Erlangga','harga'=>100000,'penulis'=>'Aku Yang Suka Remedi'],
            ['judul'=>'Tips Move On Dari Kamu','penerbit'=>'RadenRizky','harga'=>150000,'penulis'=>'RM'],
            ['judul'=>'Kekuatan 1/3 Malam','penerbit'=>'Gramedia','harga'=>250000,'penulis'=>'Mutia']
        ];
        return view('latihan3', compact('buku'));
    }
}
