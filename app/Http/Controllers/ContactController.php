<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('Backend.contact.index', compact('contacts'));
    }



    public function store(Request $request)
    {
        //    dd($request->all());

        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'message' => 'required|string',

        ]);
        // Save to database
        $contact = Contact::create($data);

        // Send mail to admin or yourself
        Mail::to('2005050100024kajal@gmail.com')->send(new ContactMail($contact));


        Contact::create($data); // This line must include all required fields

        return redirect()->back()->with('success', 'contact created successfully.');
    }
}
