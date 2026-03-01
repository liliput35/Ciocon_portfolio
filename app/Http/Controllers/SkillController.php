<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\AboutDescription;
use App\Models\MainSkill;
use App\Models\Tech;


class SkillController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        $about = AboutDescription::first();
        $skills = MainSkill::all(); //eloquent orm
        $frontendTech = Tech::where('type', 'Frontend')->get();
        $backendTech = Tech::where('type', 'Backend')->get();

        return view('pages.skills', compact('skills', 'profile', 'about', 'frontendTech', 'backendTech'));
    }
}
