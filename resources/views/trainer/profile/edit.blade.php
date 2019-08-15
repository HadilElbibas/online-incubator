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
            <div class="label"> Name </div>
         <input type="text" name="name" value="{{ $trainer->name}}"> 
         </div>

         <div class="form-group">
             <div class = "label"> Photo </div>
         <input type="file" name="image" value="{{$trainer->image}}">
         </div>

         <div class="form-group">
                <div class="label"> Email </div>
         <input type="text" name="email" value="{{ $trainer->email}}">
         </div> 

         <div class="form-group">
                <div class="label"> Bio </div>
         <textarea name="bio" id="" cols="30" rows="10">{{ $trainer->bio }}</textarea>
         </div>
         
         <div class="form-group"> 
         <input type="submit" class="btn btn-primary">
         </div>
    </form>   
 </div>
</div>
@endsection





  
  
   
   
