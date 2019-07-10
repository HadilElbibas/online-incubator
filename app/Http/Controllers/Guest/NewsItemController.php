<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\NewsItem;

class NewsItemController extends Controller
{
    public function index()
    {
        $news= NewsItem::all();
       
        return view('guest/news/index')->with('news', $news);
    }
}
