<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Page;
use Inertia\Inertia;
use App\Models\Banner;
use App\Models\AppGroup;
use Illuminate\Support\Arr;
use App\Models\Friendly_Link;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Banner_Group;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        // Config ------------------------------------------------------
        $default_lang = DB::table('lang')
            ->where('is_default', 1)
            ->where('is_show', 1)
            ->first();
        $uri = explode('/', Request()->path());
        $uri = end($uri);
        $friendly_link = Friendly_Link::where('friendly_link', $uri)->first();
        $friendly_link = $friendly_link ?? Friendly_Link::where('module', 'home')
            ->where('action', 'home')
            ->where('lang', $default_lang->name)
            ->first();
        Config::set('ims.cur', $friendly_link->toArray());
        $sysoptions = DB::table("sysoptions")->get()->pluck("option_value", "option_key");
        Config::set("ims.conf", $sysoptions->toArray());
        $ims = Config("ims");
        // IMS lang 
        $ims['global_lang'] = DB::table("global_lang")
            ->where("lang", Config("ims.cur.lang"))
            ->get()->pluck("lang_value", "lang_key");
        // MXH ------------------------------------------------------
        $ims['config_social'] = DB::table("config_social")
            ->where("lang", Config("ims.cur.lang"))
            ->get();

        // Header ------------------------------------------------------
        $ims['logo'] = Banner::select('title', 'content')
            ->where("group_name", "logo")
            ->first();
        $ims['menu'] = Menu::where(['group_id' => 'menu_header', 'parent_id' => 0, 'lang' => Config("ims.cur.lang"), 'is_show' => 1])
            ->with('subMenu')
            ->orderBy('show_order', 'DESC')
            ->get();
        $ims['menu_top'] = Menu::where(['group_id' => 'menu_top', 'parent_id' => 0, 'lang' => Config("ims.cur.lang"), 'is_show' => 1])
            ->with('subMenu')
            ->orderBy('show_order', 'DESC')
            ->first();
        $ims['banner_main'] = Banner::where("group_name", "banner-main")
            ->where(function ($query) use ($ims) {
                $query->where("show_mod", $ims['cur']['module'])
                    ->orWhere("show_mod", '');
            })
            ->get(['title', 'content', 'link']);
        $ims['banner_qrcode'] = Banner::where("group_name", "banner-zalo")
            ->where(function ($query) use ($ims) {
                $query->where("show_mod", $ims['cur']['module'])
                    ->orWhere("show_mod", '');
            })
            ->get(['title', 'content', 'link']);
        // Footer ------------------------------------------------------
        $ims['logo_footer'] = Banner::select('title', 'content', 'link')
            ->where("group_name", "logo-footer")
            ->first();
        $ims['info_footer'] = Banner::select('title', 'short')
            ->where("group_name", "info-footer")
            ->first();
        $array = $ims['info_footer']['short'];
        $ims['info_footer'] = explode("\r\n", $array);
        $ims['app_group'] = AppGroup::select('title', 'friendly_link')->where("is_focus", 1)->where("is_show", 1)->where("lang", Config("ims.cur.lang"))->get();

        $ims['couple_phone'] = Banner::select('title', 'short', 'content')->where("group_name", "banner-phone-couple")
        ->where("lang", Config("ims.cur.lang"))
        ->first();
        $ims['group_list_customer'] = Banner_Group::where("group_name", "banner-list-customer")->where("lang", Config("ims.cur.lang"))->first();
        $ims['list_customer'] = Banner::where("group_name", "banner-list-customer")->get();
        
        $ims['app_group'] = AppGroup::with('app')->where("is_show", 1)->where("is_focus", 1)->where("lang", Config("ims.cur.lang"))->get();
        
        
        return view()->share('ims', $ims);
    }
}
