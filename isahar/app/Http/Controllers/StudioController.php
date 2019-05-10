<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Studio;

use App\Room;

class StudioController extends Controller
{
        public function getIndex() {
		
		    $objs=Studio::all();
	
		    return view('studios', compact('objs'));
	}

	  public function getPhoto($id=null, $name=null) {

	  	    $obj=Studio::find($id);
		
		    $photos=Room::all()->where('studio', $id); 
	
		    return view('studios_photo', compact('photos', 'obj'));
	}

	
}
