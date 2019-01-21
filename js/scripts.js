// $(document).ready(function () {

//     // Menu responsive
//     $(".burger").sidr({
//         source: ".main-nav",
//         displace: false,
//     });

//     $('body').click(function () {
//         $.sidr('close', 'sidr');
//     });

//     // Carousel
//     $(".owl-carousel").owlCarousel({
//         loop: true,
//         nav: true,
//         items: 1,
//         navText: ['Précédent', 'Suivant'],
//     });

// });


$('.element').each(function() {
    $(this).mouseover(function() {
        $(this).addClass('active');
      $('.stage').children('.element').not('.active').addClass('inactive');
    });
    $(this).mouseleave(function() {
        $(this).removeClass('active');
        $('.stage').children('.element').not('.active').removeClass('inactive');
    });
});