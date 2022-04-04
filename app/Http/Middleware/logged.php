<?php

namespace App\Http\Middleware;

use Closure;

class logged
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
        if($request->user() && $request->user()!=null)
        return $next($request);
        return redirect(route('login'));
    }
}
