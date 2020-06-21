<?php

namespace App\Http\Middleware;

use Closure;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $params)
    {
        if($params === 'auth') {
            if(!$request->expectsJson()) {
                return redirect()->route('admin.login');
            } 
            return $next($request);
        } else if($params === 'admin') {
            dd($request->user());
        }
    }
}
