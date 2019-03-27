<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Boy', 'phone' => '08234576687', 'sex' => 'laki_laki', 
              'email' => 'boy@gmail.com', 'password' => bcrypt('123456'), 
              'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['name' => 'Oces', 'phone' => '08235476687', 'sex' => 'laki_laki', 
            'email' => 'oces@gmail.com', 'password' => bcrypt('1234567'), 
            'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ]);

       DB::table('tags')->insert([
            ['name' => 'Teknologi' , 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ],
            ['name' => 'Otomotif' , 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ],
            ['name' => 'Informasi' , 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s') ],


       ]);

       DB::table('authors')->insert([
            ['education' => 'S1 Unitomo Ilmu Komunikasi', 'user_id' => 1],
            ['education' => 'S1 Unitomo Teknik Informatika', 'user_id' => 2],

       ]);

    }
}
