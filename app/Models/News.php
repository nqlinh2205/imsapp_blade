<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'picture',
        'title',
        'content',
        'meta_desc',
        'num_view'
    ];
    protected $primaryKey = 'id';
    protected $table = 'news';

    protected $casts = [
        'date_create' => 'date:d/m/Y',
        'date_update' => 'date:d/m/Y'
    ];

    protected static function booted()
    {
        static::addGlobalScope('show_lang_default', function (Builder $builder) {
            $builder->where('is_show', '=', 1)->where("lang", Config("ims.cur.lang"))->orderBy("show_order", "desc");
        });
    }

    public function news_group(){
        return $this->belongsTo(NewsGroup::class,'group_id','group_id')->wherelang(Config("ims.cur.lang"));
    }

    
    
    
}
