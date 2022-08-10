<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppGroup extends Model
{
    public $timestamps = false;

    protected $table = 'app_group';

    protected $fillable = array('id', 'group_id', 'title', 'friendly_link');

    public function app(){
        return $this->hasMany(App::class, 'group_id', 'group_id')->wherelang(Config("ims.cur.lang"));
    }
}
