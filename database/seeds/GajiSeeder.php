<?php
use App\Gaji;
use Illuminate\Database\Seeder;

class GajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gaji = new Gaji;
        $gaji->nip = 1231;
        $gaji->nama = 'Muhammad Abdul Tayoo';
        $gaji->agama = 'Islam';
        $gaji->jenis_kelamin = 'Laki_laki';
        $gaji->alamat = 'Jl.Cibaduyut No.155';
        $gaji->jabatan = 'Manager';
        $gaji->jam_kerja = 150;
        $gaji->save();
        
        $gaji = new Gaji;
        $gaji->nip = 1232;
        $gaji->nama = 'Ilham Ahmad Syarif';
        $gaji->agama = 'Islam';
        $gaji->jenis_kelamin = 'Laki_laki';
        $gaji->alamat = 'Jl.Kota Baru No.12';
        $gaji->jabatan = 'Sekertaris';
        $gaji->jam_kerja = 200;
        $gaji->save();

        $gaji = new Gaji;
        $gaji->nip = 1233;
        $gaji->nama = 'Andre Syahrul Hanawan';
        $gaji->agama = 'Islam';
        $gaji->jenis_kelamin = 'Laki_laki';
        $gaji->alamat = 'Jl.Cibaduyut No.155';
        $gaji->jabatan = 'Staff';
        $gaji->jam_kerja = '250';
        $gaji->save();
    }

}