<?php

namespace Database\Seeders;

// php artisan db:seed --class=PeminjamanBukuSeeder

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeminjamanBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Assuming you have seeders for tb_user and buku, you can retrieve user and book IDs here
        $userId1 = DB::table('tb_user')->where('username', 'admin')->value('id_user');
        $userId2 = DB::table('tb_user')->where('username', 'guest')->value('id_user');
        $bookId1 = DB::table('buku')->where('judul', 'Book 1')->value('id');
        $bookId2 = DB::table('buku')->where('judul', 'Book 2')->value('id');

        DB::table('peminjaman_buku')->insert([
            [
                'id_user' => $userId1,
                'id_buku' => $bookId1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => $userId2,
                'id_buku' => $bookId2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more peminjaman_buku data as needed
        ]);
    }
}
