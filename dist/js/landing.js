$('#home-case-studies h3, #home-case-studies span, #home-case-studies .slide-image-cont').hover( function(){
  $('.featured-case-studies-face').toggleClass('active');
});

$('.landing-face').on('click', function(event) {
  event.preventDefault();
  const window_width = $(window).width();
  if(window_width >= 768){
    $('html, body').animate({
      scrollTop: $('#featured-case-studies-button').offset().top - $('#menu').outerHeight()
    }, 1000);
  } else {
    $('html, body').animate({
    scrollTop: $('#featured-case-studies-button').offset().top - $('#mobile-menu').outerHeight()
    }, 1000);
  }


})

$("#main-landing").on('mousemove', function(e){
 var parentOffset = $(this).parent().offset();
 var relX = e.pageX - parentOffset.left;
 var relY = e.pageY - parentOffset.top;
 $(this).attr({style: 'background: radial-gradient(circle farthest-corner at ' + relX + 'px ' + relY + 'px' + ', #FFFFFF 0%, #443CFF 95%);'});
});