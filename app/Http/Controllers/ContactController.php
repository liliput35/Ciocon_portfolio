<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Profile;


class ContactController extends Controller
{
    public function index()
    {
        $profile = Profile::first() ;
        $contacts = Contact::all();
        return view('pages.contacts', compact('contacts', 'profile'));
    }
}
