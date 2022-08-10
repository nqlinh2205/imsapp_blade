<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\About;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class AboutController extends Controller
{
    public function About()
    {
        $data['nav'] = Config("ims.cur");
        $data['about_list'] = About::where("lang", Config("ims.cur.lang"))->first();
        $data['setting'] = DB::table("about_setting")
            ->where("lang", Config("ims.cur.lang"))
            ->get();
        $data['setting'] = Arr::pluck($data['setting'], "setting_value", "setting_key");
        $data['lang'] = DB::table("about_lang")
            ->where("lang", Config("ims.cur.lang"))
            ->get();
        $data['lang'] = Arr::pluck($data['lang'], "lang_value", "lang_key");
        return Inertia::render(
            ucfirst(Config("ims.cur.module")) . "/" . ucfirst(Config("ims.cur.action")),
            [Config("ims.cur.module") => $data]
        );
    }
}
