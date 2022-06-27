  <!-- start NavBar -->
  <nav id="Nav"  class="navbar navbar-expand-lg fixed-top Nav">
    <div class="container">
      <a class="navbar-brand Logo-nav" href="{{route('index')}}">
        <img src="{{asset('assets/images/logo-City-without-Bg.png')}}" height="70px" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
          <i class="fa-solid fa-bars"></i>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link lnk" href="{{route('index')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link lnk2" href="{{route('facilities')}}">Facilities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link lnk3" href="{{route('rooms')}}">Rooms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link lnk4" href="{{route('gallery')}}">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link lnk4" href="{{route('contact.us')}}">Contact-us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link lnk5" href="{{route('book')}}">Book</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!-- end NavBar -->
