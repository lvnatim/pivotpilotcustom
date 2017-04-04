$('#form-open').on('click', function(){
  $('.form-cont').toggleClass('state-active');
});

$('#form-close').on('click', function(){
  $('.form-cont').removeClass('state-active');
});

$('#blog-related-posts').slick({
  arrows: true,
  centerMode: true,
  centerPadding: '60px',
  infinite: true,
  initialSlide: 0,
  slidesToShow: 2,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerPadding: '11.25px',
        slidesToShow: 1,
      }
    }
  ]
});

$(window).scroll(function(){
  const eTop = $('#share-bar').offset().top - $(window).scrollTop();
  const eLeft = $('#share-bar').offset().left;
  if(eTop <= $(window).outerHeight() / 2){
    $('.social-icons').css({'position':'fixed', 'top': '50vh'})
  } else {
    $('.social-icons').css({'position':'', 'left': ''})
  }

  const eStop = $('#blog-post-custom-fields').offset().top - $(window).scrollTop();
  if(eStop <= $(window).outerHeight() / 2){
    $('.social-icons').css({'transform':'translate(0, -75vh)'});
  } else {
    $('.social-icons').css({'transform':''});
  }

});