<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller

{
    public function index()
    {
        $registrations = Registration::latest()->get();
        return view('Backend.registration.index', compact('registrations'));
    }

    public function store(Request $request)
    {
        // dd($request->all()); // Debugging line to check incoming request data
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:registrations,email',
            'contact_number' => 'required|string',
            'principal_name' => 'required|string',
            'principal_mobile_number' => 'required|string',
            'principal_email_id' => 'required|email',
            'school_name' => 'required|string',
            'school_address' => 'required|string',
            'school_city' => 'required|string',
            'school_state' => 'required|string',
            'school_pincode' => 'required|string',
            'country' => 'required|string',
        ]);

        Registration::create($data);

        return redirect()->back()->with('success', 'Registration created successfully.');
    }
}

