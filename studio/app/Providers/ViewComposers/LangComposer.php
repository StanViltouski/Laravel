<?php

namespace App\Providers\ViewComposers;
use Illuminate\Contracts\View\View;
use App\Category;
use App;
use Auth;

class LangComposer {
	public function compose(View $view){
	$lang=App::getLocale();
	$view->with('lang', $lang);

	}
}