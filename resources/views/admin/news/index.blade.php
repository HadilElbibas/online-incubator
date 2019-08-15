<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

@extends ('admin.layouts.app')

@section('content')

<a href="{{ url('admin/news/create') }}" class="btn btn-primary">Add news</a>
<table class="table">
    <tr>
        <th>ID</th>
        <th>News_Title</th>
        <th>News_Description</th>
        <th>News_Image</th>
        <th>Actions</th>
    </tr>
    
    @foreach ($news as $newsitem)
    <tr>
        <td> {{$newsitem->id}}</td>
        <td> {{$newsitem->title}}</td>
        <td> {{$newsitem->description}}</td>
        <td> <img height="120" src="{{ asset('/storage/' . $newsitem->image ) }}"></td>
        
        <td>
            <a href="{{ url('admin/news/' . $newsitem->id ) }}" class="btn btn-info">View</a>
            <a href="{{ url('admin/news/' . $newsitem->id . '/edit') }}" class="btn btn-warning">Edit</a>
            <form action="{{ url('admin/news/' . $newsitem->id) }} " method="post" style="display: inline">
               @csrf
               @method('DELETE')
               <input type="submit" class="btn btn-danger" value="Delete">
           </form>
       </td>
    </tr>  

      
        @endforeach
    </table>
@endsection