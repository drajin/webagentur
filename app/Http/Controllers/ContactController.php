<?php

namespace App\Http\Controllers;


use App\Http\Requests\ContactStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function get_contact()
    {
        return view('contact');
    }

    public function store(ContactStoreRequest $request)
    {

        $data = [
           'received_message' => request('message'),
            'name' => request('name'),
            'email' => request('email'),
            'subject' => request('subject')
        ];

        Mail::send('emails.contact', $data, function($message) use ($data)    {
            $message->from($data['email']);
            $message->to('drajin@gmail.com');
            $message->subject($data['subject']);


        });

        return redirect('contact')->with('success','Email sent!');

    }
}
