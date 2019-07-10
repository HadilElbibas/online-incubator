@extends('layouts.master')
@section('content')
<div class="card mb-3">
    @foreach($news as $newsitem)
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="{{ asset($newsitem->image ) }}" class="card-img" alt="Event">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{ $newsitem->title }}</h5>
              <p class="card-text">{{ $newsitem->description }}</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
 @endforeach
 </div>
 @endsection
                 

 