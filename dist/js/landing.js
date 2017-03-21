$('.landing-face').on('click', function(event) {
  event.preventDefault();
  $('html, body').animate({
    scrollTop: $('#home-case-studies').offset().top
    }, 500);
})

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
$('.facepart').on('click', function(){
  const offset = $('#section-showcase').offset().top;
  $('body').animate({scrollTop: offset}, 500);
});

$('.service-title-container').on('mouseover', function(){
  const term_id = $(this).data('termId');
  $.ajax({
    url: my_ajax_object.ajax_url,
    data: {
        'action':'return_term_description',
        'term_id': term_id,
    },
    success:function(data){
      $('#landing-description').html(data);
    },
    error: function(){}
  });
})

$("#main-landing").on('mousemove', function(e){
 var parentOffset = $(this).parent().offset();
 var relX = e.pageX - parentOffset.left;
 var relY = e.pageY - parentOffset.top;
 $(this).attr({style: 'background: radial-gradient(circle farthest-corner at ' + relX + 'px ' + relY + 'px' + ', #FFFFFF 0%, #443CFF 95%);'});
});