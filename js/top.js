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
    autoplay: true,
    autoplaySpeed: 3000,
    dots: true,
    speed: 300,
    responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '20px',
            slidesToShow: 1
          }
        }
      ]
});