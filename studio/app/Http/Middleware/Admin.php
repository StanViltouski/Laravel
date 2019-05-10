<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Auth;

class Admin {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        
        if(Auth::user()->role_id != 1){ 
           return redirect()->guest('/');
        } 
       
        return $next($request);
    }
}
