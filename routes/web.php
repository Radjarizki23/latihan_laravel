<?php


use App\Mahasiswa;
use App\Wali;
use App\Dosen;
use App\Hobi;

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

Route::get('contoh', 'ContohController@latihan');

Route::get('profil', 'ContohController@latihan2');

Route::get('profil2', 'ContohController@latihan3');

Route::get('profil3', 'ContohController@latihan4');

Route::get('biodata', 'BiodataController@Biodata');

Route::get('menu/{mkn}', 'ContohController@menu');

Route::get('menu2/{makan?}/{makan2?}/{harga}', 'ContohController@menu2');

Route::get('hitungbuku', 'BukuController@hitung');

Route::get('display', 'BukuController@display');

Route::get('show', 'BukuController@show');

//CRUD
Route::get('get-buku', 'BukuController@index');
Route::get('create-buku/{judul}', 'BukuController@createdata');
Route::get('get-buku/{id}', 'BukuController@show');
Route::get('buatdata', 'BukuController@buatdata');
Route::get('update-buku/{id}/{judul?}', 'BukuController@update');
Route::get('delete-buku/{id}/{judul}', 'BukuController@delete');

//CRUD SISWA 
Route::get('get-siswa', 'SiswaController@index');
Route::get('create-siswa/{nama}/{nis}/{tgl_lahir}', 'SiswaController@createsiswa');
Route::get('get-siswa/{id}', 'SiswaController@show');
Route::get('update-siswa/{id}/{nama?}', 'SiswaController@update');
Route::get('delete-siswa/{id}/{nama}', 'SiswaController@delete');

//Passing Data
Route::get('pass','PracticeController@pass');
Route::get('pass1','PracticeController@pass1');
Route::get('status/{a?}','PracticeController@status');
Route::get('buku','PracticeController@loop');

//Book
Route::get('book','BukuController@index');
Route::get('book/{id}','BukuController@show');

//Gaji
Route::get('gaji','GajiController@index');
Route::get('gg/{id}','GajiController@show');

//Belajar Blade Templeting
Route::get('/profil',function()
{
    return view ('profil');
});

Route::get('/kontak',function()
{
    return view ('contact');
});

Route::get('/blog',function()
{
    return view ('blog');
});

//Relasi

Route::get('relasi-1', function () 
{
    $mahasiswa = Mahasiswa::where('nim', '=', '1015015072')->first();

    return $mahasiswa->wali->nama;
});

Route::get('relasi-2', function()
{
    $mahasiswa = Mahasiswa::where('nim', '=', '1015015072')->first();
    return $mahasiswa->dosen->nama;
});

Route::get('relasi-3', function()
{
    $dosen = Dosen::where('nama', '=', 'Abdul Musthafa')->first();
    foreach ($dosen->mahasiswa as $temp)
    echo '<li> Nama : ' . $temp->nama . 
    '<strong>' . $temp->nim . '</strong></li>';
});

Route::get('relasi-4', function()
{
    $novay = Mahasiswa::where('nama', '=', 'noviyanto Rachmadi')->first();
    foreach ($novay->hobi as $temp)
    echo '<li>'. $temp->hobi . '</li>';
});

Route::get('relasi-5', function()
{
    $mandi_hujan = Hobi::where('hobi', '=', 'Mandi Hujan')->first();
    foreach ($mandi_hujan->mahasiswa as $temp)
        echo '<li> Nama : '. $temp->nama . ' <strong>' . $temp->nim. '</strong></li>';
});

Route::get('eloquent', function ()
{
    $data = Mahasiswa::with('wali', 'dosen', 'hobi')->get();
    return view('eloquent', compact('data'));
});