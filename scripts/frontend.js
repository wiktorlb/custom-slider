// This script is loaded both on the frontend page and in the Visual Builder.

jQuery(function($) {
    $('.front-slick').slick({
        arrows: false,
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        centerMode: true,
        centerPadding: '20px',
    });
});
