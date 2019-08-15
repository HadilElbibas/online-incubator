@extends('layouts.master')
@section('content')
<div class="card" style="width: 35%;">
    @foreach($events as $event)
            <img src="{{ asset('/storage/' .$event->image ) }}" class="card-img-top" alt="Event">
            <div class="card-body">
              <h5 class="card-title">{{ $event->title }}</h5>
              <p class="card-text">{{ $event->description }}</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              <div>
              <a href="#" class="btn btn-success">Going</a>
              <a href="#" class="btn btn-warning">intrested</a>
              <a href="#" class="btn btn-primary">More details</a>
              </div>
          </div>
 @endforeach
 </div>
 @endsection


