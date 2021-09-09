@extends('layouts.app')

@section('content')
{{--  <carousel-component></carousel-component>--}}
  <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner" >
              <div class="carousel-item active">
                  <img src="/index.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                  <img src="/images.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                  <img src="/indexCon.jpg" class="d-block w-100" alt="...">
              </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
          </button>
      </div>
  </div>

<carousel-component :autoplay="true">
    <img src="https://placeimg.com/640/480/any">
    <img src="https://placeimg.com/640/480/any?2">
    <img src="https://placeimg.com/640/480/any?3">
    <img src="https://placeimg.com/640/480/any?4">
    <img src="https://placeimg.com/640/480/any?5">
</carousel-component>
    <example-component></example-component>
@endsection
