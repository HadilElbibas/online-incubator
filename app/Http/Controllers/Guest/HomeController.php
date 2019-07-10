<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NewsItem;

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
        $news = NewsItem::all();

        return view('guest/home')->with('news', $news);  
    }
    
    public function home()
    {
        $news = NewsItem::all();

        return view('guest/home')->with('news', $news);  
    }
}
