<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat data untuk tabel 'buku'
        DB::table('buku')->insert([
            'judul' => 'Judul Buku 1',
            'qty' => 10,
            'deskripsi' => 'Deskripsi Buku 1',
        ]);

        DB::table('buku')->insert([
            'judul' => 'Judul Buku 2',
            'qty' => 5,
            'deskripsi' => 'Deskripsi Buku 2',
        ]);

        // Tambahkan data lainnya jika diperlukan
    }
}
