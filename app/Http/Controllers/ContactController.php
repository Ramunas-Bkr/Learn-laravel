<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contacts;

class ContactController extends Controller
{
    public function submitContactForm(ContactRequest $req)
    {
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

    public function editMessageSubmit($id, ContactRequest $req)
    {
        $contacts = Contacts::find($id);
        $contacts->name = $req->input('name');
        $contacts->email = $req->input('email');
        $contacts->subject = $req->input('subject');
        $contacts->message = $req->input('message');

        $contacts->save();

        return redirect()->route('one-message', $id)->with('success', 'Pranešimas buvo atnaujintas');
    }

    public function allData()
    {
        $contact = new Contacts;
        return view('messages', ['data' => $contact->all()]);
    }

    public function getOneMessage($id)
    {
        $contact = new Contacts;
        return view('one-message', ['data' => $contact->find($id)]);
    }

    public function editMessage($id)
    {
        $contact = new Contacts;
        return view('update-message', ['data' => $contact->find($id)]);
    }

    public function deleteMessage($id)
    {
        $contacts = Contacts::find($id);
        $contacts->delete();
        return redirect()->route('contacts-data')->with('success', 'Pranešimas buvo ištrintas');
    }
}
