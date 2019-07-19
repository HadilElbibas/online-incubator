<?php

namespace App\Http\Controllers\Startup;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/startup/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('startup.auth:startup');
    }

    /**
     * Show the Startup dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('startup.home');
    }

}