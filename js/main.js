

$(document).ready(function(){
  $('#carrousel1').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 1
      }
    }
  })

  var owl1 = $('#carrousel1');
  owl1.owlCarousel();
  // Go to the next item
  $('.next').click(function () {
    owl1.trigger('next.owl.carousel');
  })
  // Go to the previous item
  $('.prev').click(function () {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl1.trigger('prev.owl.carousel', [300]);
  })




});



const go = (direccion) => {

  window.location.href = direccion;

}