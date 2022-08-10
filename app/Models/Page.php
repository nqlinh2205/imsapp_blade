<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'title' , 
        'short' ,
        'content' ,
    ];
    protected $primaryKey = 'id';
    protected $table = 'page';
}
