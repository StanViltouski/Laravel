<?php

namespace App\Http\Middleware;

use Closure;
use App;

class Lang
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
		if(isset($_GET['lang'])) { //если есть запрос с именем lang
			$lang = $_GET['lang'];
		} else {
			if(isset($_COOKIE['lang'])) {
				$lang = $_COOKIE['lang'];
			} else {
				$lang = 'ru';
			}
			
		}
		App::setLocale($lang);
		setcookie('lang', $lang, time()+3600, '/'); // на 1 час
		$request->merge(compact('lang')); // передает в любой класс работающий с request
        return $next($request);
      
    }
 
}
