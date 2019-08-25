@extends('admin.layouts.app')

@section('content')
<h1>Add Trainers</h1>
<form action="{{ url('admin/trainers') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label>Trainer name </label>
        <input type="text" name="name">
    </div>
    
    <div  class="form-group">
        <label>Trainer email </label>
        <input type="text" name="email">
    </div>

    <div  class="form-group">
            <label>Trainer email password </label>
            <input type="text" name="password">
        </div>

    
    <div class="form-group">
        <label> Trainer Bio </label>
        <textarea name="bio" cols="50" rows="40"></textarea>
    </div>
   
    <div class="form-group">
        <label> Trainer Photo </label>
        <input type="file" name="image" >
    </div>  

    <input type="submit" value="Create" class="btn btn-success"> 

 </form>
@endsection