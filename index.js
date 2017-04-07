$('#mobile-open').on('click', function(){
  $('#mobile-menu-sidebar').addClass('state-opened');
});

$('#mobile-close').on('click', function(){
  $('#mobile-menu-sidebar').removeClass('state-opened');
  $('.inner-button').removeClass('active');
  $('.inner-inner-button').removeClass('active');
});

$('#mobile-menu-sidebar > .overlay').on('click', function(){
  $('#mobile-menu-sidebar').removeClass('state-opened');
  $('.inner-button').removeClass('active');
  $('.inner-inner-button').removeClass('active');
});

$('.inner-button > h1').on('click', function(){
  if($(this).parent().hasClass('active')){
    $('.inner-inner-button').removeClass('active');
    $(this).parent().toggleClass('active');
  } else {
    $(this).parent().toggleClass('active');
  }
});

$('.inner-inner-button > h1').on('click', function(){
  const el = $(this).parent();
  $('.inner-inner-button').not(el).removeClass('active');
  el.toggleClass('active');
});

$('#mc-page-controller > a').on('click', function(){
  $('#mc-page-controller > a').removeClass('state-active');
  $('.mc-page-group').removeClass('state-active');
  $(this).addClass('state-active');
  $('.mc-page-group').eq($(this).index()).addClass('state-active');
})

$('img.svg').each(function(){
  var $img = jQuery(this);
  var imgID = $img.attr('id');
  var imgClass = $img.attr('class');
  var imgURL = $img.attr('src');
  var style = $img.attr('style');

  jQuery.get(imgURL, function(data) {
      // Get the SVG tag, ignore the rest
      var $svg = jQuery(data).find('svg');

      // Add replaced image's ID to the new SVG
      if(typeof imgID !== 'undefined') {
          $svg = $svg.attr('id', imgID);
      }
      // Add replaced image's classes to the new SVG
      if(typeof imgClass !== 'undefined') {
          $svg = $svg.attr('class', imgClass+' replaced-svg');
      }

      // Add replaced image's styles to the new SVG
      if(typeof imgClass !== 'undefined') {
          $svg = $svg.attr('style', style);
      }

      // Remove any invalid XML tags as per http://validator.w3.org
      $svg = $svg.removeAttr('xmlns:a');

      // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
      if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
          $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
      }

      // Replace image with new SVG
      $img.replaceWith($svg);

}, 'xml');

});

$('#featured-service-snippets').slick({
  arrows: false,
  infinite: false,
  slidesToShow: 2,
})


var lastScrollTop = 0;
$(window).scroll(function(event){
   var st = $(this).scrollTop();
   if (st > lastScrollTop){
    // downscroll code
    if(st > 150){
      $('#mobile-menu').addClass('state-hidden');
      $('#share-bar').addClass('state-active');
    }
    $('#menu').removeClass('state-active');
   } else {
    // upscroll code
    $('#menu').addClass('state-active');
    $('#mobile-menu').removeClass('state-hidden');
   }
   lastScrollTop = st;
});

$(window).scroll(function(e){
  if($(window).scrollTop() > $('#menu').outerHeight()){
    $('#menu').addClass('state-toggled');
  } else {
    if($(''))
    $('#menu').removeClass('state-toggled');
  }
});

$(document).ready(function(){
  setTimeout(
    function(){
      $('#loader').removeClass('loading');
      $('#mobile-menu').removeClass('loading');
      $('#menu').removeClass('white');
    },
    1000
  );
  setTimeout(
    function(){
      $('#menu').removeClass('loading');
      $('#change-landing').removeClass('loading');
      $('#menu').addClass('state-active');
    }, 2500
  );
})
