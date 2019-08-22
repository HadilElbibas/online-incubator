<html>
    <head>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" >Ossos </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav">
              <a class="nav-link" href="Home.html ">Home<span class="sr-only">(current)</span></a>

            <li class="nav-item">
               <a class="nav-link" href="Workspace.html">Workspace</a>
            </li>
            <li class="nav-item">
               <a class="nav-link " href="Events.html">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{url('stories')}}">Stories</a>
            </li>
            
         </ul>
       <a  href="Login.html" type="button" class="btn btn-success ml-auto">Login</a>
       <a  href="Login.html" type="button" class="btn btn-success ml-auto">Sign Up</a>
      </div>
     </nav>

     @yield('content')
    </body>
    
</html>