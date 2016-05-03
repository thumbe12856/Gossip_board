<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Exception\HttpResponseException;
//use Lib\Utils;
use App\Http\Middleware\lib\Utils;

class GuardValidation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */



    public function handle($request, Closure $next)
    {
        try {
            return Utils::guardValidateFail(function() use ($request, $next) {
                return $next($request);
            });
        } catch(HttpResponseException $e) {
            return $e->getResponse();
        }
    }
}
