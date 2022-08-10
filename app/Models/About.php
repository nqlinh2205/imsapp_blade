<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'picture' ,
        'title' , 
        'content' ,
        'short_home',
        'video',
    ];
    protected $primaryKey = 'id';
    protected $table = 'about';
}
