<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

@extends ('admin.layouts.app')

@section('content')

<a href="{{ url('admin/events/create') }}" class="btn btn-primary">Add Events</a>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Event_Title</th>
        <th>Event_Description</th>
        <th>Event_Image</th>
        <th>Actions</th>
    </tr>
    
    @foreach ($events as $event)
    <tr>
        <td> {{$event->id}}</td>
        <td> {{$event->title}}</td>
        <td> {{$event->description}}</td>
        <td> <img height="120" src="{{ asset('/storage/' . $event->image ) }}"></td>
        
        <td>
             <a href="{{ url('admin/events/' . $event->id . '/edit') }}" class="btn btn-warning">Edit</a>
             {{-- <a href="{{ url('admin/news/' . $newsitem->id ) }}" class="btn btn-danger">Delete</a> --}}
        </td>
    </tr>    
        @endforeach
    </table>
@endsection