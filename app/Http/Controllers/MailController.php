<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        // Validate the request data
        $request->validate([
            'to' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Here you would typically use a mail service to send the email
        // For example, using Laravel's Mail facade:
        // Mail::to($request->to)->send(new YourMailableClass($request->subject, $request->message));

        return response()->json(['message' => 'Email sent successfully!'], 200);
    }


}
