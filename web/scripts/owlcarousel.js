$(document).ready(function () {
  $("#owl-one").owlCarousel({
    nav: true,
    navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
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

$('.owl-next').click(function() {
  $("#owl-one").owlCarousel.trigger('next.owl.carousel');
})

// Go to the previous item
$('.owl-prev').click(function() {
    owl.trigger('prev.owl.carousel');
})