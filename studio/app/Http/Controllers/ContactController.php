<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateContactRequest;
use App\Contact;


class ContactController extends Controller
{
  	public function postIndex(CreateContactRequest $r) {
//unset($r['_token']); 
Contact::create($r->all());
return redirect()->back();
	}
}
