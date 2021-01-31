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
            'role_id' => '1',
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('rootadmin'),
            'created_at' =>  '2020-11-18',
            'updated_at' => '2020-11-18',
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'User',
            'username' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('rootuser'),
            'created_at' =>  '2020-11-18',
            'updated_at' => '2020-11-18',
        ]);
    }
}
