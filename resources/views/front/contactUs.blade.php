@extends('layouts.master')
@section('content')
    <!-- start bg-home-img -->
    <section class="bg-contact-Pag">
        <div class="container">
            <div class="text-home-bg">
                <h1>CONTACT-US</h1>
            </div>
        </div>
        <div class="logo-down">
            <a href="#sec-contact" class="go-down">
                <i class="fas fa-angle-double-down fa-2x"></i>
            </a>
        </div>
    </section>
    <!-- end bg-home-img -->

    <!-- start section contact us -->
    <section id="sec-contact" class="sec-contact-us">
        <div class="container">
            <h2>WE ARE HERE FOR YOU</h2>
            <p>
                At Luxury Hotels, we take our customers seriously. Do you have any
                enquiries, compaints or requests, please forward it to our support
                desk and we will get back to you as soon as possible.
            </p>
            <br />
            <br />
            <div class="location-and-form-all">
                <div class="div-location">
                    <h5>Al Naseem, Jeddah, Saudi Arabia</h5>
                    <div class="location">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14846.681056852156!2d39.22226582892957!3d21.52063177174229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3ce04753fe74b%3A0x97e75a632bce7825!2sAn%20Naseem%2C%20Jeddah%20Saudi%20Arabia!5e0!3m2!1sen!2seg!4v1652537050238!5m2!1sen!2seg"
                            width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <a href="tel:+6494461709"> Phone: 0122889699 </a>
                    <a href="mailto:cityview@gmail.com"> cityview@gmail.com </a>
                </div>
                <div class="form-location-contact">
                    <form id="contact-form" method="post" action="">
                        <label for="">Name</label>
                        <input name="name" type="text" id="name" required />
                        <label for="">Email Address</label>
                        <input id="email" name="email" type="email" required />
                        <label for="">Message</label>
                        <textarea name="message" id="message"></textarea>
                        <button>Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end section contact us -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        var form = $('#contact-form');
        form.submit(function(event) {
            event.preventDefault();
            var form_status = $('<div class="form_status"></div>');

            var data = {
                name: $('#name').val(),
                email: $('#email').val(),
                message: $('#message').val()
            };

            $.ajax({
                url: {{ route('send.mail') }},
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
