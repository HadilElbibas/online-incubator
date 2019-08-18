@extends('layouts.master')

@section('content')

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
@endsection
