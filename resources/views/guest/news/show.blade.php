@extends('layouts.master')
@section('content')
<div class="card mb-3">
    <div class="card mb-3">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="{{ asset('/storage/' .$newsitem->image ) }}" class="card-img" alt="News">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{  $newsitem->title }}</h5>
              <p class="card-text">{{ $newsitem->description }}</p>
              <p class="card-text"><small class="text-muted">{{  $newsitem->writer }}</small></p>
              <a  class="btn btn-warning" href="{{url('news')}}">Go to news</a>
              <a  class="btn btn-success" href="{{url('/')}}">Go to home page</a>
            </div>
          </div>
        </div>
      </div>
 </div>
 @endsection


 