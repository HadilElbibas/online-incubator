<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .checked {
      color: orange;
    }
    </style>
@extends('layouts.master')
@section('content')
    <div class="row">
      <div class="col-md-100">
          <div class="card">
            <img src="{{ asset('/storage/' .$trainer->image)}}" class="card-img-top" style="width: 300; " alt = " tranier image">
            <div class="card-body">
              <h5 class="card-title">{{ $trainer->name }}</h5>
              <p class="card-text">{{ $trainer->bio }}</p>
              
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <div>
              <a  class="btn btn-warning" href="{{url('trainers')}}">Go to Trainers</a>
              <a  class="btn btn-success" href="{{url('/')}}">Go to Home page</a>
              </div>
            </div>
          </div>
          
        </div>
    </div>
    @endsection