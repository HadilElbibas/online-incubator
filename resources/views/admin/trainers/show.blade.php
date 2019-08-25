<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

@extends ('admin.layouts.app')

@section('content')
<div class="card">
    <div class="card-header"><b>
        {{-- {{ dd($Trainer)}} --}}
        {{ $trainer->name }}
    </b></div>

    <img src="{{ asset('/storage/'  .$trainer->image ) }}" class="card-img-top" style="width: 30rem;" alt="Trainer image">
        <div class="card-body">
            {{  $trainer->bio }}    
        </div>

    <div class="card-footer">
        <div>
        {{  $trainer->email }}
        </div>
        {{$trainer->password}}
    </div>
    <a  class="btn btn-warning" href="{{url('admin/Trainer')}}">Back</a>
</div>
@endsection
