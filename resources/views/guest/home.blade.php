
@extends('layouts.master')

@section('content')


<div class="row">
    <div class="col-4">
        <h1  class="text-left my-5" >Hello</h1> 
        <h2  class="text-left my-5" >it's Ossos</h2> 

            
        <h5 style="color:dodgerblue">
        a pioneering platform for entrepreneurial projects 
        </h5>
        <h5 style="color:dodgerblue" width="30">
            that foucses on youth development and entrepreneurship
        </h5>
    </div>
    <div class="col-8">
            <img src="{{ asset('imges/website.png')}}" alt="websit" class="w-100">
       </div>
</div>



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
                        <a class="nav-link " href="{{url('news/' . $newsitem->id)}}"> Read more </a>
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
<div class="row">
           <div class="col-6 align-self-center">
<h1 class="text-center" style="color:dodgerblue"><b> Michael Bloomberg </b></h1>
<p  class="text-center"><b>
    “Don’t be afraid to assert yourself, have confidence in your abilities, and don’t let the losers get you down.” 
</b></p>
</div>
<div class="col-5">
        <img src="{{ asset('imges/ideas.png')}}" alt="ideas" class="w-100">
   </div>
</div>

<hr>

<div class="container-fluid">
    <h1 class="text-center my-3"><b>Welcom home</b></h1>
    <h1 class="text-center my-3" style="color:dodgerblue">Trainers</h1>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner row w-100 mx-auto">
            @foreach ($trainers as $trainer)
            <div class="carousel-item col-md-4 @if($loop->first) active @endif">
                <div class="card">
                    <img src="{{ asset('/storage/' .$trainer->image ) }}" class="card-img-tops" alt="trainer">
                    <div class="card-body">
                        <h4 class="card-title">{{ $trainer->name }}</h4>
                        {{-- <p class="card-text">This is a longer card...  longer.</p> --}}
                        <a class="btn btn-success"   href="{{url('trainers/' . $trainer->id)}}"> Know more about me </a>
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
<div class="row">
    <div class="col-5">
            <img src="{{ asset('imges/building.png')}}" alt="building" class="w-100">
       </div>
       <div class="col-6 align-self-center">
<h1 class="text-center" style="color:dodgerblue"><b> Dave Thomas</b></h1>
<p  class="text-center"><b>
    "What do you need to start a business? Three simple things: know your product better than anyone, know your customer, and have a burning desire to succeed."
</b></p>
       </div></div>
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
                        <a class="nav-link"   href="{{url('events/' . $event->id)}}" > view more </a>
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
<div class="row">
           <div class="col-6 align-self-center">
<h1 class="text-center" style="color:dodgerblue"><b> Donald Trump </b></h1>
<p  class="text-center"><b>
        "As long as you're going to be thinking anyway, think big."
</b></p>
</div>
<div class="col-5">
        <img src="{{ asset('imges/creative.png')}}" alt="creative" class="w-100">
   </div>
</div>

<hr>
<nav class="navbar navbar-expand-md navbar-dark navbar-laravel bg-primary">
        <a href="{{ url('/') }}" class="navbar-brand">Stories </a>
</nav>

<hr>

<div class="row">
<iframe width="650" height="430" src="https://www.youtube.com/embed/watch?v=EbVzXSkkd4M" >
</iframe>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.vl {
  border-left: 6px solid dodgerblue ;
  height: 430px;
}
</style>
<div class="vl">
</div>

</div>
{{-- <div>
    <tr>
        <th>{{$story->title}} </th>
        <th> {{$story->description}} </th>
        <th>{{$story->link}}</th>
        <th>{{ asset('/storage/' . $story->image ) }}</th>
    </tr>
</div> --}}
</div>
      


<hr>


@endsection

@section('styles') {{-- this section for adding css styles --}}
<link rel="stylesheet" href="{{ asset('css/card-carousel.css') }}">
@endsection

@section('scripts') {{-- this section for adding js code --}}
<script src="{{ asset('js/card-carousel.js') }}"></script>
@endsection
