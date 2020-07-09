<?php

namespace App\Http\Middleware;

use Closure;

class SuperAdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        // $expires = $request->cookie('expires');
        // $expires = intval($expires);

        if ($request->cookie('user_role') == 'super_admin') {

            // Uncomment below when sms verification is working
            // if (!$request->cookie('is_active') && $request->path() != 'backend/activate') {
            //     return redirect()->route('activate.user');
            // }

            return $next($request);
        }
        return redirect()->route('dashboard');
    }
}
