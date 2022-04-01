<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index() {
        return view('pages/contact');
    }

    public function send(Request $request) {
        $contact = array();
        $contact['firstname'] = $request->firstname;
        $contact['lastname'] = $request->lastname;
        $contact['email'] = $request->email;
        $contact['message'] = $request->message;

        Mail::to('l7uri4ne@gmail.com')
            ->send(new Contact($contact));
        return view('pages/contact');

    }
}
