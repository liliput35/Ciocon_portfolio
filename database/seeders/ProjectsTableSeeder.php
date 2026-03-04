<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('projects')->insert([
            ['project_name'=> 'FluxTrack', 'project_desc'=> 'Full Stack Incident Tracking System', 'project_tech_stack'=>'PHP, Javascript, MySql', 'project_link'=>'https://github.com/liliput35/FluxTrack', 'project_img_addr'=>'fluxtrack.png'], 
            ['project_name'=> 'Gravelight', 'project_desc'=> '3d Top Down Narrative Adventure Game', 'project_tech_stack'=>'Unity, C#, Blender', 'project_link'=>'https://github.com/liliput35/gravelight', 'project_img_addr'=>'gravelight.png'], 
            ['project_name'=> 'Portfolio Website', 'project_desc'=> 'Fully Responsive Showcase Website', 'project_tech_stack'=>'HTML, CSS, Javascript', 'project_link'=>'https://liliput35.github.io/portfolio/', 'project_img_addr'=>'portfoliopic.png'], 
            ['project_name'=> 'Bust-a-Beat', 'project_desc'=> '2d Rhythm Based Platformer', 'project_tech_stack'=>'Unity, C#', 'project_link'=>'https://github.com/liliput35/bust-a-beat', 'project_img_addr'=>'bab.png'], 
            ['project_name'=> 'Toggl', 'project_desc'=> 'GUI Task Tracking Application', 'project_tech_stack'=>'Java', 'project_link'=>'https://github.com/liliput35/Toggl', 'project_img_addr'=>'toggl.png']
        ]);
    }
}
