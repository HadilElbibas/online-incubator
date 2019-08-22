<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

@extends ('admin.layouts.app')

@section('content')
<div class="card">
    <div class="card-header"><b>
        {{-- {{ dd($Trainer)}} --}}
        {{ $Trainer->name }}
    </b></div>

    <img src="{{ asset('/storage/'  .$Trainer->image ) }}" class="card-img-top" alt="Trainer image">
        <div class="card-body">
            {{  $Trainer->Bio }}    
        </div>

    <div class="card-footer">
        <div>
        {{  $Trainer->email }}
        </div>
        {{$Trainer->password}}
    </div>
    <a  class="btn btn-warning" href="{{url('admin/Trainer')}}">Back</a>
</div>
@endsection
