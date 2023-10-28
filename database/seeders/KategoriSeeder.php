<?php

// php artisan db:seed --class=KategoriSeeder

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->insert([
            [
                'name' => 'Fiction',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Science Fiction',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fantasy',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mystery',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Biography',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more categories as needed
        ]);
    }
}
