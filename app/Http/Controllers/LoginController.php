<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if(Auth::user()->role == 'admin'){
                return redirect()->route('a.home');
            }else if(Auth::user()->role == 'petugas'){
                return redirect()->route('p.home');
            }else if(Auth::user()->role == 'siswa'){
                return redirect()->route('s.home');
            }

            return redirect()->intended('home');
        }

        return back()->withErrors([
            'username' => 'Username or Password is wrong',
        ])->onlyInput('username');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
