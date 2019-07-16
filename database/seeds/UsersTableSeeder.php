<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,10)->create();

        $users = [
            [
                'name' => 'user',
                'email' => 'user@user.com',
                'password' => bcrypt('user987'),
                'role' => 'user',
                'created_at' => Carbon::now(),
                'email_verified_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin987'),
                'role' => 'admin',
                'created_at' => Carbon::now(),
                'email_verified_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];

        \App\User::insert($users);
    }
}
