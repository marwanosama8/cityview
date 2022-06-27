@extends('layouts.master')
@section('content')
    <!-- start bg-home-img -->
    <section class="bg-home">
        <div class="container">
            <div class="text-home-bg text-center">
                <h1>Gallery</h1>
            </div>
            <div class="link-book">
                <a href="bookpage.html">
                    <i class="fa-solid fa-book-open"></i>
                    BOOK NOW
                </a>
            </div>
        </div>
        <div class="logo-down">
            <a href="#Gallery" class="go-down">
                <i class="fas fa-angle-double-down fa-2x"></i>
            </a>
        </div>
    </section>
    <!-- end bg-home-img -->

    <div id="Gallery" class="enwan-page">
        <h1>OUR GALLERY</h1>
        <p>
            Since its opening, Hotel City has gained popularity among tourists in
            Tbilisi due to its location, service and warm atmosphere. Always kept up
            to date, the Art Deco interiors of the hotel feature a harmonious
            combination of soft colors and modern accessories that create an
            atmosphere of welcoming symbolic of Tbilisi.
        </p>
    </div>

    <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->

    <section class="gallery">
        <div class="container">
            <div class="row">
                <div class="gallery-filter">
                    <span class="filter-item active" data-filter="all">all</span>
                    <span class="filter-item" data-filter="Rooms">Rooms</span>
                    <span class="filter-item" data-filter="Swimming">Swimming</span>
                    <span class="filter-item" data-filter="Gym">Gym</span>
                    <span class="filter-item" data-filter="Loopy">Loopy</span>
                    <span class="filter-item" data-filter="Restaurant">Restaurant</span>
                </div>
            </div>
            <div class="row">
                @foreach ($swimming as $item)
                    <!-- start Swimming image -->
                    <div class="gallery-item Swimming">
                        <div class="gallery-item-inner">
                            <img src="{{ $item->getFirstMediaUrl('avatar') }}" alt="headphone" />
                        </div>
                    </div>
                @endforeach
                {{-- <div class="gallery-item Swimming">
              <div class="gallery-item-inner">
                <img
                src="{{asset('assets/images/Swimming.image/Swimming-2.png')}}"
                  alt="headphone"
                />
              </div>
            </div>
            <div class="gallery-item Swimming"> --}}
                {{-- <div class="gallery-item-inner">
                <img
                  src="{{asset('assets/images/Swimming.image/Swimming-3.png')}}"
                  alt="headphone"
                  />
                </div>
              </div>
              <div class="gallery-item Swimming">
                <div class="gallery-item-inner">
                  <img
                  src="{{asset('assets/images/Swimming.image/Swimming-4.png')}}"
                  alt="headphone"
                  />
                </div>
              </div>
              <div class="gallery-item Swimming">
                <div class="gallery-item-inner">
                  <img
                  src="{{asset('assets/images/Swimming.image/Swimming-5.png')}}"
                  alt="headphone"
                  />
                </div>
              </div> --}}
                <!-- start Swimming image -->

                @foreach ($gym as $item)
                    <!-- start Gym image -->
                    <div class="gallery-item Gym">
                        <div class="gallery-item-inner">
                            <img src="{{ $item->getFirstMediaUrl('avatar') }}" alt="camera" />
                        </div>
                    </div>
                @endforeach

                {{-- <div class="gallery-item Gym">
              <div class="gallery-item-inner">
                <img src="{{asset('assets/images/Gym.image/Gym-2.png')}}" alt="camera" />
              </div>
            </div>
            <div class="gallery-item Gym">
              <div class="gallery-item-inner">
                <img src="{{asset('assets/images/Gym.image/Gym-3.png')}}" alt="camera" />
              </div>
            </div>
            <div class="gallery-item Gym">
              <div class="gallery-item-inner">
                <img src="{{asset('assets/images/Gym.image/Gym-4.png')}}" alt="camera" />
              </div>
            </div>
            <div class="gallery-item Gym">
              <div class="gallery-item-inner">
                <img src="{{asset('assets/images/Gym.image/Gym-5.png')}}" alt="camera" />
              </div>
            </div>
            <div class="gallery-item Gym">
              <div class="gallery-item-inner">
                <img src="{{asset('assets/images/Gym.image/Gym-6.png')}}" alt="camera" />
              </div>
            </div>
            <div class="gallery-item Gym">
              <div class="gallery-item-inner">
                <img src="{{asset('assets/images/Gym.image/Gym-7.png')}}" alt="camera" />
              </div>
            </div>
            <div class="gallery-item Gym">
              <div class="gallery-item-inner">
                <img src="{{asset('assets/images/Gym.image/Gym-8.png')}}" alt="camera" />
              </div>
            </div> --}}
                <!-- start Gym image -->
                <!-- start Loopy image -->
                @foreach ($loopy as $item)
                    <div class="gallery-item Loopy">
                        <div class="gallery-item-inner">

                            <img src="{{ $item->getFirstMediaUrl('avatar') }}" alt="phone" />
                        </div>
                    </div>
                @endforeach
                {{-- <div class="gallery-item Loopy">
              <div class="gallery-item-inner">
                <img src="{{asset('assets/images/Loopy.image/Loopy-2.png')}}" alt="phone" />
              </div>
            </div>
            <div class="gallery-item Loopy">
              <div class="gallery-item-inner">
                <img src="{{asset('assets/images/Loopy.image/Loopy-3.png')}}" alt="phone" />
              </div>
            </div>
            <div class="gallery-item Loopy">
              <div class="gallery-item-inner">
                <img src="{{asset('assets/images/Loopy.image/Loopy-4.png')}}" alt="phone" />
              </div>
            </div>
            <div class="gallery-item Loopy">
              <div class="gallery-item-inner">
                <img src="{{asset('assets/images/Loopy.image/Loopy-5.png')}}" alt="phone" />
              </div>
            </div>
            <div class="gallery-item Loopy">
              <div class="gallery-item-inner">
                <img src="{{asset('assets/images/Loopy.image/Loopy-6.png')}}" alt="phone" />
              </div>
            </div>
            <div class="gallery-item Loopy">
              <div class="gallery-item-inner">
                <img src="{{asset('assets/images/Loopy.image/Loopy-7.png')}}" alt="phone" />
              </div>
            </div>
            <div class="gallery-item Loopy">
              <div class="gallery-item-inner">
                <img src="{{asset('assets/images/Loopy.image/Loopy-7.png')}}" alt="phone" />
              </div>
            </div>
            <div class="gallery-item Loopy">
              <div class="gallery-item-inner">
                <img src="{{asset('assets/images/Loopy.image/Loopy-8.png')}}" alt="phone" />
              </div>
            </div>
            <div class="gallery-item Loopy">
              <div class="gallery-item-inner">
                <img src="{{asset('assets/images/Loopy.image/Loopy-9.png')}}" alt="phone" />
              </div>
            </div>
            <div class="gallery-item Loopy">
              <div class="gallery-item-inner">
                <img src="{{asset('assets/images/Loopy.image/Loopy-10.png')}}" alt="phone" />
              </div>
            </div> --}}
                <!-- end Loopy image -->

                <!-- start Restaurant image -->
                @foreach ($restaurant as $item)
                    
                    <div class="gallery-item Restaurant">
                        <div class="gallery-item-inner">
                            <img src="{{ $item->getFirstMediaUrl('avatar') }}" alt="camera" />
                        </div>
                    </div>
                @endforeach
                {{-- <div class="gallery-item Restaurant">
                    <div class="gallery-item-inner">
                        <img src="{{ asset('assets/images/Restaurant.image/Restaurant-2.png') }}" alt="camera" />
                    </div>
                </div>
                <div class="gallery-item Restaurant">
                    <div class="gallery-item-inner">
                        <img src="{{ asset('assets/images/Restaurant.image/Restaurant-3.png') }}" alt="camera" />
                    </div>
                </div>
                <div class="gallery-item Restaurant">
                    <div class="gallery-item-inner">
                        <img src="{{ asset('assets/images/Restaurant.image/Restaurant-4.png') }}" alt="camera" />
                    </div>
                </div>
                <div class="gallery-item Restaurant">
                    <div class="gallery-item-inner">
                        <img src="{{ asset('assets/images/Restaurant.image/Restaurant-5.png') }}" alt="camera" />
                    </div>
                </div> --}}
                <!-- end Restaurant image -->

                <!-- start Room image -->
                @foreach ($room as $item)
                  
                  <div class="gallery-item Rooms">
                    <div class="gallery-item-inner">
                        <img src="{{$item->getFirstMediaUrl('avatar')}}" alt="watch" />
                    </div>
                </div>
                      @endforeach
                {{-- <div class="gallery-item Rooms">
                    <div class="gallery-item-inner">
                        <img src="{{ asset('assets/images/Room.image/Room-2.png') }}" alt="watch" />
                    </div>
                </div>
                <div class="gallery-item Rooms">
                    <div class="gallery-item-inner">
                        <img src="{{ asset('assets/images/Room.image/Room-3.png') }}" alt="watch" />
                    </div>
                </div>
                <div class="gallery-item Rooms">
                    <div class="gallery-item-inner">
                        <img src="{{ asset('assets/images/Room.image/Room-4.png') }}" alt="watch" />
                    </div>
                </div>
                <div class="gallery-item Rooms">
                    <div class="gallery-item-inner">
                        <img src="{{ asset('assets/images/Room.image/Room-5.png') }}" alt="watch" />
                    </div>
                </div>
                <div class="gallery-item Rooms">
                    <div class="gallery-item-inner">
                        <img src="{{ asset('assets/images/Room.image/Room-6.png') }}" alt="watch" />
                    </div>
                </div>
                <div class="gallery-item Rooms">
                    <div class="gallery-item-inner">
                        <img src="{{ asset('assets/images/Room.image/Room-7.png') }}" alt="watch" />
                    </div>
                </div>
                <div class="gallery-item Rooms">
                    <div class="gallery-item-inner">
                        <img src="{{ asset('assets/images/Room.image/Room-8.png') }}" alt="watch" />
                    </div>
                </div>
                <div class="gallery-item Rooms">
                    <div class="gallery-item-inner">
                        <img src="{{ asset('assets/images/Room.image/Room-9.png') }}" alt="watch" />
                    </div>
                </div> --}}
                <!-- end Room image -->
            </div>
        </div>
    </section>

    <style media="screen">
        body {
            line-height: 1.5;
            font-family: sans-serif;
        }

        * {
            margin: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 1170px;
            margin: auto;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        img {
            max-width: 100%;
            vertical-align: middle;
        }

        /*.gallery*/
        .gallery {
            width: 100%;
            display: block;
            min-height: 100vh;
            background-color: transparent;
            margin-top: 100px;
        }

        .gallery .gallery-filter {
            padding: 0 15px;
            width: 100%;
            text-align: center;
            margin-bottom: 40px;
        }

        .gallery .gallery-filter .filter-item {
            color: #14274a;
            font-size: 17px;
            border: 2px solid #14274a;
            text-transform: uppercase;
            display: inline-block;
            border-radius: 20px;
            margin-right: 8px;
            cursor: pointer;
            padding: 8px 20px 8px 20px;
            line-height: 1.1;
            transition: all 0.3s ease;
        }

        .gallery .gallery-filter .filter-item:hover {
            background: #14274a;
            color: white;
        }

        .gallery .gallery-filter .filter-item.active {
            color: white;
            border: 2px solid #e7c377;
            background: #14274a;
        }

        .gallery .gallery-item {
            width: calc(100% / 3);
            padding: 15px;
        }

        .gallery .gallery-item-inner img {
            width: 350px;
            height: 250px;
            border-width: 4px;
            border-style: solid;
            border-image: linear-gradient(to right, #e7c377 50%, #14274a) 1;
            transition: all 0.5s;
        }

        .gallery .gallery-item-inner img:hover {
            /* border-radius: 20%; */
            transform: scale(1.03, 1.03);
        }

        @media (max-width: 1200px) {
            .gallery .gallery-item-inner img {
                width: 100%;
                height: 250px;
            }
        }

        @media (max-width: 991px) {
            .gallery .gallery-item-inner img {
                width: 100%;
                height: 200px;
            }

            .gallery .gallery-filter .filter-item {
                color: #14274a;
                font-size: 15px;
                border: 2px solid #14274a;
                text-transform: uppercase;
                display: inline-block;
                border-radius: 20px;
                margin-right: 0;
                width: 135px;
                cursor: pointer;
                /* padding: 0; */
                padding: 8px;
                line-height: 1.1;
                transition: all 0.3s ease;
            }

            .gallery .gallery-filter {
                padding: 0 15px;
                width: 100%;
                text-align: center;
                line-height: 3;
                margin-bottom: 30px;
            }
        }

        @media (max-width: 767px) {
            .gallery .gallery-item-inner img {
                width: 100%;
                height: 250px;
            }
        }

        .gallery .gallery-item.show {
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .gallery .gallery-item.hide {
            display: none;
        }

        /*responsive*/
        @media (max-width: 491px) {
            .gallery .gallery-item {
                width: 50%;
            }
        }

        @media (max-width: 467px) {
            .gallery .gallery-item {
                width: 100%;
            }

            .gallery .gallery-filter .filter-item {
                margin-bottom: 10px;
            }
        }
    </style>

    <script>
        const filterContainer = document.querySelector(".gallery-filter"),
            galleryItems = document.querySelectorAll(".gallery-item");

        filterContainer.addEventListener("click", (event) => {
            if (event.target.classList.contains("filter-item")) {
                // deactivate existing active 'filter-item'
                filterContainer.querySelector(".active").classList.remove("active");
                // activate new 'filter-item'
                event.target.classList.add("active");
                const filterValue = event.target.getAttribute("data-filter");
                galleryItems.forEach((item) => {
                    if (item.classList.contains(filterValue) || filterValue === "all") {
                        item.classList.remove("hide");
                        item.classList.add("show");
                    } else {
                        item.classList.remove("show");
                        item.classList.add("hide");
                    }
                });
            }
        });
    </script>
    <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
@endsection
