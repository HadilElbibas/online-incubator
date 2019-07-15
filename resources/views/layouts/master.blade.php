<html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark navbar-laravel bg-primary">
    <a href="{{ url('/') }}" class="navbar-brand">Ossos </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link" href="Workspace.html">Why? Ossos</a>
        </li>
        <li>
          <a class="nav-link" href="{{url('news')}}">News<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{url('trainer')}}">Trainers</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="Workspace.html">Workspace</a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="{{url('events')}}">Events</a>
        </li>

        @auth('trainer')
        <li class="nav-item">
          <a href="{{ url('trainer/profile/edit') }}" class="nav-link">Edit Profile</a>
        </li>
        @endauth
      </ul>
      <ul class="ml-auto navbar-nav">
        <li class="nav-item">
          <a href="{{ url('startup/register') }}" class="btn btn-info mr-2">Signup as Startup</a>
        </li>
        <li>
          <div class="dropdown">
            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Logins
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Start Up</a>
              <a class="dropdown-item" href="{{url('trainer/login')}}">Trainer</a>
              <a class="dropdown-item" href="#">Work Space</a>
            </div>
          </div>
        </li>
        @auth('trainer')
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::guard('trainer')->user()->name }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('trainer.logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('trainer.logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
        @endauth
      {{-- When we wont to show someting when the trainer is not logedin}}
        {{-- @guest('trainer')
        Hello
       @endguest --}}
      </ul>
    </div>
  </nav>
  <div class="container mt-4">
    @yield('content')
  </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>