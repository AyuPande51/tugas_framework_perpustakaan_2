<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeminjamanBukuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat data untuk tabel 'peminjaman_buku'
        DB::table('peminjaman_buku')->insert([
            'id_user' => 1, // Ganti dengan ID user yang sesuai
            'id_buku' => 1, // Ganti dengan ID buku yang sesuai
        ]);

        DB::table('peminjaman_buku')->insert([
            'id_user' => 2, // Ganti dengan ID user yang sesuai
            'id_buku' => 2, // Ganti dengan ID buku yang sesuai
        ]);

        // Tambahkan data lainnya jika diperlukan
    }
}
