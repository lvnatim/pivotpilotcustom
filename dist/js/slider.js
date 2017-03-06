(function(){

  const MAX_DOT_INDEX = $('.dot').length - 1;
  var dot_index = 0;

  $('.primary-menu').addClass('white');
  $('.dot').on('click', function(){
    dot_index = $(this).data('index');
    $('.dot').removeClass('active');
    $(this).addClass('active');
    $('#about-slider-image-container').data('currentSlider', dot_index);
    $('#about-slider-image-container').attr('data-current-slider', dot_index);
  })

  function moveDot(){
    dot_index = dot_index < MAX_DOT_INDEX ? dot_index + 1 : 0;
    $('.dot').removeClass('active');
    $('.dot').eq(dot_index).addClass('active');
    $('#about-slider-image-container').data('currentSlider', dot_index);
    $('#about-slider-image-container').attr('data-current-slider', dot_index);
  }

  // setInterval(moveDot, 5000);

  var firstIndex = 0;
  var lastIndex = $('.about-team-member').length - 1;
  var initialLeft = 0;
  var width = $('.about-team-members-container').width();


  $('#about-right').on('click', function(){
    const firstMember = $('.about-team-member').eq(firstIndex).clone();
    const width = $('.about-team-members-container').width() * 0.5;
    $('.about-team-member').last().after(firstMember);
    $('.about-team-members-container').css({left: (initialLeft-=width)});
    firstIndex += 1;
  });

  $('#about-left').on('click', function(){
    if(firstIndex >= 0){
      const lastMember = $('.about-team-member').eq(lastIndex).clone().addClass('showup');
      $('.about-team-member').first().before(lastMember);
      firstIndex += 1;
    } else {
      const width = $('.about-team-members-container').width() * 0.5;
      $('.about-team-members-container').css({left: (initialLeft+=width) });
      lastIndex -= 1;
    }
  })


})();