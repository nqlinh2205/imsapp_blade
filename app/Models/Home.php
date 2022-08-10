<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class Home extends Model
{
    public $timestamps = false;

    protected $table = 'home_setting';
}
