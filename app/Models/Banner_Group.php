<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner_Group extends Model
{

    public $timestamps = false;

    protected $table = 'banner_group';

    protected $fillable = [
        'group_id',
        'arr_title',
        'width',
        'height',
        'type_show',
        'show_order',
        'is_show',
        'date_create',
        'date_update'
    ];

    public function banner()
    {
        return $this->hasMany(Banner::class, 'group_id', 'group_id');
    }
}
