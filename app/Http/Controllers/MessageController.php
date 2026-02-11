<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Message::get();
        return view('message.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        return view('message.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = new Message();
        $message->name = $request->input('name');
        $message->subject = $request->input('subject');
        $message->text = $request->input('text');
        $message->readed = false;
        $message->save();


        return redirect()->route('messages.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        return view('message.show');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        return view('message.destroy');
    }
}
