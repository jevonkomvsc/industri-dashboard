<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::guard('industry')->check()) {
            return redirect()->route('dashboard');
        }
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'industry_id' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = [
            'industry_id' => $request->industry_id,
            'password' => $request->password,
        ];

        if (Auth::guard('industry')->attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard'));
        }

        return back()->withErrors([
            'industry_id' => 'ID Industri atau Password yang Anda masukkan tidak sesuai.',
        ])->withInput($request->only('industry_id'));
    }

    public function logout(Request $request)
    {
        Auth::guard('industry')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}