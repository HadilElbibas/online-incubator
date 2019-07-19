<?php

namespace App\Http\Controllers\Trainer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Trainer;

class ProfileController extends Controller
{
    public function edit()
    {
        $trainer = auth('trainer')->user(); // Trainer::find(auth('trainer')->id())

        return view('trainer/profile/edit')->with('trainer', $trainer);
    }

    public function update()
    {
        $trainer = auth('trainer')->user();

       
        $trainer->name = request()->name;
        $trainer->email = request()->email;
        $trainer->bio = request()->bio;

        $trainer->save();

        return redirect('/');
    }

}
