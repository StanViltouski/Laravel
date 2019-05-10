<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maintext;
use App\Project;

class PageController extends Controller
{
    public function getIndex(Request $request, $url=null) {
		
		if(isset($_GET['print'])){
			$temp='print';
		} else {
			$temp='base';
		}
		
		$obj=Maintext::where('url', $url)->where('lang', $request->lang)->first(); //если в БД добавить статьи на другом языке
		//$obj=Maintext::where('url', $url)->first(); без перевода
		return view('page', compact('obj', 'temp'));
	}
    
      public function getAll() {
		  
		  	if(isset($_GET['print'])){
			$temp='print';
		} else {
			$temp='base';
		}
		
		$projects=Project::all(); //если в БД добавить статьи на другом языке
		//$obj=Maintext::where('url', $url)->first(); без перевода
		return view('projects', compact('projects', 'temp'));
		
		
	}
    
}
