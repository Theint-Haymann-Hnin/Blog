<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Html',
        ]);
        DB::table('categories')->insert([
            'name' => 'Css',
        ]);
        DB::table('categories')->insert([
            'name' => 'Javascript',
        ]);
        DB::table('categories')->insert([
            'name' => 'Bootstrap',
        ]);
        DB::table('categories')->insert([
            'name' => 'Vue',
        ]);
        DB::table('categories')->insert([
            'name' => 'Php',
        ]);
        DB::table('categories')->insert([
            'name' => 'Java',
        ]);
        DB::table('categories')->insert([
            'name' => 'Ruby',
        ]);
    }
}
