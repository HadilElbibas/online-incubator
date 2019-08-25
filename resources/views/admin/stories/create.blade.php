@extends('admin.layouts.app')

@section('content')
<h1>Add Stories</h1>
<form action="{{ url('admin/stories') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label>Story title </label>
        <input type="text" name="title">
    </div>
    
    <div class="form-group">
        <label> Story description </label>
        <textarea name="description" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group">
        <label> Story Link </label>
        <input type="text" name="link">
    </div>
    
   
    <div class="form-group">
        <label> Story Photo </label>
        <input type="file" name="image" >
    </div>  

    <input type="submit" value="Create" class="btn btn-success"> 

 </form>
@endsection