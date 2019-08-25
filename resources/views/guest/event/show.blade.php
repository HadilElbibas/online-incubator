@extends('layouts.master')
@section('content')
<div class="row">
        <div class="col-md-100">
            <div class="card">
                    <img src="{{ asset('/storage/' .$event->image ) }}" class="card-img-top" alt="Event">
                    <div class="card-body">
                      <h5 class="card-title">{{ $event->title }}</h5>
                      <p class="card-text">{{ $event->description }}</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      <div>
                          <a  class="btn btn-warning" href="{{url('events')}}">Go to Events</a>
                          <a  class="btn btn-success" href="{{url('/')}}">Go to Home page</a>
                          </div>
                  </div>
                </div>
            </div>
</div>
 @endsection


