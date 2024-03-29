 @extends('layouts.master')
@section('content')
<div class="card mb-3">
  @foreach($news as $newsitem)
    <div class="card mb-3" >
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="{{ asset('/storage/' .$newsitem->image ) }}" class="card-img" alt="News">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{  $newsitem->title }}</h5>
             
              {{-- <p class="card-text">{{ $newsitem->description }}</p> --}}
              <p class="card-text"><small class="text-muted">{{  $newsitem->writer }}</small></p>
              <a class="nav-link " href="{{url('news/' . $newsitem->id)}}"> Read </a>
            </div>
          </div>
        </div>
      </div>
 @endforeach
 </div>
 @endsection