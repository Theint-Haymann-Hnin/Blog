<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('Password01'),
            'status'=> 'admin'
        ]);
        DB::table('users')->insert([
            'name' => 'Admin1',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('Password01'),
            'status'=> 'admin'
        ]);
        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('Password01'),
            'status'=> 'user'
        ]);
        DB::table('users')->insert([
            'name' => 'User1',
            'email' => 'user1@gmail.com',
            'password' => Hash::make('Password01'),
            'status'=> 'user'
        ]);
        DB::table('users')->insert([
            'name' => 'User2',
            'email' => 'user2@gmail.com',
            'password' => Hash::make('Password01'),
            'status'=> 'user'
        ]);
    }
}
