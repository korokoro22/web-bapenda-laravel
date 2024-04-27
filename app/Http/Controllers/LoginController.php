<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login() {
        return view('/login');
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'namapemakai' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::guard('masuk')->attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }

        Session::flash('status', 'failed');
        Session::flash('message', 'Anda tidak berhasil masuk');
        return redirect('/login');
    }

    public function logout(Request $request){
        Auth::guard('masuk')->logout();

        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }
}
