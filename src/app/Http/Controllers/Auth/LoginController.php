<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    @return \Illuminate\View\view

    public function showLoginForm()
    {
        return view('auth.login');
    }

    @param \Illuminate\Http\Request $request
    @return \Illuminate\Http\RedirectResponse

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended('admin');
        }

        return back()->withErrors([
            'email' => 'ログイン情報が正しくありません。'
        ])->onlyInput('email');

    }

}
