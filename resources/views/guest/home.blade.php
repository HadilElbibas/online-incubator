@extends('layouts.master')

@section('content')

<h1  class="text-left my-3" > Welcom To Ossos world</h1> 

    
<p style="color:lightblue">
    here is whatever bussines man or women need
    we're team of exbert her to help you
</p>



<hr style="backgroundcolor:blue">
<div class="container-fluid">
    <h1 class="text-center my-3">News</h1>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner row w-100 mx-auto">
            @foreach ($news as $newsitem)
            <div class="carousel-item col-md-4 @if($loop->first) active @endif">
                <div class="card">
                    <img src="{{ asset('/storage/' .$newsitem->image ) }}" class="card-img-top" alt="News">
                    <div class="card-body">
                        <h4 class="card-title">{{ $newsitem->title }}</h4>
                        {{-- <p class="card-text">This is a longer card...  longer.</p> --}}
                        <p class="card-text">
                            <small class="text-muted">{{ $newsitem->created_at->diffForHumans() }}</small>
                        <a class="nav-link " href="{{url('news')}}"> Read more </a>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-4">
                    <a class="btn btn-outline-secondary mx-1 prev" href="javascript:void(0)" title="Previous">
                        <i class="fa fa-lg fa-chevron-left"></i>
                    </a>
                    <a class="btn btn-outline-secondary mx-1 next" href="javascript:void(0)" title="Next">
                        <i class="fa fa-lg fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>

<h1 class="text-center"> Positive Wordes</h1>
<p  class="text-center"><b>
    You can have whatever you like
</b></p>

<hr>

<div class="container-fluid">
    <h1 class="text-center my-3">Trainers</h1>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner row w-100 mx-auto">
            @foreach ($trainers as $trainer)
            <div class="carousel-item col-md-4 @if($loop->first) active @endif">
                <div class="card">
                    <img src="{{ asset('/storage/' .$trainer->image ) }}" class="card-img-top" alt="trainer">
                    <div class="card-body">
                        <h4 class="card-title">{{ $trainer->name }}</h4>
                        {{-- <p class="card-text">This is a longer card...  longer.</p> --}}
                        <a class="btn btn-success"   href="{{url('trainers')}}"> Know more about me </a>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-4">
                    <a class="btn btn-outline-secondary mx-1 prev" href="javascript:void(0)" title="Previous">
                        <i class="fa fa-lg fa-chevron-left"></i>
                    </a>
                    <a class="btn btn-outline-secondary mx-1 next" href="javascript:void(0)" title="Next">
                        <i class="fa fa-lg fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>
<h1 class="text-center"> Positive Wordes</h1>
<p  class="text-center"><b>
    You can have whatever you like
</b></p>
<hr>

<div class="container-fluid">
    <h1 class="text-center my-3">Events</h1>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner row w-100 mx-auto">
            @foreach ($events as $event)
            <div class="carousel-item col-md-4 @if($loop->first) active @endif">
                <div class="card">
                    <img src="{{ asset('/storage/' .$event->image ) }}" class="card-img-top" alt="events">
                    <div class="card-body">
                        <h4 class="card-title">{{ $event->title }}</h4>
                        {{-- <p class="card-text">This is a longer card...  longer.</p> --}}
                        <p class="card-text">
                            <small class="text-muted">{{ $event->created_at->diffForHumans() }}</small>
                        </p>
                        <a class="nav-link"   href="{{url('events')}}" > view more </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-4">
                    <a class="btn btn-outline-secondary mx-1 prev" href="javascript:void(0)" title="Previous">
                        <i class="fa fa-lg fa-chevron-left"></i>
                    </a>
                    <a class="btn btn-outline-secondary mx-1 next" href="javascript:void(0)" title="Next">
                        <i class="fa fa-lg fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('css/card-carousel.css') }}">
@endsection

@section('scripts')
<script src="{{ asset('js/card-carousel.js') }}"></script>

<hr>
<nav class="navbar navbar-expand-md navbar-dark navbar-laravel bg-primary">
        <a href="{{ url('/') }}" class="navbar-brand">Stories </a>
<hr>

<div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
                <div class="col-md-4">
                    

@endsection
