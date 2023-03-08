<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        if(Auth::user()){
            // if($user->level == '1'){
            //     return redirect()->intended('/');
            // } elseif($user->level == '2'){
            //     return redirect()->intended('pembayaran');
            // } elseif($user->level == '3'){
            //     return redirect()->intended('history');
            // }
            return redirect()->intended('home');
        }

        return view('login.view');
    }

    public function proses(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credential = $request->only('username', 'password');

        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            $user = Auth::user();
            // if($user->level == '1'){
            //     return redirect()->intended('/');
            // } elseif($user->level == '2'){
            //     return redirect()->intended('pembayaran');
            // } elseif($user->level == '3'){
            //     return redirect()->intended('history');
            // }

            if($user){
                return redirect()->intended('home');
            }

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'username' => 'username or password is wrong!'
        ])->onlyInput('username');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
