<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class RoleValidation
{
    /* @param  \Illuminate\Http\Request  $request
    * @param  \Closure  $next
    * @return mixed
    */
    public function handle($request, Closure $next, $role)
    {
        $response_data['response_status'] = 1;

        if(!Auth::check())
            return response()->json($response_data);

        switch($role) {
            case 'user':
                if(Auth::user()->types == 0)
                return $next($request);
            break;
        }
        return response()->json($response_data);
    }
}
