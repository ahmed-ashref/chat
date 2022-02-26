<?php

namespace App\Http\Controllers;

use App\conversation;
use App\User ;
use App\messages ;


use Illuminate\Http\Request;

class ConversationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conversations = Conversation::orderBy('created_at', 'desc')->first();
        $messages = messages::get();
        
        return view('messages.index', compact('conversations' , 'messages'));

    }




    public function store(Request $request)
    {
        // $message = new Message();
        // $message->conversation_id = $request->conversation_id ;
        // $message->user_id = Auth::user()->id;
        // $message->save();

    }

}
