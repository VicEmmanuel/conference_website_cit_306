<?php

namespace App\Http\Controllers;

use App\Models\Attendees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class AttendeeController extends Controller
{
    public function index()
{
    return view('index');
}

public function registerView()
{
    return view('register');
}
public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'phone' => 'required',
        // 'name' => 'required|string|max:255',
        // 'email' => 'required|email|unique:users',
        // 'phone' => 'required|integer',
    ]);

    Attendees::create($validatedData);
    Session::flash('success', 'Registration successful!');
    // Session::flash('registration_complete', true);

    // return redirect()->back();
    return redirect('/register');
}

public function list()
{
    $formDataList = Attendees::all();

    return view('list', compact('formDataList'));
}
}
