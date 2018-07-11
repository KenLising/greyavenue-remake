@extends('onlineshop.layout.app')

@section('content')
<div id="myCarousel" class="carousel slide ml-1 mr-1" data-ride="carousel">

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/cs1.jpg') }}">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/cs2.jpg') }}">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/cs3.jpg') }}">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/cs4.jpg') }}">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/cs5.jpg') }}">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
@endsection