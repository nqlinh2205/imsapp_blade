<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Banner_Group;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use App\Models\App;
use App\Models\Cart;
use App\Models\AppGroup;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class AppController extends Controller
{
    public function App(Request $request)
    {
        $data['setting'] = DB::table("app_setting")
            ->where("lang", Config("ims.cur.lang"))
            ->get();
        $data['setting'] = Arr::pluck($data['setting'], "setting_value", "setting_key");

        $data['list_app'] = DB::table("app")->join('app_group', 'app_group.group_id', '=', 'app.group_id')
            ->select(
                'app.friendly_link as detail_link',
                'app_group.friendly_link as group_link',
                'app.title as detail_title',
                'app.picture as detail_picture',
                'app.short as detail_short',
                'app.content as detail_content'
            )
            ->where('app_group.is_show', 1)
            ->where("app_group.lang", Config("ims.cur.lang"))
            ->orderBy('app_group.id', 'DESC')
            ->get();
        // dd($data['list_app']);

        $data['group_list_customer'] = Banner_Group::where("group_name", "banner-list-customer")->where("lang", Config("ims.cur.lang"))->first();
        $data['list_customer'] = Banner::where("group_name", "banner-list-customer")->get();

        $data['couple_phone'] = Banner::select('title', 'short', 'content')->where("group_name", "banner-phone-couple")
            ->where("lang", Config("ims.cur.lang"))
            ->first();

        $data['app_group'] = AppGroup::where('is_show', 1)->where('is_focus', 1)
            ->where("lang", Config("ims.cur.lang"))
            ->get();

        $data['group_service'] = Banner_Group::where("group_name", "banner-service")->where("lang", Config("ims.cur.lang"))->first();
        $data['service'] = Banner::where("group_name", "banner-service")->get(['title', 'content', 'short1']);
        foreach ($data['service'] as $k => $v) {
            $data['service'][$k]->short1 = explode("\r\n", $v->short1);
        }
        // dd(Config("ims.cur.module"));
        return view('pages.'.Config("ims.cur.module").".".Config("ims.cur.action"), [
            Config("ims.cur.module") => $data
        ]);

    }
    public function Group(Request $request)
    {

        $data['setting'] = DB::table("app_setting")
            ->where("lang", Config("ims.cur.lang"))
            ->get();
        $data['nav'] = Config("ims.cur.module");
        $data['setting'] = Arr::pluck($data['setting'], "setting_value", "setting_key");
        $data['app_group'] = AppGroup::where('is_show', 1)->where('is_focus', 1)
            ->where("lang", Config("ims.cur.lang"))
            ->get();
        //request url
        if ($request->has('tat-ca')) {
            $data['list_app'] = DB::table("app")->join('app_group', 'app_group.group_id', '=', 'app.group_id')
                ->select(
                    'app.friendly_link as detail_link',
                    'app_group.friendly_link as group_link',
                    'app.title as detail_title',
                    'app.picture as detail_picture',
                    'app.short as detail_short',
                    'app.content as detail_content',
                    'app.lang as detail_lang'
                )
                ->where('app_group.is_show', 1)
                ->where("app.lang", Config("ims.cur.lang"))
                ->where("app_group.lang", Config("ims.cur.lang"))
                ->orderBy('app_group.id', 'DESC')
                ->get();
        } else {
            $data['list_app'] = DB::table("app")->join('app_group', 'app_group.group_id', '=', 'app.group_id')
                ->select(
                    'app.friendly_link as detail_link',
                    'app_group.friendly_link as group_link',
                    'app.title as detail_title',
                    'app.picture as detail_picture',
                    'app.short as detail_short',
                    'app.content as detail_content',
                    'app.lang as detail_lang'
                )
                ->where('app_group.is_show', 1)
                ->where("app.lang", Config("ims.cur.lang"))
                ->where("app_group.lang", Config("ims.cur.lang"))
                ->where('app_group.group_id', Config("ims.cur.dbtable_id"))
                ->orderBy('app_group.id', 'DESC')
                ->get();
        }

        $data['group_service'] = Banner_Group::where("group_name", "banner-service")->where("lang", Config("ims.cur.lang"))->first();
        $data['service'] = Banner::where("group_name", "banner-service")->get(['title', 'content', 'short1']);
        foreach ($data['service'] as $k => $v) {
            $data['service'][$k]->short1 = explode("\r\n", $v->short1);
        }

        $data['group_list_customer'] = Banner_Group::where("group_name", "banner-list-customer")->where("lang", Config("ims.cur.lang"))->first();
        $data['list_customer'] = Banner::where("group_name", "banner-list-customer")->get();

        $data['couple_phone'] = Banner::select('title', 'short', 'content')->where("group_name", "banner-phone-couple")
            ->where("lang", Config("ims.cur.lang"))
            ->first();

            return view('pages.'.Config("ims.cur.module").".".Config("ims.cur.action"), [
                Config("ims.cur.module") => $data
            ]);
    }
    public function Detail(Request $request)
    {
        // dd(Config("ims.cur.dbtable_id"));
        $data['detail'] = DB::table("app")->join('app_group', 'app_group.group_id', '=', 'app.group_id')
            ->select(
                'app.friendly_link as detail_link',
                'app_group.friendly_link as group_link',
                'app.id             as  detail_id',
                'app.title          as  detail_title',
                'app.picture        as  detail_picture',
                'app.short1         as  detail_content',
                'app.group_id       as  detail_group_id',
                'app.arr_custom     as  detail_service',
                'app.arr_custom3    as  detail_feature',
                'app.arr_custom2    as  detail_benefit',
                'app.arr_custom1    as  detail_coop',
                'app.arr_custom4    as  detail_uiux',
                'app_group.picture  as  picture_group',
                'app_group.title    as  title_group',
            )
            ->where("app.item_id", Config("ims.cur.dbtable_id"))->where("app_group.lang", Config("ims.cur.lang"))->where("app.lang", Config("ims.cur.lang"))->first();
        $data['detail_service'] = unserialize($data['detail']->detail_service);
        $data['detail_feature'] = unserialize($data['detail']->detail_feature);
        $data['detail_benefit'] = unserialize($data['detail']->detail_benefit);
        if ($data['detail_benefit'] != null) {
            foreach ($data['detail_benefit'] as $key => $value) {
                $data['detail_benefit'][$key]["content"] = explode("\r\n", $value['content']);
            }
        }
        $data['detail_uiux'] = unserialize($data['detail']->detail_uiux);
        // dd($data['detail_uiux']);

        $data['detail_coop'] = unserialize($data['detail']->detail_coop);

        $data['group_list_customer'] = Banner_Group::where("group_name", "banner-list-customer")->where("lang", Config("ims.cur.lang"))->first();
        $data['list_customer'] = Banner::where("group_name", "banner-list-customer")->get();

        $data['app_related'] = App::select('app.id', 'title', 'picture', 'friendly_link as detail_link')
            ->where('group_id', $data['detail']->detail_group_id)
            ->where("lang", Config("ims.cur.lang"))
            ->where('is_show', 1)
            ->where('id', '!=', $data['detail']->detail_id)
            ->get();

        $data['group_list_customer'] = Banner_Group::where("group_name", "banner-list-customer")->where("lang", Config("ims.cur.lang"))->first();
        $data['list_customer'] = Banner::where("group_name", "banner-list-customer")->get();

        $data['couple_phone'] = Banner::select('title', 'short', 'content')->where("group_name", "banner-phone-couple")
            ->where("lang", Config("ims.cur.lang"))
            ->first();

        $data['setting'] = DB::table("app_setting")
            ->where("lang", Config("ims.cur.lang"))
            ->get();
        $data['setting'] = Arr::pluck($data['setting'], "setting_value", "setting_key");
        return view('pages.'.Config("ims.cur.module").".".Config("ims.cur.action"), [
            Config("ims.cur.module") => $data
        ]);
    }
}
