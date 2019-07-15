<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use  \App\Event;
use \App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('admin.events.index')->with('events', $events);
    }

    public function create()
    {
        return view('admin.events.create');
    }


    public function store()
    {

        $event = new Event;
        $event->title = request()->title;
        $event->description = request()->description;

        if (request()->file('image')) {
            $image_path = request()->file('image')->store('images', 'public');
            $event->image = $image_path;
        }
        
        $event->save();

        return redirect('admin/events');
    }

    public function show($id)
    {
        $event = Event::find($id);
        return view('admin.events.show', compact('event'));
    }


    public function edit($id)
    {
        //with->event this is the varl name we want to work on
        return view('admin.events.edit')->with('event', event::find($id)); 
    }

    public function update($id)
    {
        
        $event = event::find($id);
        $event->title = request()->event_title;
        $event->description = request()->event_description;
        $event->save();
        
        return redirect('admin/event');
    }

    public function destroy($id)
    {
        $event = Event::find($id);

        $event->delete();
        return redirect('admin/events');
    }

}
