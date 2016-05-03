<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Redirect;

class home extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    function index()
    {
        if (Auth::check())
        {
            $user = Auth::user();
            $id = $user->id;
            $data = DB::table('test')->get();
            return view('index')
                ->with('data', $data);
        } else {
            return Redirect::to('/login');
        }
    }

    function login($status = null)
    {
        return view('auth/login')->with('status', $status);
    }

    function register($status = null)
    {
        return view('auth/register')->with('status', $status);
    }
}
