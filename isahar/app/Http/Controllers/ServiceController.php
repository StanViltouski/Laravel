<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service;

class ServiceController extends Controller
{
     public function getIndex() {
		
		$objs=Service::all();
	
		return view('services', compact('objs'));
	}
}
