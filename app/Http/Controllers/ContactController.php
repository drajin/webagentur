<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required', 'string',
            'name' => 'required|max:120',
            'email'=>'required|email',
            'subject' => 'required', 'string'
        ]);

        $data = [
           'received_message' => $request->message,
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject
        ];

        Mail::send('emails.contact', $data, function($message) use ($data)    {
            $message->from($data['email']);
            $message->to('drajin@gmail.com');
            $message->subject($data['subject']);


        });

        return redirect('contact')->with('success','Email sent!');

    }
}
