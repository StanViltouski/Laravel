<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Portfolio;

class PortfolioController extends Controller
{
    public function getIndex() {
		
		$objs=Category::all();
	
		return view('portfolio', compact('objs'));
	}

	  public function getPhoto($id=null, $name=null) {

	  	$obj=Category::find($id);

		$photos=Portfolio::all()->where('category', $id); 
	
		return view('portfolio_photo', compact('photos', 'obj'));
	}
}
