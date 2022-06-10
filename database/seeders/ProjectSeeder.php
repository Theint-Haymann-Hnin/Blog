<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'name' => 'Job Portal System',
            'url' => 'https://www.slideshare.net/masterpiyush/documentation-18684935',
        ]);
        DB::table('projects')->insert([
            'name' => 'Cv Management System',
            'url' => 'https://blog.sprintcv.com/whats-a-cv-management-software-and-why-you-must-use-it/',
        ]);
        DB::table('projects')->insert([
            'name' => 'WareHouse Management System',
            'url' => 'https://www.techtarget.com/searcherp/definition/warehouse-management-system-WMS',
        ]);
        DB::table('projects')->insert([
            'name' => 'Library Management System',
            'url' => 'https://www.igi-global.com/dictionary/library-management-systems/76207',
        ]);
        DB::table('projects')->insert([
            'name' => 'Room Reservation  System',
            'url' => 'https://www.meetio.com/lp/meeting-room-booking-system?gclid=CjwKCAjw14uVBhBEEiwAaufYxxgQfzn07yV3g7IraJiDxDH60DjUb_fOlaCjlspZ6D2MCrPosqod2xoCFbIQAvD_BwE',
        ]);
        DB::table('projects')->insert([
            'name' => 'Hotel Management System',
            'url' => 'https://jinisyssoftware.com/what-is-hotel-management-system/',
        ]);
    }
}
