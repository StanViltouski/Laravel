<?php

namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;

use App\Seo;

use App\Category;

class SeoComposer {

	public function compose(View $view){
        
	    $url = $_SERVER['REQUEST_URI'];
        $urlarr = explode('/', $url);	

	if(isset($urlarr[1])){ $objs=Seo::all()->where('url', $urlarr[1]);}

    if(isset($urlarr[1]) && $urlarr[1] == ""){$objs=Seo::all()->where('url', 'main');} 

    if(isset($urlarr[3])) {$objs=Seo::all()->where('url', $urlarr[3]);}  

       return $view->with('objs', $objs);
	}
}