<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomepageData extends Model
{
    protected $table = 'homepage_data';
    protected $fillable = [
        'main_header',
        'about_info', 
        'cta_text'
    ];
}
