<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use App\Models\Page;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;
use App\Models\PageGroup;
use App\Models\Banner_Group;

class PageController extends Controller
{
    public function Page()
    {
        // 0: Dịch vụ đã bao gồm
        // 1: Tính năng nổi bật
        // 2: Lợi ích mang lại
        // 3: Hợp tác cùng chúng tôi
        $data['page_group'] = PageGroup::with('page')->where("lang", Config("ims.cur.lang"))->orderBy('id', 'ASC')->get();

        foreach ($data['page_group'][2]['page'] as $key => $value) {
            $data['page_group'][2]['page'][$key]->content = str_replace(['&lt;p&gt;', '&lt;/p&gt;'], '', $value->content);
            $data['page_group'][2]['page'][$key]->content = explode("&lt;br /&gt;", $value->content);
        }

        foreach ($data['page_group'][3]['page'] as $key => $value) {
            $arr = unserialize($data['page_group'][3]['page'][$key]->arr_custom);
            $arr_custom = [];
            foreach ($arr as $k) {
                $arr_custom[] = $k;
            }
            $data['page_group'][3]['page'][$key]->arr_custom = $arr_custom;
        }


        $data['group_list_customer'] = Banner_Group::where("group_name", "banner-list-customer")->where("lang", Config("ims.cur.lang"))->first();
        $data['list_customer'] = Banner::where("group_name", "banner-list-customer")->get();

        $data['page_option'] = Page::where("lang", Config("ims.cur.lang"))->get();
        $data['page_content'] = Page::where("lang", Config("ims.cur.lang"))->first();
        $data['setting'] = DB::table("page_setting")
            ->where("lang", Config("ims.cur.lang"))
            ->get();
        $data['setting'] = Arr::pluck($data['setting'], "setting_value", "setting_key");
        $data['home_setting'] = DB::table("home_setting")
            ->where("lang", Config("ims.cur.lang"))
            ->get();
        $data['home_setting'] = Arr::pluck($data['home_setting'], "setting_value", "setting_key");
        $data['global_lang'] = DB::table("global_lang")
            ->where("lang", Config("ims.cur.lang"))
            ->get();
        $data['global_lang'] = Arr::pluck($data['global_lang'], "lang_value", "lang_key");
        $data['banner_main'] = Banner::select('title', 'short', 'content')->where("group_name", "banner-main")
            ->where('show_mod', 'page')
            ->where("lang", Config("ims.cur.lang"))
            ->first();
        return Inertia::render(
            ucfirst(Config("ims.cur.module")) . "/" . ucfirst(Config("ims.cur.action")),
            [Config("ims.cur.module") => $data]
        );
    }
    public function Detail()
    {
        $data['page_option'] = Page::where("lang", Config("ims.cur.lang"))->get();
        $i = Config("ims.cur");
        $data['detail'] = DB::table("page")
            ->where("lang", Config("ims.cur.lang"))
            ->where("item_id", $i["dbtable_id"])
            ->first();
        $data['setting'] = DB::table("page_setting")
            ->where("lang", Config("ims.cur.lang"))
            ->get();
        $data['setting'] = Arr::pluck($data['setting'], "setting_value", "setting_key");
        $data['global_lang'] = DB::table("global_lang")
            ->where("lang", Config("ims.cur.lang"))
            ->get();
        $data['global_lang'] = Arr::pluck($data['global_lang'], "lang_value", "lang_key");
        $data['lang'] = DB::table("contact_lang")->where("lang", Config("ims.cur.lang"))->get();
        $data['lang'] = Arr::pluck($data['lang'], "lang_value", "lang_key");
        return Inertia::render(
            ucfirst(Config("ims.cur.module")) . "/" . ucfirst(Config("ims.cur.action")),
            [Config("ims.cur.module") => $data]
        );
    }
}
