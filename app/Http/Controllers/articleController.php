<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Auth\authController;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Redirect;


/*
* the new use
*/
use Auth;
use DB;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;

class articleController extends Controller
{
    static function get()
    {
        if(Auth::check()) {
            $articleData = DB::table('articles')
                ->join('users', 'articles.uid', '=', 'users.id')
                ->select('articles.*', 'users.name')
                ->get();
            $replyData = replyController::get();

            for($j = 0; $j < count($articleData); $j++) {
                if($articleData[$j]->updated_at != '0000-00-00 00:00:00') $latestDate = $articleData[$j]->updated_at;
                else $latestDate = $articleData[$j]->created_at;
                $articleData[$j]->reply = [];
                for ($i = 0; $i < count($replyData); $i++) {
                    if($replyData[$i]->aid == $articleData[$j]->id) {
                        /*for($k = 0; $k<strlen($replyData[$i]->content); $k++)
                            if($replyData[$i]->content[$k] == "\n") $replyData[$i]->content[$k] = -1;*/
                        array_push($articleData[$j]->reply, $replyData[$i]);
                        if($latestDate < $replyData[$i]->created_at) $latestDate = $replyData[$i]->created_at;
                    }
                }
                $articleData[$j]->latestDate = $latestDate;
            }
            return $articleData;
        } else {
            return 1;//error page
        }
    }

    static function create(Request $request)
    {
        if(Auth::check()) {
            $article_data['uid'] = Auth::user()->id;
            $article_data['title'] = $request->input('title');
            $article_data['content'] = $request->input('content');
            $article_data['status'] = 0;
            DB::table('articles')->insert($article_data);
            return 0;
        } else {
            return 1;//error page
        }
    }
}