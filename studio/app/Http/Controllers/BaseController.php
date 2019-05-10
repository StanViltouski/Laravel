<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maintext;

class BaseController extends Controller
{

    public function getIndex(Request $request) {
		
			if(isset($_GET['print'])){
			$temp='print';
		} else {
			$temp='base';
		}
		
		$obj=Maintext::where('url', 'index')->where('lang', $request->lang)->first();
		return view('welcome', compact('obj', 'temp'));
	}
}
