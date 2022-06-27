@extends('layouts.master')
@section('content')
    
        <!-- start bg-home-img -->
        <section class="bg-register-Book-one-Pag">
            <div class="container">
              <div class="text-home-bg">
                <h1>BOOK</h1>
              </div>
            </div>
            <div class="logo-down">
              <a href="#sec-contact" class="go-down">
                <i class="fas fa-angle-double-down fa-2x"></i>
              </a>
            </div>
          </section>
          <!-- end bg-home-img -->
      
          <div class="container">
            <div class="enwan-chek-chek">
              <h6>Check-in: 05/20/2022</h6>
              <h6>Check-out: 06/30/2022</h6>
              <h6>Adults: 2</h6>
              <h6>Children: 0</h6>
              <button>Change search</button>
            </div>
          </div>
      
          <style></style>
      
          <!-- start slider Room page -->
          <div id="sec-roooom" class="container">
            <div class="enwan-page">
              <p>We have found 8 types of accommodation that suit your needs.</p>
              <h5>Select your accommodation</h5>
            </div>
          </div>
          <section class="Room-slider-one">
            <div class="container">
              <div
                id="carouselExampleCaptions"
                class="carousel slide"
                data-ride="carousel"
                data-interval="false"
              >
                <div class="carousel-indicators">
                  <button
                    type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Slide 1"
                  ></button>
                  <button
                    type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide-to="1"
                    aria-label="Slide 2"
                  ></button>
                  <button
                    type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide-to="2"
                    aria-label="Slide 3"
                  ></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-interval="500">
                    <img
                      src="{{asset('assets/images/slder-test.png')}}"
                      class="d-block w-100"
                      alt="..."
                    />
                  </div>
                  <div class="carousel-item" data-interval="200">
                    <img
                      src="{{asset('assets/images/slder-test.png')}}"
                      class="d-block w-100"
                      alt="..."
                    />
                  </div>
                  <div class="carousel-item" data-interval="600">
                    <img
                      src="{{asset('assets/images/slder-test.png')}}"
                      class="d-block w-100"
                      alt="..."
                    />
                  </div>
                </div>
              </div>
              <div class="box-under-slider">
                <div class="enwan-box-under-slider">
                  <h2>DELUXE KING ROOM</h2>
                </div>
                <div class="View-detals">
                  <a href="{{route('send.register')}}">
                    <i class="fa-solid fa-circle-plus"></i> VIEW ROOM DETAILS
                  </a>
                  <p>$147 Avg/night</p>
                </div>
              </div>
            </div>
          </section>
          <section class="Room-slider-one">
            <div class="container">
              <div
                id="carouselExampleIndicators"
                class="carousel slide"
                data-ride="carousel"
                data-interval="false"
              >
                <div class="carousel-indicators">
                  <button
                    type="button"
                    data-bs-target="#carouselExampleIndicators"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Slide 1"
                  ></button>
                  <button
                    type="button"
                    data-bs-target="#carouselExampleIndicators"
                    data-bs-slide-to="1"
                    aria-label="Slide 2"
                  ></button>
                  <button
                    type="button"
                    data-bs-target="#carouselExampleIndicators"
                    data-bs-slide-to="2"
                    aria-label="Slide 3"
                  ></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      src="{{asset('assets/images/slider-page-room')}}-two.png"
                      class="d-block w-100"
                      alt="..."
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="{{asset('assets/images/slider-page-room')}}-two.png"
                      class="d-block w-100"
                      alt="..."
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="{{asset('assets/images/slider-page-room')}}-two.png"
                      class="d-block w-100"
                      alt="..."
                    />
                  </div>
                </div>
              </div>
              <div class="box-under-slider">
                <div class="enwan-box-under-slider">
                  <h2>DELUXE TWIN ROOM</h2>
                </div>
                <div class="View-detals">
                  <a href="{{route('send.register')}}">
                    <i class="fa-solid fa-circle-plus"></i> VIEW ROOM DETAILS
                  </a>
                  <p>$147 Avg/night</p>
                </div>
              </div>
            </div>
          </section>
          <section class="Room-slider-one">
            <div class="container">
              <div
                id="carouselExampleInterval"
                class="carousel slide"
                data-ride="carousel"
                data-interval="false"
              >
                <div class="carousel-indicators">
                  <button
                    type="button"
                    data-bs-target="#carouselExampleInterval"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Slide 1"
                  ></button>
                  <button
                    type="button"
                    data-bs-target="#carouselExampleInterval"
                    data-bs-slide-to="1"
                    aria-label="Slide 2"
                  ></button>
                  <button
                    type="button"
                    data-bs-target="#carouselExampleInterval"
                    data-bs-slide-to="2"
                    aria-label="Slide 3"
                  ></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      src="{{asset('assets/images/slider-page-room-one.png')}}"
                      class="d-block w-100"
                      alt="..."
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="{{asset('assets/images/slider-page-room')}}-one.png"
                      class="d-block w-100"
                      alt="..."
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="{{asset('assets/images/slider-page-room')}}-one.png"
                      class="d-block w-100"
                      alt="..."
                    />
                  </div>
                </div>
              </div>
              <div class="box-under-slider">
                <div class="enwan-box-under-slider">
                  <h2>TWIN ROOM</h2>
                </div>
                <div class="View-detals">
                  <a href="{{route('send.register')}}">
                    <i class="fa-solid fa-circle-plus"></i> VIEW ROOM DETAILS
                  </a>
                  <p>$147 Avg/night</p>
                </div>
              </div>
            </div>
          </section>
          <!-- end slider Room page -->
      
          <!-- start section testaminiol slider -->
          <section class="sec-testimonials">
            <div class="container">
              <div class="owl-carousel owl-theme">
                <div class="item">
                  <h2>Testimonials</h2>
                  <h5>"Calm, Serene, Retro – What a way to relax and enjoy"</h5>
                  <p>Mr. and Mrs. Baxter, UK</p>
                </div>
                <div class="item">
                  <h2>Testimonials</h2>
                  <h5>"Calm, Serene, Retro – What a way to relax and enjoy"</h5>
                  <p>Mr. and Mrs. Baxter, UK</p>
                </div>
                <div class="item">
                  <h2>Testimonials</h2>
                  <h5>"Calm, Serene, Retro – What a way to relax and enjoy"</h5>
                  <p>Mr. and Mrs. Baxter, UK</p>
                </div>
              </div>
            </div>
          </section>
          <!-- end section testaminiol slider -->

@endsection