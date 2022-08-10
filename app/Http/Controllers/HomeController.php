<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Banner_Group;
use App\Models\About;
use App\Models\AppGroup;
use App\Models\App;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function Home (Request $request)
    {
        $data['app_group'] = AppGroup::where("is_show", 1)->where("is_focus", 1)->where("lang", Config("ims.cur.lang"))->get();

        $data['app_group_banner'] = AppGroup::where("is_show", 1)->where("is_show_menu", 1)->where("lang", Config("ims.cur.lang"))->get();

        $data['group_banner_solution'] = Banner_Group::where("group_name", "banner-solution")->where("lang", Config("ims.cur.lang"))->first();
        $data['list_solution'] = Banner::where("group_name", "banner-solution")->get();
        foreach($data['list_solution'] as $k => $v)
        {
            $data['arr_custom'] = $data['list_solution'][$k]->arr_custom = unserialize($v->arr_custom);
        }

        $data['group_banner_process'] = Banner_Group::where("group_name", "banner-procedure")->where("lang", Config("ims.cur.lang"))->first();
        $data['page_process'] = Banner::where("group_name", "banner-procedure")->first();
        $data['page_process']->arr_custom = unserialize($data['page_process']->arr_custom);

        $data['number_data'] = Banner::where("group_name", "banner-number-data")->first();
        $data['number_data']->arr_custom = unserialize($data['number_data']->arr_custom);

        $data['page_reason'] = Banner::where("group_name", "banner-reason")->first();
        $data['page_reason']->arr_custom = unserialize($data['page_reason']->arr_custom);

        $data['group_list_customer'] = Banner_Group::where("group_name", "banner-list-customer")->where("lang", Config("ims.cur.lang"))->first();
        $data['list_customer'] = Banner::where("group_name", "banner-list-customer")->get();

        $data['list_app'] = DB::table("app")->join('app_group', 'app_group.group_id', '=', 'app.group_id')
            ->select('app.friendly_link as detail_link', 'app_group.friendly_link as group_link',
                    'app.title as detail_title',
                    'app.picture as detail_picture',
            )
            ->where('app_group.is_show', 1)
            ->where("app_group.lang", Config("ims.cur.lang"))
            ->orderBy('app_group.id', 'DESC')
            ->get();
        if (request()->isMethod('post')) {
            request()->has('group_app');
            dd($request);
        }
        $data['banner_main'] = Banner::select('title', 'short', 'content')->where("group_name", "banner-main")
            ->where('show_mod', 'home')
            ->where("lang", Config("ims.cur.lang"))
            ->first();

        $data['couple_phone'] = Banner::select('title', 'short', 'content')->where("group_name", "banner-phone-couple")
            ->where("lang", Config("ims.cur.lang"))
            ->first();
        
        $data['setting'] = DB::table("home_setting")
            ->where("lang", Config("ims.cur.lang"))
            ->get();
        $data['setting'] = Arr::pluck($data['setting'], "setting_value", "setting_key");

        return view('pages.'.Config("ims.cur.module").".".Config("ims.cur.action"), [
            Config("ims.cur.module") => $data
        ]);
    }
}
