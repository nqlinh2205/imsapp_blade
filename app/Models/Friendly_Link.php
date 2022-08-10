<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class Friendly_Link extends Model
{
    protected $table = 'friendly_link';

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('select', function (Builder $builder) {
            return $builder->select('module','action','dbtable','dbtable_id','lang','friendly_link');
        });
    }
}
