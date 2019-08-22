<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

@extends ('admin.layouts.app')

@section('content')

<a href="{{ url('admin/stories/create') }}" class="btn btn-primary">Add stories</a>
<table class="table">
    <tr>
        <th>ID</th>
        <th>stories_Title</th>
        <th>stories_Image</th>
        <th>Actions</th>
    </tr>
    
    @foreach ($stories as $story)
    <tr>
        <td> {{$story->id}}</td>
        <td> {{$story->title}}</td>
        <td> <img height="120" src="{{ asset('/storage/' . $story->image ) }}"></td>
        
        <td>
            <a href="{{ url('admin/stories/' . $story->id ) }}" class="btn btn-info">View</a>
            <a href="{{ url('admin/stories/' . $story->id . '/edit') }}" class="btn btn-warning">Edit</a>
            <form action="{{ url('admin/stories/' . $story->id) }} " method="post" style="display: inline">
               @csrf
               @method('DELETE')
               <input type="submit" class="btn btn-danger" value="Delete">
           </form>
       </td>
    </tr>  

      
        @endforeach
    </table>
@endsection