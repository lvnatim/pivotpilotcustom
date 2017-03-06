const width = $('.client-container').width();
if($(window).width()<768){
  $("#showcase-container").scrollLeft(width - 15);
}

$('#showcase-dots-container > .dot').on('click', function(){
  const index = $(this).index();
  $('#showcase-dots-container > .dot').removeClass('active');
  $(this).addClass('active');
  $('#showcase-container').data('currentClient', index);
  $('#showcase-container').attr('data-current-client', index);
})