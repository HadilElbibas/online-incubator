    <html>

    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        @yield('styles')
    </head>

    <body>
        <nav class="navbar navbar-expand-md navbar-dark navbar-laravel bg-primary">
            <a href="{{ url('/') }}" class="navbar-brand">Ossos </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('whyossos')}}">Why? Ossos</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{url('news')}}">News<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{url('trainers')}}">Trainers</a>
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
                    @guest('startup')
                    <li class="nav-item">
                        <a href="{{ url('startup/register') }}" class="btn btn-info mr-2">Signup as a Startup</a>
                    </li>
                    @endguest
                    <li>
                        <div class="dropdown">
                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Logins
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ url('startup/login') }}">Start Up</a>
                                <a class="dropdown-item" href="{{ url('trainer/login') }}">Trainer</a>
                                <a class="dropdown-item" href="#">Work Space</a>
                            </div>
                        </div>
                    </li>
                    {{-- <li>
                        <div class="dropdown">
                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Logouts
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ url('startup/logout') }}">Start Up</a>
                                <a class="dropdown-item" href="{{ url('trainer/logout') }}">Trainer</a>
                                <a class="dropdown-item" href="#">Work Space</a>
                            </div>
                        </div>
                    </li> --}}
                    @auth('trainer')
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::guard('trainer')->user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('trainer.logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('trainer.logout') }}" method="POST"
                                style="display: none;">
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

        <footer class="bg-light">
            <div class="container">
                <div class="row pt-5 pb-5">
                    <div class="col-1">
                        <img src="{{ asset('imges/Logo.png')}}" alt="Logo" class="w-100">
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Address</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Privecy</a>
                                </li>
                                <li class="nav-item">
                                        <button type="nav-link" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                Connect
                                            </button>
                                            
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Connect Us</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            {{-- Start connect form--}}
                                                                <form class="needs-validation" novalidate>
                                                                        <div class="form-row">
                                                        
                                                                        <div class="col-md-4 mb-3">
                                                                            <label for="validationTooltip01">First name</label>
                                                                            <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
                                                                            <div class="valid-tooltip">
                                                                            nice name!
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 mb-3">
                                                                            <label for="validationTooltip02">Last name</label>
                                                                            <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
                                                                            <div class="valid-tooltip">
                                                                            Looks good!
                                                                            </div>
                                                                        </div>
                                                                        
                                                        
                                                                        <div class="form-row">
                                                                        <div class="col-md-6 mb-3">
                                                                            <label for="validationTooltip03">City</label>
                                                                            <input type="text" class="form-control" id="validationTooltip03" placeholder="Your City" required>
                                                                            <div class="invalid-tooltip">
                                                                            Please provide a valid city.
                                                                            </div>
                                                                        </div>
                                                        
                                                                        <div class="form-group">
                                                                                <label for="exampleFormControlSelect1">You are..</label>
                                                                                <select class="form-control" id="exampleFormControlSelect1">
                                                                                <option>Start Up</option>
                                                                                <option>Entrepreneur</option>
                                                                                <option>Company Owner</option>
                                                                                <option>Interested in entrepreneurship</option>
                                                                                <option>Guest</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                    <label for="exampleFormControlTextarea1">Subject</label>
                                                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                                        </div>
                                                                    </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
                                                        <input type="submit" class="btn btn-success" value="Submit">
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                </li>
                                {{-- End connect form--}}
                            </ul>
                        </div>
                        <div class="row mt-5">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-linkedin"></i>                                
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-twitter"></i>                                
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                {{-- copyrights here --}}
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>

        @yield('scripts')
    </body>

    </html>