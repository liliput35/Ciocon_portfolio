<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RecentWorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('recent_works')->insert([
            ['name'=> 'Gravelight', 'description'=> '3d top down adventure game', 'tech_stack'=> 'Unity, C#', 'img_addr'=> 'recent1.png'], 
            ['name'=> 'FluxTrack', 'description'=> 'incident reporting web-app', 'tech_stack'=> 'PHP, JS, MySql', 'img_addr'=> 'recent2.png'], 
            ['name'=> 'Toggl', 'description'=> 'task tracking application', 'tech_stack'=> 'Java', 'img_addr'=> 'recent3.png'], 
        ]);
    }
}
