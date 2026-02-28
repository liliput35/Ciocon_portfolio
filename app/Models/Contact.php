<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contactinfo'; 
    protected $fillable = [
        'contact_name', 
        'contact_info', 
        'contact_link', 
        'contact_icon'
    ];
}
