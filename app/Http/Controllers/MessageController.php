<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageMail;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        
        $data=request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:9',
            'message' => 'required|string',

        ]);

       // Mail::to('example@gmail.com')->send(new MessageMail($data));

        return redirect('/#contact')->with('success', 'Mensaje enviado satisfactoriamente.');

    }
}
