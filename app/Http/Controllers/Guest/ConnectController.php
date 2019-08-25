<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConnectController extends Controller
{
    public function show()
    {
        return view('guest/connect/show');
    }
}
