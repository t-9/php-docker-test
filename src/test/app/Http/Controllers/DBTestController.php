<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DBTestController extends Controller
{
    /**
     * testテーブル全データ表示
     *
     * @return Response
     */
    public function index()
    {
        $rows = DB::select('select name from test');

        return view('dbtest', ['rows' => $rows]);
    }
}