<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutDescription extends Model
{
    protected $table = 'aboutdesc' ;
    protected $fillable = [
        'about_header', 
        'about_img_addr', 
        'about_text'
    ] ;
}
