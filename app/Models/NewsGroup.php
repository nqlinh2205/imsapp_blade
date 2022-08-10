<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsGroup extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'news_group';
    
    public function news()
    {
        return $this->hasMany(News::class, 'group_id', 'group_id');
    }
}
