<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageGroup extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'page_group';
    public function page(){
        return $this->hasMany(Page::class, 'group_id','group_id')->wherelang(Config("ims.cur.lang"));
    }
}
