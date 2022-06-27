@extends('layouts.master')
@section('content')
    <!-- start bg-home-img -->
    <section class="bg-home">
        <div class="container">
          <div class="text-home-bg">
            <h2>WELCOME TO</h2>
            <h1>CITY VIEW</h1>
            <h2>HOTELS</h2>
            <p>Book your stay and enjoy Luxury
              redefined at the most affordable rates.
            </p>
          </div>
          <div class="link-book">
            <a href="bookpage.html">
              <i class="fa-solid fa-book-open"></i>
              BOOK NOW
            </a>
          </div>
        </div>
        <div class="logo-down">
          <a href="#sec-home-room" class="go-down">
              <i class="fas fa-angle-double-down fa-2x"></i>
          </a>
      </div>
      </section>
      <!-- end bg-home-img -->

      <!-- start section room -->
      <section id="sec-home-room" class="sec-room">
        <div class="container">
          <div class="enwan-room">
            <h3>All our room types are including complementary breakfast</h3>
          </div>
          <div class="text-img-room-all">
            <div class="text-room">
              <h1>Luxury redefined</h1>
              <p>Our rooms are designed to transport
                you into an environment made for leisure.
                Take your mind off the day-to-day of home
                life and find a private paradise for yourself.
              </p>
              <a href="./Rooms.html">
                EXPLORE
              </a>
            </div>
            <div class="img-room">
              <img src="{{asset('assets/images/img-room-one.png')}}" alt="">
            </div>
          </div>
          <div class="text-img-room-all">
            <div class="text-room">
              <h1>Leave your worries in the sand</h1>
              <p>We love life at the beach. Being close
                to the ocean with access to endless sandy
                beach ensures a relaxed state of mind. It
                seems like time stands still watching the
                ocean.
              </p>
              <a href="./Rooms.html">
                EXPLORE
              </a>
            </div>
            <div class="img-room">
              <img src="{{asset('assets/images/img-room-two.png')}}" alt="">
            </div>
          </div>
        </div>
      </section>
      <!-- end section room -->

      <!-- start section testaminiol slider -->
      <section class="sec-testimonials">
        <div class="container">
          <div class="owl-carousel owl-theme">
            <div class="item">
              <h2>Testimonials</h2>
              <h5>"Calm, Serene, Retro – What a way to relax and enjoy"</h5>
              <p> Mr. and Mrs. Baxter, UK</p>
            </div>
            <div class="item">
              <h2>Testimonials</h2>
              <h5>"Calm, Serene, Retro – What a way to relax and enjoy"</h5>
              <p> Mr. and Mrs. Baxter, UK</p>
            </div>
            <div class="item">
              <h2>Testimonials</h2>
              <h5>"Calm, Serene, Retro – What a way to relax and enjoy"</h5>
              <p> Mr. and Mrs. Baxter, UK</p>
            </div>
          </div>
        </div>
      </section>
      <!-- end section testaminiol slider -->

      <!-- start section Bg-Pool-side -->
        <section class="sec-poolside">
          <div class="container">
            <div class="bg-PoolSide-bar">
              <div class="text-Pool">
                <h2>POOLSIDE BAR</h2>
              </div>
            </div>
          </div>
        </section>
      <!-- end section Bg-Pool-side -->
@endsection
