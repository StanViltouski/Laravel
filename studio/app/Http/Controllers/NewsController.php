<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newz;

class NewsController extends Controller
{
     public function getId(Request $request) {
		$news=Newz::orderBy('id', 'DESC')->where('lang', $request->lang)->paginate(2);      
		return view('news', compact('news'));
	}  
    
      public function getBody($id=null, $name=null) {
		  
		  if(isset($_GET['print'])){
			$temp='print';
		} else {
			$temp='base';
		}
		$obj=Newz::find($id);      
		return view('news_one', compact('obj', 'temp'));
	} 
}

