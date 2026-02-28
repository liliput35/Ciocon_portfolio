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
                'experience' => 'BS Computer Science, University of St. La Salle',
                'desc' => 'Currently learning Computer Science through a 4 year course'
            ],
            [
                'duration' => 'May 2023',
                'experience' => "STEM Engineering Senior High School, St. John's Institute",
                'desc' => 'Graduated with High Honors'
            ],
            [
                'duration' => 'October 2021',
                'experience' => 'Coding Course Completer, Scrimba',
                'desc' => 'Completed two online courses in JavaScript and React at scrimba.com'
            ],
            [
                'duration' => 'May 2021',
                'experience' => "Junior High School Completer, St. John's Institute",
                'desc' => 'Completed 10th grade with a general average of A-'
            ],
        ]);
    }
}