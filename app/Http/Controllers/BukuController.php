<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return $buku;
    }
    public function show($id)
    {
        $buku = Buku::find($id);
        return $buku;
    }
    public function display()
    {
        $buku = Buku::select('judul', 'jumlah_halaman', 'penerbit')->take(5)->get();
        return $buku;
    }
    public function hitungbuku()
    {
    $buku = Buku::count();
    return $buku;
    }
    public function buatdata()
    {
        $buku = new Buku();
        $buku->judul = 'Belajar PHP 11116';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Gramedia';
        $buku->synopsis = 'Belajar Php Itu Menyenangkan';
        $buku->status = '1';
        $buku->save();
        return $buku;
    }
    public function update($id)
    {
        $buku = Buku::find($id);
        $buku->judul = 'Buku Updappte';
        $buku->jumlah_halaman = 100;
        $buku->penerbit = 'Lorem ipsum';
        $buku->synopsis = 'Menyenangkan';
        $buku->status = '1';
        $buku->save();
        return $buku;
    }
    public function delete($id)
    {
        $buku = Buku::find($id);
        $buku->delete();
        return $buku;
    }
    
}
