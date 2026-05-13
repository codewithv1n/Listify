<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController 
{
    public function login(Request $request)
    {
        
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
           
            $request->session()->regenerate();

            return redirect()->intended('/home'); 
        }

        return back()->withErrors([
            'username' => 'Incorrect Password',
        ])->onlyInput('username');
    }
}

?>