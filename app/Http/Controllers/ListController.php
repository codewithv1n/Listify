<?php

namespace App\Http\Controllers;

use App\Models\Description;
use Illuminate\Http\Request;

class ListController 
{
  public function list(Request $request){
    
      $request->validate([
        'list' => 'required|max:255|string',
      ]);

      $list = Description::create([
        'message' => $request->list
      ]);

      return redirect('/home')->with('success', 'Notes Listed Successfully');
  }
}
