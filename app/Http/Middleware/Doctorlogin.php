<?php

namespace App\Http\Middleware;
use Session;
use Closure;

class Doctorlogin
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
        if(empty(Session::has('doctorSession'))){
            return redirect('/admin/doctor');
        }
        return $next($request);
    }
}
