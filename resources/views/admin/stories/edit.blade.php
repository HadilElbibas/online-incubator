@extends('admin.layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Edit Stories </h3>
    </div>
    <div class="card-body">
<form action="{{ url('admin/stories/' . $story->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    
    <div class="form-group">
    <input type="text" name="story_title" value="{{ $story->title}}">
    </div>

    <div class="form-group">
    <textarea  type="text" name="story_description">{{ $story->description}}</textarea>
    </div>

    <div class="form-group">
    <input type="text" name="story_link" value="{{$story->link}}">
    </div>

    <div class="form-group">
    <input type="submit" value="Edit" class="btn btn-primary">
    </div>
</form>
    </div>
</div>
@endsection