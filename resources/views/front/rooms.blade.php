@extends('layouts.master')
@section('content')

    <!-- start bg-home-img -->
    <section class="bg-Room-Pag">
        <div class="container">
          <div class="text-home-bg">
            <h2>WELCOME TO</h2>
            <h1>CITY VIEW</h1>
            <h2>HOTELS</h2>
            <p>
              Book your stay and enjoy Luxury redefined at the most affordable
              rates.
            </p>
          </div>
          <div class="link-book">
            <a href="{{route('register')}}">
              <i class="fa-solid fa-book-open"></i>
              BOOK NOW
            </a>
          </div>
        </div>
        <div class="logo-down">
          <a href="#sec-roooom" class="go-down">
            <i class="fas fa-angle-double-down fa-2x"></i>
          </a>
        </div>
      </section>
      <!-- end bg-home-img -->

      <!-- start slider Room page -->
      <div id="sec-roooom" class="container">
        <div class="enwan-page">
          <h1>ROOMS AND RATES</h1>
          <p>
            Each of our bright, light-flooded rooms come with everything you could
            possibly need for a comfortable stay. And yes, comfort isn’t our only
            objective, we also value good design, sleek contemporary furnishing
            complemented by the rich tones of nature’s palette as visible from our
            rooms’ sea-view windows and terraces.
          </p>
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
              <div class="carousel-item active">
                <img
                  src="{{asset('assets/images/slder-test.png')}}"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="{{asset('assets/images/slder-test.png')}}"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
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
              <a href="{{route('register')}}">
                <i class="fa-solid fa-circle-plus"></i> VIEW AVAILABLE ROOM
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
              <a href="{{route('register')}}">
                <i class="fa-solid fa-circle-plus"></i> VIEW AVAILABLE ROOM
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
              <a href="{{route('register')}}">
                <i class="fa-solid fa-circle-plus"></i> VIEW AVAILABLE ROOM
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
