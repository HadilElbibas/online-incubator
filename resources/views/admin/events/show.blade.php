<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

@extends ('admin.layouts.app')

@section('content')
<div class="card">
    <div class="card-header"><b>
    {{-- {{ dd($event)}} --}}
        {{ $event->title }}
   </b></div>
   <img src="{{ asset('/storage/' .$event->image ) }}" class="card-img-top" alt="Event">

    <div class="card-body">
        {{ $event->description }}    
    </div>

    <div class="card-footer">
        {{ $event->created_at }}
    </div>
    <a  class="btn btn-warning" href="{{url('admin/events')}}">Back</a>
</div>
@endsection