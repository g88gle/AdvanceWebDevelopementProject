<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function sumbit(Request $request){
      $this->validate($request, [
        'name' => 'required',
        'eid' => 'required',
        'email' => 'required',
        'message' => 'required'
      ]);

      //new message
      $message = new Message;
      $message->name = $request->input('name');
      $message->eid = $request->input('eid');
      $message->email = $request->input('email');
      $message->message = $request->input('message');
      //save message
      $message->save();

      //redirect
      return redirect('/')->with('status', 'Message Sent');
  }
      public function getMessages(){
        $messages = Message::all();

        return view('messages')->with('messages', $messages);
  }
}
