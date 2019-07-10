<html>
    <head>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

      {{-- <link rel="stylesheet" href="index.css"> --}}

      @extends('layouts.master')
<style>
     
      @import url("https://fonts.googleapis.com/css?family=Hind:400,700");
html, body {
  font-family: 'Hind', sans-serif;
  margin: 0;
  padding: 0;
  background-color: #d9e2fd;
  width: 100%;
  height: 100%;
}

img {
  max-width: 100%;
  height: auto;
  display: block;
}

h3 {
  text-align: center;
  font-weight: 400;
  margin-bottom: 0;
}

.carousel-wrapper {
  position: relative;
  width: 70%;
  height: 70%;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #FFFFFF;
  background-image: linear-gradient(#FFFFFF 50%, #FFFFFF 50%, #F0F3FC 50%);
  box-shadow: 0px 12px 39px -19px rgba(0, 0, 0, 0.75);
  overflow: hidden;
}
.carousel-wrapper .carousel {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 100%;
  height: auto;
}
.carousel-wrapper .carousel .carousel-cell {
  padding: 10px;
  background-color: #FFFFFF;
  width: 20%;
  height: auto;
  min-width: 120px;
  margin: 0 20px;
  transition: transform 500ms ease;
}
.carousel-wrapper .carousel .carousel-cell .more {
  display: block;
  opacity: 0;
  margin: 5px 0 15px 0;
  text-align: center;
  font-size: 10px;
  color: #CFCFCF;
  text-decoration: none;
  transition: opacity 300ms ease;
}
.carousel-wrapper .carousel .carousel-cell .more:hover, .carousel-wrapper .carousel .carousel-cell .more:active, .carousel-wrapper .carousel .carousel-cell .more:visited, .carousel-wrapper .carousel .carousel-cell .more:focus {
  color: #CFCFCF;
  text-decoration: none;
}
.carousel-wrapper .carousel .carousel-cell .line {
  position: absolute;
  width: 2px;
  height: 0;
  background-color: black;
  left: 50%;
  margin: 5px 0 0 -1px;
  transition: height 300ms ease;
  display: block;
}
.carousel-wrapper .carousel .carousel-cell .price {
  position: absolute;
  font-weight: 700;
  margin: 45px auto 0 auto;
  left: 50%;
  transform: translate(-50%);
  opacity: 0;
  transition: opacity 300ms ease 300ms;
}
.carousel-wrapper .carousel .carousel-cell .price sup {
  top: 2px;
  position: absolute;
}
.carousel-wrapper .carousel .carousel-cell.is-selected {
  transform: scale(1.2);
}
.carousel-wrapper .carousel .carousel-cell.is-selected .line {
  height: 35px;
}
.carousel-wrapper .carousel .carousel-cell.is-selected .price, .carousel-wrapper .carousel .carousel-cell.is-selected .more {
  opacity: 1;
}
.carousel-wrapper .flickity-page-dots {
  display: none;
}
.carousel-wrapper .flickity-viewport, .carousel-wrapper .flickity-slider {
  overflow: visible;
}
    </style>
    </head>

      <body>
      @section('content')
      @foreach($news as $newsitem)
      <link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.min.css">
      <script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>
      
      <div class="carousel-wrapper">
        <div class="carousel" data-flickity>
          <div class="carousel-cell">
            <h3>{{ $newsitem->title }}</h3>
            <a class="more" href="">writer:....</a>
            <img src="{{ asset($newsitem->image ) }}" />
            <div class="line"></div>
            {{-- <div class="price">
              {{-- <span>{{ $newsitem->description }}</span> --}}
            {{-- </div> --}} 
          </div>
        </div>
      </div>
    @endforeach
    @endsection
        </body>
