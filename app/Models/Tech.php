<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tech extends Model
{
    protected $table = 'techstack' ; 
    protected $fillable = ['tech', 'type'];
}
