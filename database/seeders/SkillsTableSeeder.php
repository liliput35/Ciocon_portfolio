<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds. Lab ACtivity 2
     */
    public function run(): void
    {
        DB::table('skills')->insert([
            ['skill'=>'HTML', 'level'=>'Advanced'], 
            ['skill'=>'CSS', 'level'=>'Advanced'], 
            ['skill'=>'JavaScript', 'level'=>'Intermediate'], 
            ['skill'=>'PHP', 'level'=>'Intermediate'], 
            ['skill'=>'Laravel', 'level'=>'Beginner']
        ]);
    }
}
