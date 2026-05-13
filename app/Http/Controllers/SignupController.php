<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignupController 
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'username' => 'required|string|max:255|unique:users', 
            'password' => 'required|string|min:8|confirmed',     
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password), 
        ]);

        return redirect('/login')->with('success', 'Account created!');
    }
}
?>