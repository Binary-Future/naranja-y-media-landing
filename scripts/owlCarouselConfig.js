$(document).ready(function () {
  $("#owl-one").owlCarousel({
    nav: true,
    navText: [
      '<i class="fa fa-angle-left" aria-hidden="true"></i>',
      '<i class="fa fa-angle-right" aria-hidden="true"></i>',
    ],
    responsiveClass: true,
    margin: 0,
    loop: false,
    dots: false,
    responsive: {
      0: {
        items: 1,
      },
      700: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });

  $("#owl-two").owlCarousel({
    nav: true,
    navText: [
      '<i class="fa fa-angle-left" aria-hidden="true"></i>',
      '<i class="fa fa-angle-right" aria-hidden="true"></i>',
    ],
    responsiveClass: true,
    margin: 50,
    dots: false,
    loop: false,
    responsive: {
      0: {
        loop: true,
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: true,
        items: 1,
      },
      1000: {
        items: 2,
      },
    },
  });
});
