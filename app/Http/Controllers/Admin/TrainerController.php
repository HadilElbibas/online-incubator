<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Trainer;

class TrainerController extends Controller
{
    public function index()
    {
        $trainers = Trainer::all();

        return view('admin/trainers/index')->with('trainers', $trainers);
    }

    public function create()
    {
        return view('admin/trainers/create');
    }
    
    public function store()
    {
        $image_path = request()->file('image')->store('images', 'public');

        $trainer = new Trainer;
        $trainer->name = request()->name;
        $trainer->email = request()->email;
        $trainer->bio = request()->bio;
        $trainer->image = $image_path;
        $trainer->save();

        return redirect('admin/trainers');
    }

    public function edit($id)
    {
        $trainer = Trainer::find($id);

        return view('admin/trainers/edit')->with('trainer', $trainer);
    }

    public function update($id)
    {
        request()->validate([
            'email' => 'required'
        ]);
        
        $trainer = Trainer::find($id);

       
        $trainer->name = request()->name;
        $trainer->email = request()->email;
        $trainer->bio = request()->bio;

        $trainer->save();

        return redirect('admin/trainers');
    }


    public function destroy($id)
    {
        $trainer = Trainer::find($id);

        $trainer->delete();
        return redirect('admin/trainers');
    }
}
