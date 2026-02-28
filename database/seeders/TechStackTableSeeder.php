<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechStackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('techstack')->insert([

            // Frontend
            [
                'tech' => 'HTML',
                'type' => 'Frontend',
            ],
            [
                'tech' => 'CSS',
                'type' => 'Frontend',
            ],
            [
                'tech' => 'JavaScript',
                'type' => 'Frontend',
            ],
            [
                'tech' => 'React.js',
                'type' => 'Frontend',
            ],
            [
                'tech' => 'Tailwind',
                'type' => 'Frontend',
            ],
            [
                'tech' => 'Bootstrap',
                'type' => 'Frontend',
            ],

            // Backend
            [
                'tech' => 'PHP',
                'type' => 'Backend',
            ],
            [
                'tech' => 'MySQL',
                'type' => 'Backend',
            ],
            [
                'tech' => 'Java',
                'type' => 'Backend'
            ],
            [
                'tech' => 'Laravel',
                'type' => 'Backend'
            ], 
            [
                'tech' => 'C#', 
                'type' => 'Backend'
            ]

        ]);
    }
}