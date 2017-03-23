$('#change-landing').on('click', function(){
  if($(this).parent().hasClass('state-alternate')){
    $(this).html('How Exactly?')
  } else {
    $(this).html('Go Back')
  }

  $(this).parent().toggleClass('state-alternate');
  $(this).toggleClass('state-alternate');
  $('.landing-face').toggleClass('state-alternate');
});

$('#form-open').on('click', function(){
  $('.form-cont').toggleClass('state-active');
  setTimeout(function() {
    $('.form-triangle').toggleClass('triangle-active');
  }, 750);
});

$('#form-close').on('click', function(){
  $('.form-cont').removeClass('state-active');
});

$('#mobile-open').on('click', function(){
  $('#mobile-menu-sidebar').addClass('state-opened');
});

$('#mobile-close').on('click', function(){
  $('#mobile-menu-sidebar').removeClass('state-opened');
});

$('#mobile-menu-sidebar > .overlay').on('click', function(){
  $('#mobile-menu-sidebar').removeClass('state-opened');
});

$('#portfolio-menu-open').on('click', function(){
  $(this).toggleClass('state-closed');
  $('#portfolio-menu').toggleClass('state-opened');
});

$('.portfolio-button').on('click',function(e){
  e.preventDefault();
  const target = $(this).attr('href');
  const scrolltop = $(target).offset().top;
  $('body').animate({scrollTop: scrolltop}, 1000, 'swing');
});

