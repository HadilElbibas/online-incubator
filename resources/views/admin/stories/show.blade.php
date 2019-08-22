<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

@extends ('admin.layouts.app')

@section('content')
<div class="card">
    <img src="{{ asset('/storage/' .$stories->image ) }}" class="card-img-top" alt="News">
    <div class="card-header"><b>
        {{-- {{ dd($stories)}} --}}
        {{ $stories->title }}
    </b></div>
        <div class="card-body">
            {{  $stories->description }}    
        </div>

    <div class="card-footer">
        {{  $stories->created_at }}
    </div>
    <a  class="btn btn-warning" href="{{url('admin/stories')}}">Back</a>
</div>
@endsection
