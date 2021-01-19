<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;


class ContactController extends Controller
{
    public function create()
    {
        return view('emails.index');
    }
 
    public function store(Request $request)
    {

        Mail::to('administrateur@chezmoi.com')
        ->send(new Contact($request->except('_token')));

    return view('confirm');
    }
 
     
}
