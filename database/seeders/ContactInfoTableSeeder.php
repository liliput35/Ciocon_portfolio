<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ContactInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
          DB::table('contactinfo')->insert([
            [
                'contact_name' => 'Address',
                'contact_info' => 'Bacolod City, Philippines',
                'contact_link' => '#',
                'contact_icon' => 'fa-solid fa-location-dot'
            ],
            [
                'contact_name' => 'Email',
                'contact_info' => 'cioconlorenz@gmail.com',
                'contact_link' => 'mailto:cioconlorenz@gmail.com',
                'contact_icon' => 'fa-solid fa-envelope'
            ],
            [
                'contact_name' => 'Phone',
                'contact_info' => '09274224944',
                'contact_link' => '#',
                'contact_icon' => 'fa-solid fa-phone'
            ],
            [
                'contact_name' => 'Facebook',
                'contact_info' => 'Nicolas Ciocon',
                'contact_link' => 'https://www.facebook.com/Ensssso?_rdc=2&_rdr',
                'contact_icon' => 'fa-brands fa-facebook'
            ],
            [
                'contact_name' => 'GitHub',
                'contact_info' => 'liliput35',
                'contact_link' => 'https://github.com/liliput35',
                'contact_icon' => 'fa-brands fa-github'
            ],
            [
                'contact_name' => 'LinkedIn',
                'contact_info' => 'Lorenz Ciocon',
                'contact_link' => 'https://www.linkedin.com/in/lorenz-ciocon-7a094b278/',
                'contact_icon' => 'fa-brands fa-linkedin'
            ],
        ]);
    }
}
