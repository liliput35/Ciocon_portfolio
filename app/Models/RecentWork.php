<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecentWork extends Model
{
    protected $table = 'recent_works';
    protected $fillable = [
        'name',
        'description', 
        'tech_stack', 
        'img_addr'
    ];
}
