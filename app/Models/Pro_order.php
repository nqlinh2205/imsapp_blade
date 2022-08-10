<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pro_order extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'o_full_name' ,
        'o_email' , 
        'o_phone' ,
        'o_address',
        'o_area' , 
        'o_country' ,
        'o_province',
        'o_district',
    ];
    protected $primaryKey = 'order_id';
    protected $table = 'product_order'; 
}
