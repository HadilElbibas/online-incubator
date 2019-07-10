<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Event;

class EventController extends Controller
{
    public function index()
    {
        $events= Event::all();
       
        return view('guest/event/index')->with('events', $events);
    }
}
