$('#mobile-open').on('click', function(){
  $('#mobile-menu-sidebar').addClass('state-opened');
});

$('#mobile-close').on('click', function(){
  $('#mobile-menu-sidebar').removeClass('state-opened');
});

$('.search-bar').on('click', function(){
  $(this).toggleClass('state-opened');
});

// $('.filter-blog').on('click', function(e){
//   e.preventDefault();
//   const term_id = $(this).data('termId');
//   $.ajax({
//     url: my_ajax_object.ajax_url,
//     data: {
//         'action':'filter_blog',
//         'term_id': term_id, 
//     },
//     success:function(data){
//       $('#blog-post-container').html(data);
//     },
//     error: function(){}
//   });
// })

// $('#mobile-menu-open').on('click', function(){
//     if($(this).data('controls') === 'menu'){
//         $(".primary-menu-mobile-links-container").toggleClass('active');
//     }
// });

//     $('#mobile-menu-closed').on('click', function(){
//         $(".primary-menu-mobile-links-container").toggleClass('active');
//     });

$('img.svg').each(function(){
  var $img = jQuery(this);
  var imgID = $img.attr('id');
  var imgClass = $img.attr('class');
  var imgURL = $img.attr('src');

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