<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller {
    public function submitContactForm(ContactRequest $req) {
        // $validation = $req -> validate([
        //     'subject' => 'required|min:5|max:50',
        //     'message' => 'required|min:10',
        // ]);
        // dd($req->input('subject'));
    }
}


