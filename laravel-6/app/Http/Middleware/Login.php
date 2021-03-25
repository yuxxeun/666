<?php

namespace App\Http\Middleware;

use Closure;

class Login
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
        //pengecekan apakah pengguna sudah memiliki session
        if($request->session()->has('username')){
            return $next($request);
		}else{
			return redirect('/login');
		}
    }
}
