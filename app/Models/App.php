<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    public $timestamps = false;

    protected $table = 'app';

    protected $fillable = array('id', 'group_id', 'title', 'friendly_link');
}
