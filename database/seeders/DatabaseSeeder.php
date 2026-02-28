<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]); lab act 2

        //default
        $this->call(SkillsTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);

        //home page
        $this->call(HomepageDataTableSeeder::class);
        $this->call(RecentWorksTableSeeder::class);

        //skills page
        $this->call(AboutDescriptionSeeder::class);
        $this->call(MainSkillsTableSeeder::class);
        $this->call(TechStackTableSeeder::class);

        //projects page
        $this->call(ProjectsTableSeeder::class);

        //contacts page
        $this->call(ContactInfoTableSeeder::class);

        //experience page 
        $this->call(ExperiencesTableSeeder::class);

    }
}
