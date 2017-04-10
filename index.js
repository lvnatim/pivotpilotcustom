function outputUpdate(id, val){
  const output_query = "#" + id + "-output";
  document.querySelector(output_query).value = val;
}

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

$(document).on('click', '.toggle-contact' ,function(){
  $('#mobile-menu-sidebar').removeClass('state-opened');
  $('#contact-form').toggleClass('state-active');
});

(function(){

  function notify_form_success(){
    $back_button = $('<a>').addClass('button toggle-contact').html('Back to Site');
    $('#contact-form-footer').remove();
    $('#contact-form-page-controller').remove();
    $('#contact-form-page-cont').remove();
    $('.wpcf7-form').append($back_button);
  }

  var $form = $('#contact-form > .wpcf7 > form');
  if ( $form.length > 0 ) {

      $(document).on('wpcf7mailsent', function(){
        if($('#newsletter-subscription > input').is(':checked')){
          if ( validate_input($form) ) { register($form); }
        } 
        notify_form_success();
      });
  }


function register($form) {
    $.ajax({
        type: 'post',
        url: '//pivotandpilot.us11.list-manage.com/subscribe/post-json?u=7ddaf618b12da96febfea34ac&id=a1e4c0c38e&c=?',
        data: $form.serialize(),
        cache       : false,
        dataType    : 'json',
        contentType: "application/json; charset=utf-8",
        error       : function(err) { alert("Could not connect to the registration server. Please try again later."); },
        success     : function(data) {
            if (data.result != "success") {
              // TODO -- Notify clients to check their email to confirm subscription to the Mailchimp service.
              console.log('Failed at sending to mailchimp. Error log:');
              console.log(data);
            } else {
              console.log('Succeeded at subscribing to mailchimp. Be sure to check your email.')
            }
        }
    });
}  

//TODO -- Validate form fields before sending to mailchimp.

function validate_input($form){
  return true;
}

function toggle_industry(selector){
  if(selector.val() === 'false'){
    selector.val('true')
  } else {
    selector.val('false')
  }
}

var groups_selected = 0;

$('#contact-form-page-controller > a').on('click', function(){
  if(groups_selected > 0){
    $('#contact-form-page-controller > a').removeClass('state-active');
    $('.contact-form-page').removeClass('state-active');
    $(this).addClass('state-active');
    $('.contact-form-page').eq($(this).index()).addClass('state-active');
    $('#contact-form-page-cont').animate({height: $('.contact-form-page').eq($(this).index()).outerHeight() + 45});
    $('#mandatory-selection-message').html('');
  } else {
    $('#mandatory-selection-message').html('Please select at least one option');
  }
});

$('#checkbox-cont > li').on('click',function(){
  if($(this).hasClass('state-active')){
    groups_selected -= 1;
  } else {
    groups_selected += 1;
  }
  $(this).toggleClass('state-active');
  $('.budget-slider-cont').eq($(this).index()).toggle();

  if ($('.budget-slider-cont').eq($(this).index()).is(':visible')) {
    $('.budget-slider-cont').eq($(this).index()).css('display','inline-block');
  } else {
    $('.budget-slider-cont').eq($(this).index()).css('display','none');
  }

  toggle_industry($('input[type="hidden"]', this));
});

$('.switch-form-page').on('click', function(){
  if(groups_selected > 0){
    const pageRef = $(this).data('pageRef');
    $('#contact-form').animate({scrollTop: 0}, 100, 'swing', function(){
      $('#contact-form-page-controller > a').removeClass('state-active');
      $('#contact-form-page-controller > a').eq(pageRef).addClass('state-active');
      $('.contact-form-page').removeClass('state-active');
      $('.contact-form-page').eq(pageRef).addClass('state-active');
      $('.contact-form-page').eq($(this).index()).addClass('state-active');
      $('#contact-form-page-cont').animate({height: $('.contact-form-page').eq(pageRef).outerHeight() + 45});
      $('#mandatory-selection-message').html('');
    });
  } else {
    $('#mandatory-selection-message').html('Please select at least one option');
  }
});

}());

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
