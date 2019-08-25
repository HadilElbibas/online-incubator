<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .checked {
      color: orange;
    }
    </style>
@extends('layouts.master')
@section('content')
  @if ($trainers->count())
    <div class="row">
      @foreach ($trainers as $trainer)
      <div class="col-3">
          <div class="card">
            <img src="{{ asset('/storage/' .$trainer->image)}}" class="card-img-top" style="width: 100%; " alt = " tranier image">
            <div class="card-body">
              <h5 class="card-title">{{ $trainer->name }}</h5>
              {{-- <p class="card-text">{{ $trainer->bio }}</p> --}}
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <a href="{{url('trainers/' . $trainer->id)}}" class="btn btn-success" > Know more about me</a>
              @auth('startup')
              <button type="button" class="btn btn-success" onclick="messageTrainer({{ $trainer }})">
                Send Message
              </button>
              @endauth
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="messageTrainerModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form id="messageTrainerForm" action="{{ url("startup/trainers/{id}/message") }}" method="post">
            <div class="modal-header">
              <h5 class="modal-title">Message Trainer</h5>

              <button type="button" class="close" onclick="cancelMessageTrainer()" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                @csrf
                <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="modal-footer">
              <input type="submit" class="btn btn-primary" value="Submit">
            </div>
          </form>

          </div>
        </div>
      </div>
  @else
    <div class="alert alert-warning">Sorry, there's no data available</div>
  @endif
@endsection


@section('scripts')
  <script>
    function messageTrainer(trainer) {
      jQuery('#messageTrainerModal').show();

      jQuery('h5.modal-title').html('Message Trainer: ' + trainer.name);

      var actionUrl = jQuery('#messageTrainerForm').attr('action');
      jQuery('#messageTrainerForm').attr('action', actionUrl.replace('{id}', trainer.id))
    }

    function cancelMessageTrainer() {
        jQuery('#messageTrainerModal').hide();
    }
  </script>
@endsection
