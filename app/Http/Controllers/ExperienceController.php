<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use App\Models\Profile;


class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::all();
        $profile = Profile::first() ;

        return view('pages.experience', compact('experiences', 'profile'));
    }
}
