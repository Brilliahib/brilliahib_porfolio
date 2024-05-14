<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        return view('contact');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'email' => 'required|max:255',
            'name' => 'required',
            'message' => 'required'
        ]);

        Message::create($validateData);

        return redirect('contact')->with('success', 'Your message has been sent!');
    }
}
