<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class HomepageDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('homepage_data')->insert([
            ['main_header'=>'Hi! I’m Lorenz', 'about_info'=>'a 21-year-old computer science student from University of St. Lasalle interested in front-end development.', 'cta_text'=>'Know More']
        ]);
    }
}
