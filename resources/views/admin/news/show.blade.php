<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

@extends ('admin.layouts.app')

@section('content')
<div class="card">
    <div class="card-header"><b>
        {{-- {{ dd($news)}} --}}
        {{ $news_item->title }}
    </b></div>

    <img src="{{ asset('/storage/' .$news_item->image ) }}" class="card-img-top" alt="News">
        <div class="card-body">
            {{  $news_item->description }} 
            {{  $news_item->writer }} 
        </div>

    <div class="card-footer">
        {{  $news_item->created_at }}
    </div>
    <a  class="btn btn-warning" href="{{url('admin/news')}}">Back</a>
</div>
@endsection
