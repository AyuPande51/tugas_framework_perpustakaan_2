<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat data untuk tabel 'role'
        DB::table('role')->insert([
            'judul' => 'Administrator',
        ]);

        DB::table('role')->insert([
            'judul' => 'User',
        ]);

        // Tambahkan data lainnya jika diperlukan
    }
}
