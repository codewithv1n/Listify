<?php

namespace App\Http\Controllers;

use App\Models\Description;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListController 
{
  public function list(Request $request){
    
      $request->validate([
        'list' => 'required|max:255|string',
      ]);

      Description::create([
        'message' => $request->list,
        'user_id' => Auth::id(),
      ]);

      return redirect('/home')->with('success', 'Notes Listed Successfully');
  }

  public function displayList(){
        
    $messages = Description::query()->where('user_id', Auth::id())->get();
      
    return view('home', compact('messages'));      
  }
}
