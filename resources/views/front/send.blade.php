@extends('layouts.master')

@section('content')
    
    <!-- start bg-home-img -->
    <section class="bg-Register-two-Pag">
        <div class="container">
          <div class="text-home-bg">
            <h1>Single Room</h1>
          </div>
        </div>
        <div class="logo-down">
          <a href="#sec-register-two" class="go-down">
            <i class="fas fa-angle-double-down fa-2x"></i>
          </a>
        </div>
      </section>
      <!-- end bg-home-img -->
  
      <!-- start section img single room -->
      <section id="sec-register-two" class="section-Register-two-all">
        <div class="container">
          <div class="div-page-single-room-alll">
            <div class="div-img-single-room-all">
              <div class="img-sinle-room">
                <img src="{{asset('assets/images/img-register-two.png')}}" alt="" />
              </div>
              <div class="enwan-img-single">
                <h3>Deluxe Single Room</h3>
              </div>
              <div class="div-small-img-one">
                <img src="{{asset('assets/images/small-img-one.png')}}" alt="" />
                <img src="{{asset('assets/images/small-img-two.png')}}" alt="" />
                <img src="{{asset('assets/images/small-img-three.png')}}" alt="" />
                <img src="{{asset('assets/images/small-img-four.png')}}" alt="" />
              </div>
              <div class="div-small-img-two">
                <img src="{{asset('assets/images/small-img-five.png')}}" alt="" />
                <img src="{{asset('assets/images/small-img-six.png')}}" alt="" />
                <img src="{{asset('assets/images/small-img-seven.png')}}" alt="" />
                <img src="{{asset('assets/images/small-img-eight.png')}}" alt="" />
              </div>
              <div class="room-overview">
                <h3>ROOM OVERVIEW</h3>
                <p>
                  A panoramic room with a double bed is located on the top floor
                  of the hotel, offering a delightful view of the Narikala
                  Fortress, Holy Trinity and the Catholic Church. The room is
                  decorated in warm light green tones and is ideal for creative
                  people, as the views from the windows of the room and the
                  bathroom will inspire new ideas. The room is equipped with an
                  electric kettle with daily coffee and tea restocking, a work
                  desk and a minibar.
                </p>
              </div>
            </div>
  
            <div class="text-form-details-single-page">
              <div class="details-form-single">
                <p>PRICE ROOM</p>
                <h2>357 SAR</h2>
                <h6>Check-in: 05/20/2022</h6>
                <h6>Check-out: 06/30/2022</h6>
                <h6>Adults: 2</h6>
                <h6>Children: 0</h6>
                <button>Change seach</button>
              </div>
              <div class="form-single-room-page">
                <form id="contact-form" method="POST">
                    <label for="">Name</label>
                    <input name="name" id="name" type="text" required/>
                    <label for="">Email Address</label>
                    <input name="email" id="email" type="email" required/>
                    <label for="">Phone:</label>
                    <input  type="number" />
                    <label for="">Message:</label>
                    <input id="message" name="message" type="text" required />
                    <h6>Reservation summary</h6>
                    <div class="box-check-form-single">
                        <p>Check-in: 05/22/2022 - Change</p>
                        <p>Check-out: 06/13/2022 - Change</p>
                        <p>Number of nights: 22</p>
                        <p>Adults: 1 - Change</p>
                        <p>Children: 0 - Change</p>
                        <p>Total price: 7,854.00 SAR</p>
                    </div>
                    <button type="submit" class="last-btn">Book Now</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end section img single room -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <script>
        var form = $('#contact-form');
        form.submit(function(event) {
            event.preventDefault();

            var data = {
                name: $('#name').val(),
                email: $('#email').val(),
                message: $('#message').val()
            };

            $.ajax({
                url: '{{ url("api/sendemail") }}',
                type: "POST",
                dataType: "json",
                data: {
                    'data': data
                },
                success: function(data) {
                    if (data == 1) {
                        alert('Thank you! Your message has been send')
                    } else {
                        alert('There is something went wrong')
                    }
                },
            });
        });
    </script>
@endsection