<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'message' => 'required',
        // 'name' => 'required|string|max:255',
        // 'email' => 'required|email|unique:users',
        // 'phone' => 'required|integer',
    ]);

    Contact::create($validatedData);
    Session::flash('sent', 'Message sent successfully!');
    // Session::flash('registration_complete', true);

    // return redirect()->back();
    return redirect('/');
}
}
