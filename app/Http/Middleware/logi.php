<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class logi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $r, Closure $next)
    {
		if($r->session()->has('login')){
			//$u_name = DB::table('users')->value('name');
			return $next($request);
		}else{
			return redirect()->route('/');
		}
    }
}
