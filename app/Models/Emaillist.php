<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emaillist extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'email' ,
        'content',
    ];
    protected $primaryKey = 'id';
    protected $table = 'emaillist';
}
