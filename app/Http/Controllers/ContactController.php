<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Arr;

class ContactController extends Controller
{
  public function Contact(Request $request)
  {
    $data['setting'] = DB::table("contact_setting")
      ->where("lang", Config("ims.cur.lang"))
      ->get();
    $data['setting'] = Arr::pluck($data['setting'], "setting_value", "setting_key");
    $data['lang'] = DB::table("contact_lang")->where("lang", Config("ims.cur.lang"))->get();
    $data['lang'] = Arr::pluck($data['lang'], "lang_value", "lang_key");
    $data['global_lang'] = DB::table("global_lang")
      ->where("lang", Config("ims.cur.lang"))
      ->get();
    $data['global_lang'] = Arr::pluck($data['global_lang'], "lang_value", "lang_key");
    $data['banner_main'] = Banner::where("group_name", "banner-main")->where("lang", Config("ims.cur.lang"))
      ->where(function ($query) {
        $query->where("show_mod", 'contact')
          ->orWhere("show_mod", '');
      })
      ->get(['title', 'content', 'link', 'short']);
    $data['map'] = DB::table('contact_map')->where("is_show", 1)->where("lang", Config("ims.cur.lang"))->first();
    $data['sacombank'] = explode("\r\n", $data['map']->short);
    $data['dongabank'] = explode("\r\n", $data['map']->short1);
    $data['acbbank'] = explode("\r\n", $data['map']->short2);
    if ($request->isMethod('post')) {
      if ($request->has('send')) {
        $request->validate(
          [
            'full_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'content' => 'required',
          ],
          [
            'full_name.required' => 'Vui lòng nhập Họ và tên',
            'email.required' => 'Vui lòng nhập Email',
            'phone.required' => 'Vui lòng nhập Số điện thoại',
            'content.required' => 'Vui lòng nhập nội dung',
          ]
        );
        $contact = new Contact;
        $contact['full_name'] = $request->full_name;
        $contact['email'] = $request->email;
        $contact['phone'] = $request->phone;
        $contact['content'] = $request->content;
        $contact['date_create'] = time();
        $contact['date_update'] = time();
        $contact->save();
      }
    }
    // $data['test'] = ProductGroup::where('group_id', 1)->where('is_show', 1)->where("lang", Config("ims.cur.lang"))->with('products')->get();
    // dd($data);
    return view('pages.'.Config("ims.cur.module").".".Config("ims.cur.action"), [
      Config("ims.cur.module") => $data,
    ]);

   
  }
}
