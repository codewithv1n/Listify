<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController
{
    public function login (Request $request){
      $input = $request->validate([
         'username' => 'required',
         'password' => 'required'
      ]);


      if(Auth::attempt($input)){
        $request->session()->regenerate();

        return redirect()->intended('/home');
     }

     return back()->withErrors([
       'username' => 'The provided credentials do not match our records.',
      ])->onlyInput('username');

    }

    public function signup (Request $request){
        
     $request->validate([
       'name' => 'required|max:30|string',
       'username' => 'required|max:100|string|unique:users',
       'password' => 'required|min:8|confirmed'
     ]);


     $user = User::create([
      'name' => $request->name,
      'username' => $request->username,
      'password' => $request->password
     ]);

     return redirect('/login')->with('success','Account Created Successfully! Please Login');
    }

    public function logout (Request $request){
        
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
