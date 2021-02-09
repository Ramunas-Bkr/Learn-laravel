<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contacts;

class ContactController extends Controller {
    public function submitContactForm(ContactRequest $req) {
        // $validation = $req -> validate([
        //     'subject' => 'required|min:5|max:50',
        //     'message' => 'required|min:10',
        // ]);
        // dd($req->input('subject'));

        $contacts = new Contacts;
        $contacts->name = $req->input('name');
        $contacts->email = $req->input('email');
        $contacts->subject = $req->input('subject');
        $contacts->message = $req->input('message');

        $contacts->save();

        return redirect()->route('home')->with('success', 'Pranešimas buvo išsiųstas');

    }
}


