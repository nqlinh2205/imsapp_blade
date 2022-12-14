<?php

use App\Models\Friendly_Link;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImagesController;

Route::get('/trung-tam-ho-tro', function(){
    return view("Pages.other.support");
 });
 Route::get('/dieu-khoan', function(){
    return view("Pages.other.rules");
 });
 Route::get('/bao-gia', function(){
    return view("Pages.other.quote");
 });


Route::any('/', [HomeController::class, 'Home'])->name('/');
// Images
Route::get('/uploads/{path?}', [ImagesController::class, 'uploads'])->where('path', '.*')->name('uploads');
Route::get('/thumbs/{path?}', [ImagesController::class, 'thumbs'])->where('path', '.*')->name('thumbs');
// //Home
// Route::controller(HomeController::class)->group(function () {
//     Route::get('/{home}', 'Home');
// });
// //News
// Route::controller(NewsController::class)->group(function () {
//     Route::get('/{news}', 'News');
// });

foreach (Friendly_Link::where('module', DB::raw('action'))->get() as $route_module) {
    Route::any($route_module->friendly_link)
        ->uses("App\Http\Controllers\\"
            . ucfirst($route_module->module)
            . "Controller@"
            . ucfirst($route_module->action))
        ->name($route_module->module);
    foreach (Friendly_Link::where('module', '!=', DB::raw('action'))
        ->where('module', $route_module->module)
        ->where('lang', $route_module->lang)
        ->groupBy('module', 'action', 'lang')
        ->get(['module', 'action', 'dbtable', 'dbtable_id', 'lang', 'friendly_link']) as $route_action) {
        if ($route_action->action == 'group') {
            Route::get($route_module->friendly_link . '/{' . $route_action->action . '}', function ($link) use ($route_module, $route_action) {
                $link = Friendly_Link::where('friendly_link', $link)->first();
                if ($route_module->module != $link->module) {
                    abort(404);
                }
                return App::call("App\Http\Controllers\\"
                    . ucfirst($route_action->module)
                    . "Controller@"
                    . ucfirst($route_action->action));
            })->name($route_action->module . "." . $route_action->action);
        } elseif ($route_action->action == 'detail') {
            Route::get($route_module->friendly_link . '/{group}' . '/{' . $route_action->action . '}', function ($link_group, $link_detail) use ($route_module, $route_action) {
                $group = Friendly_Link::where('friendly_link', $link_group)->firstOrFail();
                if ($route_module->module != $group->module) {
                    abort(404);
                }
                return App::call("App\Http\Controllers\\"
                    . ucfirst($route_action->module)
                    . "Controller@"
                    . ucfirst($route_action->action), ['link_detail' => $link_detail]);
            })->name($route_action->module . "." . $route_action->action);
        } else {
            Route::any($route_module->friendly_link . '/' . $route_action->friendly_link)
                ->uses("App\Http\Controllers\\"
                    . ucfirst($route_action->module)
                    . "Controller@"
                    . ucfirst($route_action->action))
                ->name($route_action->module . "." . $route_action->action);
        }
    }
}

Route::prefix('admin')->group(function(){
    Route::get('/dang-nhap', function(){ return view("admin.account.login");   });
    Route::get('/dang-ky', function(){ return view("admin.account.register");   });
    Route::get('/dang-ky-cong-ty', function(){ return view("admin.account.register_company");   });
    Route::get('/', function(){ return view("admin.dashboard.trangchutaikhoan");   });
    Route::get('/quan-ly-ten-mien', function(){ return view("admin.dashboard.quanlytenmien");   });
    Route::get('/ten-mien', function(){ return view("admin.dashboard.tenmien");   });
    Route::get('/cloud-hosting', function(){ return view("admin.dashboard.cloudhosting");   });
    Route::get('/ho-tro', function(){ return view("admin.dashboard.hotro");   });
    Route::get('/cac-yeu-cau-da-gui', function(){ return view("admin.dashboard.cacyeucaudagui");   });
    Route::get('/cai-dat-tai-khoan', function(){ return view("admin.dashboard.caidattaikhoan");   });
    Route::get('/thay-doi-thong-tin-tai-khoan', function(){ return view("admin.dashboard.thaydoithongtintaikhoan");   });
    Route::get('/thong-bao', function(){ return view("admin.dashboard.thongbao");   });
    Route::get('/hoat-dong', function(){ return view("admin.dashboard.hoatdong");   });
    Route::get('/danh-sach-don-hang', function(){ return view("admin.dashboard.danhsachdonhang");   });
    Route::get('/quan-ly-hop-dong', function(){ return view("admin.dashboard.quanlyhopdong");   });
    Route::get('/quan-ly-ban-khai', function(){ return view("admin.dashboard.quanlybankhai");   });
    Route::get('/tong-hop-giao-dich', function(){ return view("admin.dashboard.tonghopgiaodich");   });
    Route::get('/nap-tien', function(){ return view("admin.dashboard.naptien");   });

});