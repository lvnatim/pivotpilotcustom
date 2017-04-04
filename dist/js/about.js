$('.fade-slide-container').slick({
  adaptiveHeight: true,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 5000,
  dots: true,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear'
});

$('#featured-team-members').slick({
  arrows: true,
  appendArrows: $('#featured-team-members-controller'),
  centerMode: true,
  centerPadding: '25vw',
  slidesToShow: 1,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerPadding: '15px',
        initialSlide: 1,
        infinite: true,
        slidesToShow: 1
      }
    }
  ]
});