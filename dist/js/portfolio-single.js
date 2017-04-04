$('#portfolio-menu-open').on('click', function(){
  $('#portfolio-menu').toggleClass('state-opened');
  $('#portfolio-menu').removeClass('keep-open');

  if ($('#portfolio-menu').hasClass('state-opened')) {
    $('#portfolio-menu-open').addClass('state-closed')
  } else {
    $('#portfolio-menu-open').removeClass('state-closed')
  }
});

// Scrolling closes the menu by default. The 'keep-open' class overrides that + is added when a navigational links are clicked
$('.portfolio-button').on('click',function(e){
  e.preventDefault();
  const target = $(this).attr('href');
  const scrolltop = $(target).offset().top;
  $('body').animate({scrollTop: scrolltop}, 1000, 'swing');
  $('#portfolio-menu').addClass('keep-open');
});

// Closes menu on scroll unless 'keep-open' class is present.
$(window).scroll(function(){
  if($(window).scrollTop() > 100 && (!$('#portfolio-menu').hasClass('keep-open'))) {
      $('#portfolio-menu').removeClass('state-opened');
  } else if ($(window).scrollTop() === 0) {
    $('#portfolio-menu').addClass('state-opened');
  }

  if ($('#portfolio-menu').hasClass('state-opened')) {
    $('#portfolio-menu-open').addClass('state-closed')
  } else {
    $('#portfolio-menu-open').removeClass('state-closed')
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

$(window).scroll(function(event){
  $('.desktop-image:not(.icon)').each(function(){
    if($(this).offset().top + $(this).outerHeight() < $(window).scrollTop() + $(window).outerHeight()){
      $(this).addClass('state-active');
    } else {
      $(this).removeClass('state-active');
    }
  })
})