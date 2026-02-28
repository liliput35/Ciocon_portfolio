<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MainSkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('mainskills')->insert([
            ['skill_name'=> 'Game Development', 'skill_desc'=> 'Proficient in designing and developing interactive 2D and 3D games using Unity Engine and C#. Experienced in game mechanics, level design, and implementing gameplay logic. Developed a 2D rhythm-based platformer and a 3D adventure game as part of team projects'], 
            ['skill_name'=> 'Full-Stack Web Development', 'skill_desc'=> 'Skilled in building full-stack web applications using PHP, MySQL, HTML, CSS, and JavaScript. Able to implement CRUD functionality, database interactions, and responsive interfaces. Created an Incident Reporting System.'], 
            ['skill_name'=> 'Frontend & GUI Development', 'skill_desc'=> 'Experienced in developing user-friendly interfaces and GUI applications using React.js and Java Swing/JavaFX. Built a GUI-based task tracking application in Java and developed dynamic frontends with React.js, improving user experience through interactive and responsive design']

        ]);
    }
}
