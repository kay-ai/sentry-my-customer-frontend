<?php

namespace App\Http\Middleware;

use Closure;

class AuthToken
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
        $token = $request->header('APP_KEY');
        $auth_token = $request->cookie('api_token');

        /*You can test if this is working properly by
        changing $auth_token to maybe ABC and sending a
        get request to an api route using the header APP_KEY=ABC*/
        if($token != $auth_token){
            return response()->json(['message' => 'App Key not found'], 401);
        }
        return $next($request);
    }
}
