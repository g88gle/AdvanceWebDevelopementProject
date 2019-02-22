<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function sumbit(Request $request){
      $this->validate($request, [
        'name' => 'required',
        'id' => 'required',
        'email' => 'required',
        'message' => 'required'
      ]);

      return 'SUCCESS';
  }
}
