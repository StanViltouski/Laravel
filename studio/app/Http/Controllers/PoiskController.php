<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tovar;
use App\Maintext;
use App\Newz;

class PoiskController extends Controller
{
    public function getIndex() {
	   $lang = (isset($_COOKIE['lang']))?$_COOKIE['lang']:'ru'; // проверка на куки
       $search=$_GET['search']; // тоже сделать для search
	   if($search != '') {
       $maintexts=Maintext::where('body', 'LIKE', "%$search%")->where('lang', $lang)->get();
	   $news=Newz::where('body', 'LIKE', "%$search%")->where('lang', $lang)->get();
	   
       return view ('poisk', compact('maintexts', 'news', 'search'));
	   } else { return redirect('http://mysitephp/');}
   }
}
