@extends('admin.layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Edit Event </h3>
    </div>
    <div class="card-body">
<form action="{{ url('admin/events/' . $event->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    <div class="form-group">
    <input type="text" name="event_title" value="{{ $event->title}}">
    </div>
    <div class="form-group">
    <textarea type="text" name="event_description" value="{{ $event->description}}">
    </div>
    <div class="form-group">
    <input type="submit" class="btn btn-primary">
    </div>
</form>
    </div>
</div>
@endsection