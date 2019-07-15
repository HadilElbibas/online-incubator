@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Edit your bio </h3>
    </div>
    <div class="card-body">
    <form action="{{ url('trainer/profile') }}" method="post">
        @csrf
        @method('PATCH')
       
         <div class="form-group">
            
         <input type="text" name="name" value="{{ $trainer->name}}"> 
         </div>
         <div class="form-group">
         <input type="text" name="email" value="{{ $trainer->email}}">
         </div>  
         <div class="form-group">
         <textarea name="bio" id="" cols="30" rows="10">{{ $trainer->bio }}</textarea>
         </div>
         <div class="form-group">
         <input type="submit" class="btn btn-primary">
         </div>
    </form>   
 </div>
</div>
@endsection





  
  
   
   
