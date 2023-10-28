<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_user')->insert([
            'nama_user' => 'Nama Pengguna 1',
            'username' => 'user1',
            'password' => bcrypt('password1'), // Anda dapat menggunakan bcrypt untuk mengenkripsi password
            'telp' => '1234567890',
            'level' => 'user_level', // Gantilah dengan nilai level yang sesuai
            'id_role' => 'role_id', // Gantilah dengan nilai ID peran yang sesuai
        ]);

        // Tambahkan data lainnya jika diperlukan
    }
}
