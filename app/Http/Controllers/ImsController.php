<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Menu;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;
use App\Models\Emaillist;

class ImsController extends Controller
{
    public function index($url = null, Request $request)
    {
        $friendly_link = null;
        if ($url) {
            $friendly_link = DB::table("friendly_link")
                ->where("friendly_link", $url)->first();
            Config::set("ims.cur." . $friendly_link->lang, $friendly_link);
            $friendly_link_lang = DB::table("friendly_link")
                ->where('dbtable', $friendly_link->dbtable)
                ->where('dbtable_id', $friendly_link->dbtable_id)
                ->where('lang', '!=', $friendly_link->lang)
                ->get();
            foreach ($friendly_link_lang as $r) {
                Config::set("ims.cur." . $r->lang, $r);
            }
        } else {
            $friendly_link = DB::table("friendly_link")
                ->where([
                    'module' => 'home',
                    'action' => 'home'
                ])->first();
            Config::set("ims.cur." . $friendly_link->lang, $friendly_link);
            $friendly_link_lang = DB::table("friendly_link")
                ->where('dbtable', $friendly_link->dbtable)
                ->where('dbtable_id', $friendly_link->dbtable_id)
                ->where('lang', '!=', $friendly_link->lang)
                ->get();
            foreach ($friendly_link_lang as $r) {
                Config::set("ims.cur." . $r->lang, $r);
            }
        }
    }
}
