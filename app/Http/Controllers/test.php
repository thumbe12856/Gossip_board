<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class test extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    function testDB()
    {
        if (Auth::check())
        {
            $user = Auth::user();
            $id = $user->id;
            $data = DB::table('test')->get();
            return view('test')
                ->with('data', $data);
        }
        else
        {
            return 'you are not login';
        }
    }
}