$('.search-bar').on('click', function(){
  $(this).toggleClass('state-opened');
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

$('.filter-blog').on('click', function(e){
  e.preventDefault();
  $('.search-bar > ul > li').removeClass('state-active');
  $(this).parent().addClass('state-active');
  const term_id = $(this).data('termId');
  const taxonomy_name = $(this).text();
  $('#current-taxonomy').text(taxonomy_name);
  $.ajax({
    url: my_ajax_object.ajax_url,
    data: {
        'action':'filter_blog',
        'term_id': term_id,
    },
    success:function(data){
      $('#dynamic-content').html(data);
    },
    error: function(){}
  });
});

$('#dynamic-content').on('click', '.previous', function(e){
  e.preventDefault();
  const curpage = parseInt($('#curpage').html());
  const maxpage = parseInt($('#maxpage').html());
  const category = $(this).data('category');
  const pagenum = curpage - 1;

  if(curpage > 1){
    $.ajax({
      url: my_ajax_object.ajax_url,
      data: {
          'action':'filter_blog',
          'term_id': category,
          'pagenum': pagenum
      },
      success:function(data){
        $('body').animate({scrollTop: 0}, 1000, 'swing', function(){
          $('#dynamic-content').html(data);
        });
      },
      error: function(){}
    });
  }
});

$('#dynamic-content').on('click', '.next', function(e){
  e.preventDefault();
  const curpage = parseInt($('#curpage').html());
  const maxpage = parseInt($('#maxpage').html());
  const category = $(this).data('category');
  const pagenum = curpage + 1;
  if(curpage < maxpage){
    $.ajax({
      url: my_ajax_object.ajax_url,
      data: {
          'action':'filter_blog',
          'term_id': category,
          'pagenum': pagenum,
      },
      success:function(data){
        $('body').animate({scrollTop: 0}, 1000, 'swing', function(){
          $('#dynamic-content').html(data);
        });
      },
      error: function(){}
    });
  }
});

$('#dynamic-content').on('click', '.dropdown', function(e){
  $('.dropdown').removeClass('active');
  $(this).addClass('active');
  e.preventDefault();
  const category = $(this).data('category');
  const pagenum = $(this).data('pagenum');
  $.ajax({
    url: my_ajax_object.ajax_url,
    data: {
        'action':'filter_blog',
        'term_id': category,
        'pagenum': pagenum,
    },
    success:function(data){
      $('body').animate({scrollTop: 0}, 1000, 'swing', function(){
        $('#dynamic-content').html(data);
      });
    },
    error: function(){}
  });
});

$('.filter-services').on('click', function(e){
  e.preventDefault();
  $('.search-bar > ul > li').removeClass('state-active');
  $(this).parent().addClass('state-active');
  const category = $(this).data('category');
  const taxonomy = $(this).data('taxonomy');
  const taxonomy_name = $(this).text();
  $('#current-taxonomy').text(taxonomy_name);
  $.ajax({
    url: my_ajax_object.ajax_url,
    data: {
        'action':'filter',
        'category': category,
        'taxonomy': taxonomy,
    },
    success:function(data){
      $('#dynamic-content-services').html(data);
    },
    error: function(){}
  });

    const description_height = $(this).next().outerHeight() + 42;
    $('#dynamic-content-services').css({'margin-top': description_height});

});

$('#dynamic-content-services').on('click', '.previous', function(e){
  e.preventDefault();
  const curpage = parseInt($('#curpage').html());
  const maxpage = parseInt($('#maxpage').html());
  const category = $(this).data('category');
  const taxonomy = $(this).data('taxonomy');
  const pagenum = curpage - 1;

  if(curpage > 1){
    $.ajax({
      url: my_ajax_object.ajax_url,
      data: {
          'action':'filter',
          'category': category,
          'pagenum': pagenum,
          'taxonomy': taxonomy,
      },
      success:function(data){
        $('body').animate({scrollTop: 0}, 1000, 'swing', function(){
          $('#dynamic-content-services').html(data);
        });
      },
      error: function(){}
    });
  }
});

$('#dynamic-content-services').on('click', '.next', function(e){
  e.preventDefault();
  const curpage = parseInt($('#curpage').html());
  const maxpage = parseInt($('#maxpage').html());
  const category = $(this).data('category');
  const taxonomy = $(this).data('taxonomy');
  const pagenum = curpage + 1;
  if(curpage < maxpage){
    $.ajax({
      url: my_ajax_object.ajax_url,
      data: {
          'action':'filter',
          'category': category,
          'pagenum': pagenum,
          'taxonomy': taxonomy,
      },
      success:function(data){
        $('body').animate({scrollTop: 0}, 1000, 'swing', function(){
          $('#dynamic-content-services').html(data);
        });
      },
      error: function(){}
    });
  }
});

$('#dynamic-content-services').on('click', '.dropdown', function(e){
  $('.dropdown').removeClass('active');
  $(this).addClass('active');
  e.preventDefault();
  const category = $(this).data('category');
  const pagenum = $(this).data('pagenum');
  const taxonomy = $(this).data('taxonomy');
  $.ajax({
    url: my_ajax_object.ajax_url,
    data: {
        'action':'filter',
        'category': category,
        'pagenum': pagenum,
        'taxonomy': taxonomy,
    },
    success:function(data){
      $('body').animate({scrollTop: 0}, 1000, 'swing', function(){
        $('#dynamic-content-services').html(data);
      });
    },
    error: function(){}
  });
});


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

$('#featured-case-studies').slick({
  arrows: false,
  centerMode: true,
  centerPadding: '11.25px',
  infinite: false,
  initialSlide: 1,
  mobileFirst: true,
  slidesToShow: 1,
  responsive: [{
    breakpoint: 767,
    settings: {
      arrows: false,
      autoplay: false,
      centerMode: false,
      centerPadding: 0,
      cssEase: 'linear',
      dots: true,
      fade: true,
      infinite: true
    }
  }]

});

$('#featured-team-members').slick({
  arrows: true,
  appendArrows: $('#featured-team-members-controller'),
  centerMode: true,
  centerPadding: '210px',
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

$('#featured-service-snippets').slick({
  arrows: false,
  infinite: false,
  slidesToShow: 2,
})


var lastScrollTop = 0;
var blogContentEnd;
if($('#blog-post-custom-fields').length > 0){
  blogContentEnd = $('#blog-post-custom-fields').offset().top - $(window).outerHeight();
}


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
    $('#menu').removeClass('state-toggled');
  }
});

$(window).scroll(function(event){
  $('#font-section > div > img').each(function(){
    if($(this).offset().top + $(this).outerHeight() < $(window).scrollTop() + $(window).outerHeight()){
      $(this).addClass('state-active');
    } else {
      $(this).removeClass('state-active');
    }
  })
})
