<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class CacheTestController extends Controller
{
    /**
     * キャッシュ表示
     *
     * @return Response
     */
    public function index()
    {
        if (Cache::has('key')) {
            Cache::increment('key');
        } else {
            Cache::put('key', 1);
        }
        
        $cachetest = Cache::get('key');

        return view('cachetest', ['cachetest' => $cachetest]);
    }
}