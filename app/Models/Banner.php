<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class Banner extends Model
{
    public $timestamps = false;

    protected $table = 'banner';

    protected $fillable = [
        'id',
        'banner_id',
        'group_id',
        'type',
        'title',
        'link_type',
        'link',
        'target',
        'content',
        'short',
        'show_mod',
        'show_act',
        'show_order',
        'is_show',
        'date_create',
        'date_update',
        'date_begin',
        'date_end',
        'lang'
    ];

    protected static function booted()
    {
        static::addGlobalScope('show_lang_default', function (Builder $builder) {
            $builder->where('is_show', '=', 1)->where("lang", Config("ims.cur.lang"))->orderBy("show_order", "desc");
        });
    }

    // public function scopeActive($query)
    // {
    //     $query->where('is_show', 1);
    // }

    public function bannerGroup()
    {
        return $this->belongsTo(Banner_Group::class, 'group_id');
    }
}
