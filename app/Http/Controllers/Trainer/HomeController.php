<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/trainer/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('trainer.auth:trainer');
    }

    /**
     * Show the Trainer dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('trainer.home');
    }

}