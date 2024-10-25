<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Mail::send([], [], function ($message) use ($validated) {
            $message->to('mrdev.ps@gmail.com')
                ->subject('New Contact Us Message')
                ->from($validated['email'], $validated['fullname'])
                ->setBody('fullname: ' . $validated['fullname'] . "\neEmail: " . $validated['email'] . "\n\nMessage: " . $validated['message']);
        });

        return response()->json(['success' => true, 'message' => 'Message sent successfully!'], 200);
    }

}
