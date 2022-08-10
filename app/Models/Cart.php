<?php

namespace App\Models;

use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class Cart
{
    protected static $list = [];
    protected static $promo_code = [];

    public function __construct()
    {
        if ($oldCart = Session::get('_cart_' . csrf_token() . '.list')) {
            static::$list = $oldCart;
        }
        if ($oldPromoCode = Session::get('_cart_' . csrf_token() . '.promo_code')) {
            static::$promo_code = $oldPromoCode;
        }
    }
    public function __destruct()
    {
        Session::put('_cart_' . csrf_token(), ['list' => static::$list, 'promo_code' => static::$promo_code]);
    }
    public static function add($id, $quantity)
    {
        $product = Product::where('item_id', $id)->where("lang", Config("ims.cur.lang"))->first();
        if (!$product) {
            abort(404);
        }
        // if cart is empty then this the first product
        if (!static::$list) {
            static::$list = [
                $id => [
                    "id" => $product->item_id,
                    "title" => $product->title,
                    "picture" => $product->picture,
                    "quantity" => 1,
                    "price" => $product->price_buy
                ]
            ];
            return true;
        }
        // if cart not empty then check if this product exist then increment quantity
        if (isset(static::$list[$id])) {
            static::$list[$id]['quantity']++;
            return true;
        }
        // // if item not exist in cart then add to cart with quantity = 1
        static::$list[$id] = [
            "id" => $product->item_id,
            "title" => $product->title,
            "picture" => $product->picture,
            "quantity" => 1,
            "price" => $product->price_buy
        ];
        return true;
    }

    public function update($request)
    {
        if ($request->id && $request->quantity) {
            static::$list[$request->id]["quantity"] = $request->quantity;
            return true;
        }
        if ($request->promo_code) {
            $promo = new PromoHotel();
            $promo = PromoHotel::select('code', 'value_type', 'value')
                ->where('code', $request->promo_code)
                ->where('is_show', '1')
                ->first();
            if ($promo){
                static::$promo_code = $promo->toArray();
                return true;
            } else {
                static::$promo_code = [];
                return true;
            }
        }
    }
    public function remove($request)
    {
        if ($request->id) {
            if (isset(static::$list[$request->id])) {
                unset(static::$list[$request->id]);
                return true;
            }
        }
    }

    public static function List()
    {
        return static::$list;
    }
    public static function Promo_Code()
    {
        return static::$promo_code;
    }
    public static function all()
    {
        return [static::$list, static::$promo_code];
    }
}
