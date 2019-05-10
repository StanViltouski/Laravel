<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class TovarController extends Controller
{
    public function getAll(Request $request) {
		
			if(isset($_GET['print'])){
			$temp='print';
		} else {
			$temp='base';
		}
		$cats = Category::all()->where('lang', $request->lang);
		return view('categories', compact('cats', 'temp'));
	}
}
