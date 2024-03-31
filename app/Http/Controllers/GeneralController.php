<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GeneralController extends Controller
{
    public function home() {
        return view("home");
    }

    public function login(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('/terms');
        } else {
            return redirect()->back()->withErrors([
                'email' => 'Invalid email or password.',
            ])->withInput($request->only('email'));
        }
    }

    public function logout(){
        auth()->logout();

        return redirect('/');
    }



    public function dashboard(){
        $user = Auth::user();

        return view('dashboard', ['user' => $user]);
    }

    public function terms(){
        $user = Auth::user();

        return view('terms', ['user' => $user]);
    }









}
