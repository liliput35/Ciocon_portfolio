<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainSkill extends Model
{
    protected $table = 'mainskills' ; 
    protected $fillable = [
        'skill_name', 
        'skill_desc'
    ] ;
}
