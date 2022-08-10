<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Emaillist;

class SupportController extends Controller
{
    public function emaillist(Request $request)
    {
        Emaillist::create($request->all());
        return response()->json([
            'status' => 200,
            'message' => 'Gửi thành công'
        ]);
    }
}
