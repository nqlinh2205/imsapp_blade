<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;
use League\Glide\ServerFactory;
use Illuminate\Support\Str;
use League\Glide\Responses\LaravelResponseFactory;


class ImagesController extends Controller
{
    public function uploads(Filesystem $filesystem, $path = null)
    {
        try {
            $server = ServerFactory::create([
                'response' => new LaravelResponseFactory(app('request')),
                'source' => $filesystem->getDriver(),
                'cache' => $filesystem->getDriver(),
                'source_path_prefix' => 'public/uploads',
                'cache_path_prefix' => '.cache/uploads',
                'defaults' => [
                    'fm' => 'jpeg',
                ]
            ]);
            if(Str::endsWith($path, '.svg')){
                return response(Storage::get('public/uploads/' . $path))->header('Content-Type', 'image/svg+xml');
            }
            return $server->getImageResponse($path, request()->all());
        } catch (Exception $e) {
            return $server->getImageResponse('nophoto/nophoto.jpg', request()->all());
        }
    }

    public function thumbs(Filesystem $filesystem, $path = null)
    {
        try {
            $server = ServerFactory::create([
                'response' => new LaravelResponseFactory(app('request')),
                'source' => $filesystem->getDriver(),
                'cache' => $filesystem->getDriver(),
                'source_path_prefix' => 'public/thumbs',
                'cache_path_prefix' => '.cache/thumbs',
                'defaults' => [
                    'fm' => 'webp',
                ]
            ]);
            if(Str::endsWith($path, '.svg')){
                return response(Storage::get('public/thumbs/' . $path))->header('Content-Type', 'image/svg+xml');
            }
            // dd('thumbs');
            return $server->getImageResponse($path, request()->all());
        } catch (Exception $e) {
            return $server->getImageResponse('nophoto/nophoto.jpg', request()->all());
        }
    }
}
