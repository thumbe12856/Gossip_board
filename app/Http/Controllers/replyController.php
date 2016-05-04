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

class replyController extends Controller
{
    static function get()
    {
        $replyData = DB::table('reply')
            ->join('users', 'reply.uid', '=', 'users.id')
            ->select('reply.*', 'users.name')
            ->get();
        return $replyData;
    }

    static function create(Request $request)
    {
        if(Auth::check()) {
            $reply_data['uid'] = Auth::user()->id;
            $reply_data['aid'] = $request->input('aid');
            $reply_data['content'] = $request->input('content');
            DB::table('reply')->insert($reply_data);
            return 0;
        } else {
            return 1;//error page
        }
    }
}