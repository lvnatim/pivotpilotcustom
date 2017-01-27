jQuery(document).ready(function($){
  $('#switch-landing').on('click', function(){
    $('.primary-menu').toggleClass('white');
    $('#primary-menu-mobile').toggleClass('alternate');
    $('#landing-container').toggleClass('alternate');
    $('#mobile-menu-open').toggleClass('active');
    $('#mobile-menu-open').data('controls', 'landing')
    $('#mobile-menu-open').attr('data-controls', 'landing')
  })
  $('#close-landing').on('click', function(){
    $('.primary-menu').toggleClass('white');
    $('#primary-menu-mobile').toggleClass('alternate');
    $('#landing-container').toggleClass('alternate');
    $('#mobile-menu-open').toggleClass('active');
    $('#mobile-menu-open').data('controls', 'menu')
    $('#mobile-menu-open').attr('data-controls', 'menu')
  })
  $('#mobile-menu-open').on('click', function(){
    if($(this).data('controls')==='landing'){
      $('#primary-menu-mobile').toggleClass('alternate');
      $('#landing-container').toggleClass('alternate');
      $('#mobile-menu-open').toggleClass('active');
      $('#mobile-menu-open').data('controls', 'menu')
      $('#mobile-menu-open').attr('data-controls', 'menu')
    }
  })
})