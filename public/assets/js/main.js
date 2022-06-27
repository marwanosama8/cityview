// start NavBar

let Nav = document.querySelector(".Nav");
let navLink = document.querySelector(".lnk");
let navLink2 = document.querySelector(".lnk2");
let navLink3 = document.querySelector(".lnk3");
let navLink4 = document.querySelector(".lnk4");
let navLink5 = document.querySelector(".lnk5");
let LogoNav = document.querySelector(".Logo-nav");

window.onscroll = function () {
  if (this.scrollY > 100) {
    Nav.style.cssText = `background-color:#14274a;
     border-radius: 0 0 15px 15px;
     box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.425);
     `;
    navLink.style.cssText = "color: white;";
    navLink2.style.cssText = "color: white;";
    navLink3.style.cssText = "color: white;";
    navLink4.style.cssText = "color: white;";
    navLink5.style.cssText = "color: white;";
    LogoNav.style.cssText = "color: white;";
  } else {
    Nav.style.cssText = "background-color:none;";
    navLink.style.cssText = "color: white;";
    navLink2.style.cssText = "color: white;";
    navLink3.style.cssText = "color: white;";
    navLink4.style.cssText = "color: white;";
    navLink5.style.cssText = "color: white;";
    LogoNav.style.cssText = "color: white;";
  }
};

// end NavBar

// start slider
$(".owl-carousel").owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  // autoplay: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 1,
    },
    1000: {
      items: 1,
    },
  },
});
// end slider

var swiper = new Swiper(".mySwiper", {
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

// start nav active
// $(document).on("click", "ul li", function () {
//   $(this).addClass("active").siblings().removeClass("active");
// });
// end nav active
