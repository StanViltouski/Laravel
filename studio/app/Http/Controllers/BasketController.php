<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tovar;
class BasketController extends Controller
{

   public function getAdd($id=null){
    setcookie($id, 1, time()+3600, '/');
	return redirect()->back();
   }
   
   public function getAll() {
	   	if(isset($_GET['print'])){
			$temp='print';
		} else {
			$temp='base';
		}
	   
	   $arr=[]; $products=[];
	   foreach($_COOKIE as $key=>$value) {
		   $id=(int)$key;
		   if($id>0) {
			   $arr[$id]=$value;
			   $products[$id]=Tovar::find($id);
		   } 
	   } 
	   return view('basket', compact('arr', 'products', 'temp'));
   }
   
   
   public function getDelete($id) {
	   setcookie($id, '', time()-1, '/');
	   return redirect()->back();
   }
    
    public function getDeleteAll() {
    foreach($_COOKIE as $key=>$value) {
        $id=(int)$key;
        setcookie($id, '', time()-1, '/');
    }
	   return redirect()->back();
      
    }
}
