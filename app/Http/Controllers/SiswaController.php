<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return $siswa;
    }

    public function hitungsiswa()
    {
    $siswa = Siswa::count();
    return $siswa;
    }

    public function createsiswa($nama, $nis, $tgl_lahir)
    {
        $siswa = new Siswa();
        $siswa->nama = $nama;
        $siswa->nis = $nis;
        $siswa->kelas = 'XI';
        $siswa->jurusan = 'Rekayasa Perangkat Lunak';
        $siswa->alamat = 'Bandung, Jl.Cibaduyut Raya No.155';
        $siswa->tgl_lahir = '2003-01-01';
        $siswa->save();
        return $siswa;
    }

    public function show($id)
    {
        $siswa = Siswa::find($id);
        return $siswa;
    }

    public function update($id, $nama, $nis)
    {
        $siswa = Siswa::find($id);
        $siswa->nama = $nama;
        $siswa->nis = $nis;
        $siswa->kelas = 'XI';
        $siswa->jurusan = 'Rekayasa Perangkat Lunak';
        $siswa->alamat = 'Bandung, Jl.Cibaduyut Raya No.155';
        $siswa->tgl_lahir = '';
        $siswa->save();
        return $siswa;
    }
    public function delete($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return $siswa;
    }
}
