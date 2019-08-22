<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

@extends ('admin.layouts.app')

@section('content')

<a href="{{ url('admin/trainers/create') }}" class="btn btn-primary">Add Trainers</a>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Trainer_Name</th>
         <th>Trainer_email</th>
         <th>Trainer_password</th>
        {{-- <th>Trainer_Bio</th> --}}
        <th>Trainer_photo</th>
        <th>Actions</th>
    </tr>
    
    @foreach ($trainers as $Trainer)
    <tr>
        <td> {{$Trainer->id}}</td>
        <td> {{$Trainer->name}}</td>
        <td> {{$Trainer->email}}</td>
        <td> {{$Trainer->password}}</td>
        {{-- <td> {{$Trainer->Bio}}</td> --}}
        <td> <img height="100" src="{{ asset('/storage/' . $Trainer->image ) }}"></td>
        
        <td>
            <a href="{{ url('admin/trainers/'.$Trainer->id ) }}" class="btn btn-info">View</a>
            <a href="{{ url('admin/trainers/' .$Trainer->id . '/edit') }}" class="btn btn-warning">Edit info</a>
        <form action="{{ url('admin/trainers/' .$Trainer->id) }} " method="post" style="display: inline">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger" value="Delete">
         </form>
        </td>
    </tr>    
        @endforeach
    </table>
@endsection