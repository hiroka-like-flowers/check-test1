<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function create()
    {
        return view('contact.login');
    }

    public function store(Request $request)
    {
        $user = new Register;

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');

        $contact->save();

        return redirect('register');
    }

    public function index()
    {
        $contacts =  DB::table('contact_forms')->select('id','your_name')->get();
        dd($contacts);

        return view('contact.register',compact('contacts'));
    }

}
