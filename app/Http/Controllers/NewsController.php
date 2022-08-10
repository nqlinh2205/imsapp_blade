<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Banner;
use App\Models\NewsGroup;
use App\Models\Banner_Group;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function News()
    {
        $data['news_list'] = News::with('news_group')->where("lang", Config("ims.cur.lang"))->orderBy('id','DESC')->limit(3)->get();
        $data['news_list_topview'] = News::with('news_group')->where("lang", Config("ims.cur.lang"))->orderBy('num_view','DESC')->limit(3)->get();
        $data['news_list_event'] = News::with('news_group')->where("lang", Config("ims.cur.lang"))->where('group_id',3)->limit(4)->get();
        $data['news_list_tech'] = News::with('news_group')->where("lang", Config("ims.cur.lang"))->where('group_id',5)->limit(4)->get();
        $data['news_group'] = DB::table('news_group')->where("lang", Config("ims.cur.lang"))->orderBy('id','ASC')->get();
        
        
        $data['group_list_customer'] = Banner_Group::where("group_name", "banner-list-customer")->where("lang", Config("ims.cur.lang"))->first();
        $data['list_customer'] = Banner::where("group_name", "banner-list-customer")->get();

        $data['couple_phone'] = Banner::select('title', 'short', 'content')->where("group_name", "banner-phone-couple")
            ->where("lang", Config("ims.cur.lang"))
            ->first();
            
        $data['setting'] = DB::table("news_setting")->where("lang", Config("ims.cur.lang"))->get();
        $data['setting'] = Arr::pluck($data['setting'], "setting_value", "setting_key");
        
        $data['home_setting'] = DB::table("home_setting")->where("lang", Config("ims.cur.lang"))->get();
        $data['home_setting'] = Arr::pluck($data['home_setting'], "setting_value","setting_key");

        $data['banner_main'] = Banner::where("group_name", "banner-main")->where("lang", Config("ims.cur.lang"))->where(function ($query) {
                $query->where("show_mod", 'news')->orWhere("show_mod", '');
            })
            ->get(['title', 'content', 'link']);

        return view('pages.'.Config("ims.cur.module").".".Config("ims.cur.action"), [
                Config("ims.cur.module") => $data,
        ]);
 
    }
    public function Detail(Request $request, $link_detail)
    {
        $i = Config("ims.cur");
        $data['friendly_link'] = Config("ims.cur.friendly_link");
       

        $data['news_detail'] = News::with('news_group')->where("lang", Config("ims.cur.lang"))->where('item_id', $i['dbtable_id'])->where('is_show', 1)->first();
    
        if($request->route("group") != $data['news_detail']->news_group->friendly_link){
            abort(404);
        }
        $data['news_detail']->num_view +=1;
        $data['news_detail']->save();

        $data['news_list_topview'] = News::with('news_group')->where("lang", Config("ims.cur.lang"))->orderBy('num_view', 'DESC')->limit(5)->get();

        $data['news_list_related'] = News::with('news_group')->where("lang", Config("ims.cur.lang"))
            ->where('group_id', $data['news_detail']->group_id)
            ->where('is_show', 1)
            ->where('item_id', '<>', $data['news_detail']->item_id)
            ->orderBy('id', 'DESC')
            ->inRandomOrder()
            ->take(4)
            ->get();

        $data['news_group'] = DB::table('news_group')->select('title', 'friendly_link')->where('group_id', $data['news_detail']->group_id)->where("lang", Config("ims.cur.lang"))->where('is_show', 1)->first();

        $data['setting'] = DB::table("news_setting")->where("lang", Config("ims.cur.lang"))->get();
        $data['setting'] = Arr::pluck($data['setting'], "setting_value", "setting_key");

        $data['home_setting'] = DB::table("home_setting")->where("lang", Config("ims.cur.lang"))->get();
        $data['home_setting'] = Arr::pluck($data['home_setting'], "setting_value","setting_key");
        
        $data['banner_main'] = Banner::where("group_name", "banner-main")->where("lang", Config("ims.cur.lang"))->where("show_mod", 'news')->get(['title', 'content', 'link']);
        $data['lang'] = DB::table("news_lang")->where("lang", Config("ims.cur.lang"))->get();
        $data['lang'] = Arr::pluck($data['lang'], "lang_value", "lang_key");

        return view('pages.'.Config("ims.cur.module").".".Config("ims.cur.action"), [
            Config("ims.cur.module") => $data,
    ]);
    }
    public function Group(Request $request){

        $data['news_group'] = DB::table('news_group')
            ->where("lang", Config("ims.cur.lang"))
            ->where('friendly_link',$request->group)
            ->first();

        $data['news_list'] = News::with('news_group')
            ->where("lang", Config("ims.cur.lang"))
            ->where('group_id',$data['news_group']->group_id)
            ->orderBy('id','DESC')
            ->limit(6)->get();
        $data['news_list_topview'] = News::with('news_group')
            ->where("lang", Config("ims.cur.lang"))
            ->where('group_id',$data['news_group']->group_id)
            ->orderBy('num_view','DESC')
            ->limit(5)->get();
        $data['news_list_group'] = News::with('news_group')
            ->where("lang", Config("ims.cur.lang"))
            ->where('group_id',$data['news_group']->group_id)
            ->orderBy('id','DESC')
            ->get();
        $data['setting'] = DB::table("news_setting")
            ->where("lang", Config("ims.cur.lang"))
            ->get();
        $data['setting'] = Arr::pluck($data['setting'], "setting_value", "setting_key");

        $data['home_setting'] = DB::table("home_setting")
            ->where("lang", Config("ims.cur.lang"))
            ->get();
        $data['home_setting'] = Arr::pluck($data['home_setting'], "setting_value","setting_key");

        $data['group_list_customer'] = Banner_Group::where("group_name", "banner-list-customer")->where("lang", Config("ims.cur.lang"))->first();
        $data['list_customer'] = Banner::where("group_name", "banner-list-customer")->get();
        
        $data['couple_phone'] = Banner::select('title', 'short', 'content')->where("group_name", "banner-phone-couple")
            ->where("lang", Config("ims.cur.lang"))
            ->first();

            // return response()->json($data);
            return view('pages.'.Config("ims.cur.module").".".Config("ims.cur.action"), [
                Config("ims.cur.module") => $data,
        ]);
    }

}

