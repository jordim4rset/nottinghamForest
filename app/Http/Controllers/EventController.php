<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\View\View;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::where('visible', true)->get();
        return view('events.index',  compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $event = new Event();

        $event->name = $request->input('name');
        $event->description = $request->input('description');
        $event->location = $request->input('location');
        $event->map = $request->input('map');
        $event->date = $request->input('date');
        $event->hour = $request->input('hour');
        $event->type = $request->input('type');
        $event->tags = $request->input('tags');
        if($request->input('visible') == 'on'){
            $event->visible = 1;
        }else {
            $event->visible = 0;
        }

        $event->save();

        return redirect()->route('events.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        if($event->visible == false){
            return redirect()->route('events.index');
        }else{
            return view('events.show', compact('event'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event):View
    {
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $event->name = $request->input('name');
        $event->description = $request->input('description');
        $event->location = $request->input('location');
        $event->map = $request->input('map');
        $event->date = $request->input('date');
        $event->hour = $request->input('hour');
        $event->type = $request->input('type');
        $event->tags = $request->input('tags');
        if($request->input('visible') == 'on'){
            $event->visible = 1;
        }else {
            $event->visible = 0;
        }

        $event->update();

        return redirect()->route('events.show', compact('event'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index');
    }
}
