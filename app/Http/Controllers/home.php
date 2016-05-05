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
            $article_data = articleController::get('articles.id', '<>', 0);
            return view('index')
                ->with('articleData', $article_data);
        } else {
            return Redirect::to('/login');
        }
    }

    function recent()
    {
        if (Auth::check())
        {
            $article_data = articleController::get('articles.uid', '=', Auth::user()->id);
            unset($article_data[5]);
            return view('index')
                ->with('articleData', $article_data);
        } else {
            return Redirect::to('/login');
        }
    }

    function article($id)
    {
        if (Auth::check())
        {
            $article_data = articleController::get('articles.id', '=', $id);
            return view('/article')
                ->with('articleData', $article_data);
        } else {
            return Redirect::to('/');
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
