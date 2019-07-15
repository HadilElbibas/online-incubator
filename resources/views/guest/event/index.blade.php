@extends('layouts.master')
@section('content')
@foreach($events as $event)
  <div class="card mb-3">
            <img src="{{ asset($event->image ) }}" class="card-img-top" alt="Event">
            <div class="card-body">
              <h5 class="card-title">{{ $event->title }}</h5>
              <p class="card-text">{{ $event->description }}</p>
              <p class="card-text"><small class="text-muted">wiriter:Hadil Elbibas</small></p>
            </div>
          </div>
 @endforeach
 @endsection
                 