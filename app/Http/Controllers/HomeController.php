<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\HomepageData;
use App\Models\RecentWork;

class HomeController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        $homepage = HomepageData::first();         
        $recentWorks = RecentWork::all(); 

        return view('pages.home', compact('profile', 'homepage', 'recentWorks'));
    }
}
