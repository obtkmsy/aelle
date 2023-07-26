//グローバルナビのフロート

$(window).scroll(function(){
    indicateHeight = $('.header').height(); 
if ($(window).scrollTop() > indicateHeight + 18) {
$('.header').addClass('float');
} else {
$('.header').removeClass('float');
}
});

$('.slick').slick({
    // autoplay: true,
    // autoplaySpeed: 3000,
    dots: true,
    infinite: true,
    speed: 300,
    variableWidth: true,
    responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ]
});