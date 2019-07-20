<?php

namespace App\Http\Controllers\Startup;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Trainer;
use App\Mail\MessageTrainer;
use Illuminate\Support\Facades\Mail;

class TrainerController extends Controller
{
    public function message($trainer_id)
    {
        request()->validate([
            'message' => 'required'
        ]);

        $trainer = Trainer::find($trainer_id);

        Mail::to($trainer)->send(new MessageTrainer(request()->message));

        return redirect('trainers');
    }
}
