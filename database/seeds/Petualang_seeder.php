<?php

use App\Petualang;
use Illuminate\Database\Seeder;

class Petualang_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $petualang = new Petualang;
        $petualang->judul = 'Berpetualang PHP 2';
        $petualang->nama = 'Nama_Petualang';
        $petualang->save();
    }
}
