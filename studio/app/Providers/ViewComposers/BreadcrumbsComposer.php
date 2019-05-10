<?php

namespace App\Providers\ViewComposers;
use Illuminate\Contracts\View\View;
use App\Newz;

class BreadcrumbsComposer {
	public function compose(View $view){
        
	$url = $_SERVER['REQUEST_URI'];
    $urlarr = explode('/', $url);
    $page = null;
    $page2 = null;
	
/*
	if(isset($urlarr[3])){
         $urlarr[3] = str_replace('%20', ' ', $urlarr[3]);
		 $page2 = $urlarr[3];
      }
*/

	 if(isset($urlarr[2])){
		 	$page_obj = Newz::find($urlarr[2]);
$page2 = $page_obj->title;
	 }


        switch ($urlarr[1]){
       // привязан не к урлам а к названиям на странице
            case 'abount':
                $page = __('navigation.abount');
                break; 
            case 'design':
                $page = __('navigation.service');
                $page2 = __('navigation.design');
                break;
            case 'projects':
                $page = __('navigation.projects');
                break; 
            case 'news':
                $page = __('navigation.news');
                break; 
            case 'contact':
                $page = __('navigation.contacts');
                break;  
            case 'categories':
                $page = __('navigation.category');
                break;
            case 'login':
                $page = __('navigation.login');
                break;
            case 'basket':
                $page = __('navigation.basket');
                break;
        }
        
      /*
         if($page == null){
            $obj = Maintext::where('url', $urlarr[1])->first();
            $page = (isset($obj)) ? $obj->name : null;
        }
     
        if(isset($urlarr[3])){
			
            $obj = Newz::where('title', $urlarr[3])->first();
            $page2 = $obj->title;
        }
     
        */ 
       return $view->with('page', $page)->with('page2', $page2);
	}
}