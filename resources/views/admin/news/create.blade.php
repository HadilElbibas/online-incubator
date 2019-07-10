@extends('admin/layouts/app')
@section('content')

<h1>Add News</h1>
        <form action="{{ url('admin/news') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
            <label>News Title </label>
            <input type="text" name="title">
            </div>
            
            <div class="form-group">
            <label> News description </label>
            <textarea name="description" cols="30" rows="10"></textarea>
            </div>
           
            <div class="form-group">
            <label> News Iamge </label>
            <input type="file" name="image" >
            </div>    
            <input type="submit" value="Create"> 
         </form>
@endsection

