<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AboutDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('aboutdesc')->insert([
            ['about_header'=> 'About Me', 'about_text'=> "Hi, my name is Lorenz Nicolas Ciocon. I'm currently in third year college studying for a Computer Science degree in Bacolod City, Philippines. I started learning frontend development by myself with the help of youtube and online courses such as the Javascript and React courses on Scrimba. I've also gained experience in Fullstack Web, Unity, and Java Object Oriented Programming through school by making various projects such as games, and other GUI based systems."]
        ]);
    }
}
