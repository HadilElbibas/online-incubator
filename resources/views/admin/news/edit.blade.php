@extends('admin.layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Edit News </h3>
    </div>
    <div class="card-body">
<form action="{{ url('admin/news/' . $newsitem->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    <div class="form-group">
    <input type="text" name="news_title" value="{{ $newsitem->title}}">
    </div>
    <div class="form-group">
    <textarea type="text" name="news_description" value="{{ $newsitem->description}}">
    </div>
    <div class="form-group">
    <input type="submit" class="btn btn-primary">
    </div>
</form>
    </div>
</div>
@endsection