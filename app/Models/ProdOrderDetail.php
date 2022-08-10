<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdOrderDetail extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'title' ,
        'price_buy' ,
        'quantity',
    ];
    protected $primaryKey = 'detail_id';
    protected $table = 'product_order_detail'; 
}
