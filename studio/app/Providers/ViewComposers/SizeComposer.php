<?php

namespace App\Providers\ViewComposers;
use Illuminate\Contracts\View\View;
use App\Category;
use Auth;

class SizeComposer {
	public function compose(View $view){

		$counts = 0;
		foreach($_COOKIE as $key => $value){
			
			$id = (int)$key;
			if($id>0) {
				$counts++;
			}
		}
		$view->with('counts', $counts);
	}
}