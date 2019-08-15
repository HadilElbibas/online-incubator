<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

@extends ('admin.layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
    {{-- {{ dd($news)}} --}}
        {{ $news_item->title }}
    </div>

    <div class="card-body">
        {{  $news_item->description }}    
    </div>

    <div class="card-footer">
        {{  $news_item->created_at }}
    </div>
</div>
@endsection