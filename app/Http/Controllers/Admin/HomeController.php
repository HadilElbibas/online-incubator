<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Trainer;
use App\NewsItem;
use App\Event;

class HomeController extends Controller
{

    protected $redirectTo = '/admin/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin.auth:admin');
    }

    /**
     * Show the Admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $trainers = Trainer::count();
        $news = NewsItem::count();
        $events = Event::count();
        return view('admin.home')
            ->with('news_count', $news)
            ->with('trainers_count', $trainers)
            ->with('events_count',$events);
    }

}