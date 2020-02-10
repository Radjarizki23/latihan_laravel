<?php
use App\Mahasiswa;
use App\Wali;
use App\Dosen;
use App\Hobi;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(Buku_seeder::class);
        // $this->call(Petualang_seeder::class);
        // $this->call(GajiSeeder::class);
        $this->call(SeederRelasi::class);
        $this->command->info('SeederRelasi berhasil.');
    }
}