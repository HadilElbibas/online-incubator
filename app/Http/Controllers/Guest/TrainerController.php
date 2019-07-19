<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Trainer;

class TrainerController extends Controller
{
    public function index()
    {
        $trainers = Trainer::paginate();

        return view('guest.trainers.index')->with('trainers', $trainers);
    }

}
