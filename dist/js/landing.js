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



// ==============================================================================
var colors = new Array(
  [174,174,249],
  [235,235,253],
  [174,174,249],
  [235,235,253],
  [174,174,249],
  [235,235,253]);

var step = 0;
//color table indices for:
// current color left
// next color left
// current color right
// next color right
var colorIndices = [0,1,2,3];

//transition speed
var gradientSpeed = 0.003;

function updateGradient()
{

  if ( $===undefined ) return;

var c0_0 = colors[colorIndices[0]];
var c0_1 = colors[colorIndices[1]];
var c1_0 = colors[colorIndices[2]];
var c1_1 = colors[colorIndices[3]];

var istep = 1 - step;
var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
var color1 = "rgb("+r1+","+g1+","+b1+")";

var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
var color2 = "rgb("+r2+","+g2+","+b2+")";

  $('#blog-page').css({
    background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
    background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});

  $('section#radial-background').css({
    background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
    background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});


  step += gradientSpeed;
  if ( step >= 1 )
  {
    step %= 1;
    colorIndices[0] = colorIndices[1];
    colorIndices[2] = colorIndices[3];

    //pick two new target color indices
    //do not pick the same as the current one
    colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;

  }
}

var mouseX = 0;
var mouseY = 0;
var circleSize = 0;

$("#radial-background").on('mousemove', function(e){
  var parentOffset = $(this).parent().offset();
  mouseX = e.pageX - parentOffset.left;
  mouseY = e.pageY - parentOffset.top;
  var str = "translate(" + mouseX + "px, " + mouseY + "px)"
  $('#circle-gradient').css({'transform' : str});
});



function setCircleGradient(ind){
  var css_property = 'radial-gradient(circle farthest-corner at 50% 50%, #ECEBFE ' + ind + '%, rgba(68, 60, 255, 0) 95%)';
  $('#circle-gradient').css({'background': css_property});
}

$('#change-landing').hover(
  function(){
  for(var i = 0; i <= 100; i++){
    (function(ind){
      setTimeout(function(){console.log(ind);setCircleGradient(ind);}, 5 * ind);
    })(i);
  }},
  function(){
  for(var i = 0; i <= 100; i++){
    (function(ind){
      setTimeout(function(){console.log(100 - ind);setCircleGradient(100 - ind);}, 5 * ind);
    })(i);
  }}
  );
// $(window).on('resize load',function(){
//   const window_width = $(window).width();

//   if (window_width < 1024) {
//     $("#radial-background").attr({style: "background: none;"});
//     setInterval(updateGradient,10);
//   } else if (window_width > 1024) {
//   };
// });

