$(document).ready(function () {
  $("#owl-one").owlCarousel({
    responsiveClass: true,
    margin: 0,
    loop: false,
    dots: false,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 3,
      },
    },
  });

  $("#owl-two").owlCarousel({
    responsiveClass: true,
    margin: 50,
    loop: false,
    dots: false,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 2,
      },
    },
  });
});
