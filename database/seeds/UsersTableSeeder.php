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
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'phone' => '081336714997',
                'password' => bcrypt('admin987'),
                'is_admin' => true,
                'role' => 'admin',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'user',
                'email' => 'user@user.com',
                'phone' => '081336714997',
                'password' => bcrypt('user987'),
                'is_admin' => false,
                'role' => 'user',
                'created_at' => Carbon::now(),
            ],
        ];

        \App\User::insert($users);
    }
}
