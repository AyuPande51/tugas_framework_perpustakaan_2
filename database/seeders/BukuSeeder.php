<?php

// php artisan db:seed --class=BukuSeeder

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategoriId1 = DB::table('kategori')->where('name', 'Fiction')->value('id');
        $kategoriId2 = DB::table('kategori')->where('name', 'Science Fiction')->value('id');
        $kategoriId3 = DB::table('kategori')->where('name', 'Fantasy')->value('id');
        // Get the IDs of the kategori entries

        DB::table('buku')->insert([
            [
                'judul' => 'Book 1',
                'qty' => 10,
                'id_kategori' => $kategoriId1,
                'deskripsi' => 'Description of Book 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Book 2',
                'qty' => 5,
                'id_kategori' => $kategoriId2,
                'deskripsi' => 'Description of Book 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Book 3',
                'qty' => 8,
                'id_kategori' => $kategoriId3,
                'deskripsi' => 'Description of Book 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more book data as needed
        ]);
    }
}
