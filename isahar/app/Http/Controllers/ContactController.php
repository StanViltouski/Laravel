<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\OrderRequest;

use App\Contact;

use App\Order;

class ContactController extends Controller
{
      public function getIndex() {
		
		$objs=Contact::all();
	
		return view('contacts', compact('objs'));
	}


	public function postIndex(OrderRequest $r) {

        unset($r['_token']);  //Если мешает токен при отправке формы
        Order::create($r->all());
		sleep(2);
        return redirect()->back()->with('success', 'Ваш запрос отправлен');
	}

}
