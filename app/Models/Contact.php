<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'full_name' ,
        'title' , 
        'content' ,
        'phone' ,
        'email',
    ];
    protected $primaryKey = 'contact_id';
    protected $table = 'contact'; 
}
