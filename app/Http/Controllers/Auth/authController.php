<?php
namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
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

class authController extends Controller
{
    use AuthenticatesAndRegistersUsers;

    protected $redirectPath = '/check';
    protected $username = 'account';

    public function __construct()
    {
        //$this->middleware('guest', ['except' => 'getLogout']);
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    public function register()
    {
        $account_data['account'] = 'test';
        $account_data['name'] = 'TEST';
        $account_data['password'] = bcrypt('test');
        return DB::table('users')->insertGetId($account_data);
    }

    public function logout()
    {
        Auth::logout();
        session()->flush();
        //return redirect()->route('/');
        return Redirect::to('/');
    }

    public function login(Request $request)
    {
        if(Auth::attempt([
            'account' => $request->input('account'),
            'password' => $request->input('password')
        ], $request->input('remember'))){
            return "login success!!";
        }else{
            return "login failed!!";
        }
    }

}