<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Cart;
use App\Models\ProdOrderDetail;
use App\Models\Pro_order;
use App\Models\ProductGroup;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function Product(Request $request)
    {
        $data['setting'] = DB::table("product_setting")
            ->where("lang", Config("ims.cur.lang"))
            ->get();
        $data['setting'] = Arr::pluck($data['setting'], "setting_value", "setting_key");
        $data['list_prod'] = Product::where('is_show', 1)->where("lang", Config("ims.cur.lang"))->orderBy('date_create', 'DESC')->paginate($data['setting']['num_list'])->onEachSide(1);
        $data['product_group'] = ProductGroup::where('is_show', 1)
            ->where("lang", Config("ims.cur.lang"))
            ->get();
        return Inertia::render(
            ucfirst(Config("ims.cur.module")) . "/" . ucfirst(Config("ims.cur.action")),
            [Config("ims.cur.module") => $data]
        );
    }
    public function Group(Request $request)
    {
        $data['setting'] = DB::table("product_setting")
            ->where("lang", Config("ims.cur.lang"))
            ->get();
        $data['setting'] = Arr::pluck($data['setting'], "setting_value", "setting_key");
        $data['product_group'] = ProductGroup::where('is_show', 1)
            ->where("lang", Config("ims.cur.lang"))
            ->get();
        $data['list_product'] = Product::where('group_id', Config("ims.cur.dbtable_id"))->where('is_show', 1)->orderBy('date_create', 'DESC')->where("lang", Config("ims.cur.lang"))->paginate($data['setting']['num_list'])->onEachSide(1);
        return Inertia::render(
            ucfirst(Config("ims.cur.module")) . "/" . ucfirst(Config("ims.cur.action")),
            [Config("ims.cur.module") => $data]
        );
    }
    public function Detail(Request $request)
    {
        $i = Config("ims.cur");
        $data['friendly_link'] = Config("ims.cur.friendly_link");
        $data['detail'] = DB::table("product_detail")->join('product', 'item_id', '=', 'product_id')
            ->where("product_id", $i["dbtable_id"])
            ->where("product.lang", Config("ims.cur.lang"))
            ->where("product_detail.lang", Config("ims.cur.lang"))
            ->first();
        if ($data['detail'] != null) {
            $cate = $data['detail'];
            $data['detail_content'] = $cate->content;
            if ($request->has('dac-diem')) {
                $data['detail_content'] = $cate->content;
            } elseif ($request->has('thong-so')) {
                $data['detail_content'] = $cate->short1;
            }
            $data['product_cate'] = DB::table("product_detail")->join('product', 'item_id', '=', 'product_id')->where("product.lang", Config("ims.cur.lang"))->where("product_detail.lang", Config("ims.cur.lang"))->where('group_nav', $cate->group_nav)->get();
            $data['detail_img'] = unserialize($data['detail']->arr_picture);
            $data['detail_img'][] = $data['detail']->picture;
        } else {
            // return redirect(route('Home.Home.vi'));
            // return redirect(Config("ims.cur.lang") == 'vi'?'/san-pham':'/product');
        }
        $data['setting'] = DB::table("product_setting")
            ->where("lang", Config("ims.cur.lang"))
            ->get();
        $data['setting'] = Arr::pluck($data['setting'], "setting_value", "setting_key");
        return Inertia::render(
            ucfirst(Config("ims.cur.module")) . "/" . ucfirst(Config("ims.cur.action")),
            [Config("ims.cur.module") => $data]
        );
    }
    public function Ordering_cart(Request $request)
    {
        $data['nav'] = Config("ims.cur");
        $cart = new Cart();
        if (request()->isMethod('post')) {
            if (request()->has('add')) {
                Cart::add($request->id, $request->quantity);
            } elseif (request()->has('update')) {
                $cart->update($request);
            }
        }
        $data['cart'] = $cart->List();
        $data['method'] = DB::table('order_method')->where('is_show', 1)->where("lang", Config("ims.cur.lang"))->get();
        $data['setting'] = DB::table("product_setting")
            ->where("lang", Config("ims.cur.lang"))
            ->get();
        $data['setting'] = Arr::pluck($data['setting'], "setting_value", "setting_key");
        return Inertia::render(
            ucfirst(Config("ims.cur.module")) . "/" . ucfirst(Config("ims.cur.action")),
            [Config("ims.cur.module") => $data]
        );
    }
    public function Ordering_method(Request $request)
    {
        $data['nav'] = Config("ims.cur");
        $cart = new Cart();
        if ($request->isMethod('post')) {
            if ($request->has('checkout')) {
                $cart_i = Cart::List();
                if ($cart_i) {
                    $request->merge([
                        'cart' => $cart_i,
                    ]);
                }
                $request->validate(
                    [
                        'cart' => 'required',
                    ],
                    [
                        'cart.required' => 'Vui lòng chọn sản phẩm',
                    ]
                );
                $user_id_login = Session::get('user_id');
                if ($user_id_login) {
                    return redirect(Config("ims.cur.lang") == 'vi' ? '/thanh-toan' : 'pay');
                }
            } elseif ($request->has('register')) {
                $request->validate(
                    [
                        'username' => ['required', 'max:191', 'unique:user'],
                        'password' => 'min:8|required_with:password_complete|same:password_complete',
                        'password_complete' => 'required', 'min:8',
                        'phone' => ['required', 'min:10'],
                        'email' => ['required', 'email', 'max:255', 'unique:user'],
                        'address' => 'required',
                    ],
                    [
                        'username.required' => 'Vui lòng nhập tên đăng nhập',
                        'username.unique' => 'Tên đăng nhập đã tồn tại',
                        'password.required' => 'Vui lòng nhập password',
                        'password.same' => 'Vui lòng nhập đúng password',
                        'password.min' => 'Vui lòng nhập trên 8 ký tự',
                        'password_complete.required' => 'Vui lòng nhập lại password',
                        'phone.required' => 'Vui lòng nhập số điện thoại',
                        'email.required' => 'Vui lòng nhập email',
                        'email.unique' => 'Email đã tồn tại',
                        'address.required' => 'Vui lòng nhập địa chỉ',
                    ]
                );
                $user_login = new User;
                $user_login['username'] = $request->username;
                $user_login['password'] = $request->password;
                $user_login['phone'] = $request->phone;
                $user_login['email'] = $request->email;
                $user_login['address'] = $request->address;
                $user_login['date_create'] = time();
                $user_login->save();
            }
        }
        $data['cart'] = $cart->List();
        $data['setting'] = DB::table("product_setting")
            ->where("lang", Config("ims.cur.lang"))
            ->get();
        $data['setting'] = Arr::pluck($data['setting'], "setting_value", "setting_key");
        return Inertia::render(
            ucfirst(Config("ims.cur.module")) . "/" . ucfirst(Config("ims.cur.action")),
            [Config("ims.cur.module") => $data]
        );
    }
    public function Ordering_complete(Request $request)
    {
        $data['nav'] = Config("ims.cur");
        $data['setting'] = DB::table("product_setting")
            ->where("lang", Config("ims.cur.lang"))
            ->get();
        $data['setting'] = Arr::pluck($data['setting'], "setting_value", "setting_key");
        return Inertia::render(
            ucfirst(Config("ims.cur.module")) . "/" . ucfirst(Config("ims.cur.action")),
            [Config("ims.cur.module") => $data]
        );
    }
    public function Combo(Request $request)
    {
        $cart = new Cart();
        if ($request->isMethod('post')) {
            if ($request->has('login')) {
                $request->validate(
                    [
                        'username' => 'required',
                        'password' => 'required',
                    ],
                    [
                        'username.required' => 'Vui lòng nhập tên đăng nhập',
                        'password.required' => 'Vui lòng nhập password',
                    ]
                );
                $user = User::where('username', $request->username)->where('password', $request->password)->first();
                if ($user) {
                    Session::put('username', $user->username);
                    Session::put('user_id', $user->user_id);
                    return redirect(Config("ims.cur.lang") == 'vi' ? '/thanh-toan' : 'pay');
                } else {
                    return redirect(Config("ims.cur.lang") == 'vi' ? '/dang-nhap' : '/login');
                }
            } elseif ($request->has('save')) {
                $request->validate(
                    [
                        'method' => 'required',
                    ],
                    [
                        'method.required' => 'Vui lòng chọn phương thức thanh toán',
                    ]
                );
                $room_o = new Pro_order;
                $room_o['o_full_name'] = $request->username;
                $room_o['o_email'] = $request->email;
                $room_o['o_phone'] = $request->phone;
                $room_o['d_address'] = $request->address;
                $room_o['method'] = $request->method;
                $room_o['request_more'] = $request->o_note;
                $room_o['date_create'] = time();
                $room_o['lang'] = Config("ims.cur.lang");
                if ($room_o->save()) {
                    $cart_i = Cart::List();
                    if ($cart_i) {
                        foreach ($cart_i as $k => $v) {
                            $room_d = new ProdOrderDetail;
                            $room_d['order_id'] = $room_o->order_id;
                            $room_d['title'] = $v['title'];
                            $room_d['picture'] = $v['picture'];
                            $room_d['price_buy'] = $v['price'] ?? 0;
                            $room_d['quantity'] = $v['quantity'];
                            $room_d['type'] = 'product';
                            $room_d['type_id'] = $k;
                            $room_d['date_create'] = time();
                            $room_d->save();
                        }
                    }
                }
                Session::flush('_cart_' . csrf_token() . '.list');
                return redirect(Config("ims.cur.lang") == 'vi' ? '/san-pham' : '/product');
            }
        }
        $data['user'] = User::where('username', Session::get('username'))->where('user_id', Session::get('user_id'))->first();
        $data['cart'] = $cart->List();
        $data['nav'] = Config("ims.cur");
        $data['method'] = DB::table('order_method')->where('is_show', 1)->where("lang", Config("ims.cur.lang"))->get();
        $data['setting'] = DB::table("product_setting")
            ->where("lang", Config("ims.cur.lang"))
            ->get();
        $data['setting'] = Arr::pluck($data['setting'], "setting_value", "setting_key");
        return Inertia::render(
            ucfirst(Config("ims.cur.module")) . "/" . ucfirst(Config("ims.cur.action")),
            [Config("ims.cur.module") => $data]
        );
    }
}
