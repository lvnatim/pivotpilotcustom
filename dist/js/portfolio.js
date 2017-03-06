$('#portfolio-menu-hamburger').on('click', function(){
  $('#portfolio-menu-container').toggleClass('active');
})
if($('.font-image').length > 0){
  const element = $('.font-image');
  $(window).on('scroll', ()=>{
    var eTop = element.offset().top;
    var wTop = $(window).scrollTop();
    if(eTop - wTop < $(window).height()){
      $('.font-image').addClass('popup');
    } else {
      $('.font-image').removeClass('popup');
    }
  })
}