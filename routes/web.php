<?php

use App\Models\Friendly_Link;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImagesController;


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