<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;
use App\Events\ChatEvent;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	return view('chat');
    }

    public function fetchAllMessages()
    {
    	return Chat::with('user')->get();
    }

    public function sendMessage(Request $request)
    {
        if($request->has('file')) {
            $filenanme = $request('file')->store('chat');
            $message   = Message::create([
                'user_id' => auth()->user()->id,
                'message' => $request->message,
                'media'   => $filenanme,
            ]);
        }
    	$chat = auth()->user()->messages()->create([
            'message' => $request->message
        ]);

    	broadcast(new ChatEvent($chat->load('user')))->toOthers();

    	return ['status' => 'success'];
    }
}
