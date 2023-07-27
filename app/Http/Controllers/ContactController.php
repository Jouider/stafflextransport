<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
    return view('pages.contact');
    }
    public function store(ContactRequest $request)
    {
        $request->validated();
        Mail::to('jouider.abdellah@gmail.com')->send(new Contact($request->except('_token')));

        return to_route('contactpage')->with('success','Bien reçu ! Votre message a été envoyé avec succès. Nous vous contacterons sous peu.');
    }


}
