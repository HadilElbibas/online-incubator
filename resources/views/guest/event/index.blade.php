@extends('layouts.master')
@section('content')
<div class="card mb-3">
    @foreach($events as $event)
            <img src="{{ asset($event->image ) }}" class="card-img-top" alt="Event">
            <div class="card-body">
              <h5 class="card-title">{{ $event->title }}</h5>
              <p class="card-text">{{ $event->description }}</p>
              <p class="card-text"><small class="text-muted">wiriter:Hadil Elbibas</small></p>
            </div>
          </div>
 @endforeach
 </div>
 @endsection
                 