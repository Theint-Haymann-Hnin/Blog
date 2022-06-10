<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'name' => 'Html',
            'percent' => '90',
        ]);
        DB::table('skills')->insert([
            'name' => 'Css',
            'percent' => '70',
        ]);
        DB::table('skills')->insert([
            'name' => 'Javascript',
            'percent' => '60',
        ]);
        DB::table('skills')->insert([
            'name' => 'react',
            'percent' => '50',
        ]);
        DB::table('skills')->insert([
            'name' => 'Php',
            'percent' => '95',
        ]);
        DB::table('skills')->insert([
            'name' => 'Vuejs',
            'percent' => '85',
        ]);
        DB::table('skills')->insert([
            'name' => 'Java',
            'percent' => '75',
        ]);
        DB::table('skills')->insert([
            'name' => 'Ruby',
            'percent' => '40',
        ]);
    }
}
