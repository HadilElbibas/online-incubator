@extends('layouts.master')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div> 
@endif
<div class="card">
    <div class="card-header">
        <h3>Edit your bio </h3>
    </div>
    <div class="card-body">
    <form action="{{ url('admin/trainers/' . $trainer->id) }}" method="post">
        @csrf
        @method('PATCH')
       
         <div class="form-group">
            <div class="label"> Name </div>
         <input type="text" name="name" value="{{ $trainer->name}}"> 
         </div>

         <div class="form-group">
                <div class="label"> Email </div>
         <input type="text" name="email" value="{{ $trainer->email}}">
         </div>  

         <div class="form-group">
                <div class="label"> Password </div>
             <input type="text" name="password" value="{{ $trainer->password}}"> 
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





  
  
   
   
