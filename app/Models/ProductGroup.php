<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductGroup extends Model
{
    public $timestamps = false;

    protected $table = 'product_group';

    protected $fillable = array('id', 'group_id','parent_id', 'title', 'friendly_link');

    public function parent()
    {
        return $this->belongsTo(ProductGroup::class, 'parent_id');
    }

    public function subProductGroup()
    {
        return $this->hasMany(ProductGroup::class, 'parent_id', 'group_id')
            ->where('is_show', 1)
            ->where("lang", Config("ims.cur.lang"))
            ->with('subProductGroup');
    }
    public function products()
    {
        return $this->hasManyThrough(Product::class, ProductGroup::class, 'parent_id', 'group_id', 'id');
    }
}
