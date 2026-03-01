<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperiencesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('experiences')->insert([
            [
                'duration' => 'Present',
                'experience' => 'BS Computer Science, <span>University of St. La Salle</span>',
                'desc' => 'Currently learning Computer Science through a 4 year course'
            ],
            [
                'duration' => 'May 2023',
                'experience' => "STEM Engineering Senior High School, <span>St. John's Institute</span>",
                'desc' => 'Graduated with High Honors'
            ],
            [
                'duration' => 'October 2021',
                'experience' => 'Coding Course Completer, <span>Scrimba</span>',
                'desc' => 'Completed two online courses in JavaScript and React at scrimba.com'
            ],
            [
                'duration' => 'May 2021',
                'experience' => "Junior High School Completer, <span>St. John's Institute</span>",
                'desc' => 'Completed 10th grade with a general average of A-'
            ],
        ]);
    }
}