<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NewsItem;
use App\Event;
use App\Trainer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $news = NewsItem::latest()->take(10)->get();
        $events = Event::latest()->take(10)->get();
        $trainers = Trainer::latest()->take(10)->get();

        return view('guest/home')->with('news', $news)->with('events', $events)->with('trainers', $trainers);
    }

    public function show()
    {
        return view('guest.connect.connect');
    }
    public function create()
    {
        return view('guest.whyossos');
    }
}
