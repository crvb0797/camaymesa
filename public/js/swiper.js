/* var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
    },
  }); */

  $(document).ready(function() {
    $("#owl1").owlCarousel({
        dots: false,
        loop: true,
        /* center: true, */
        autoplay: true,
        autoplayTimeout: 10000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 1,
            },
            768: {
                items: 1,
            }
        },
    });

    $("#owl2").owlCarousel({
        dots: true,
        loop: true,
        margin: 50,
        autoplay: true,
        autoplayTimeout: 10000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 1,
            },
            768: {
                items: 3,
            }
        },
    });

    $("#owl3").owlCarousel({
      dots: true,
      autoplay: true,
      autoplayTimeout: 10000,
      autoplayHoverPause: true,
      loop:true,
      navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
      margin:10,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
              nav: false,
          },
          600:{
              items:2,
              nav:true,
          },
          1000:{
              items:3,
              nav:true,
          }
      }
     
  });
});