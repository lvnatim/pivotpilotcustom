function getParameterByName(name, url) {
  if (!url) {
    url = window.location.href;
  }
  name = name.replace(/[\[\]]/g, "\\$&");
  var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
      results = regex.exec(url);
  if (!results) return null;
  if (!results[2]) return '';
  return decodeURIComponent(results[2].replace(/\+/g, " "));
}

if(getParameterByName('id')){
  $('.filter-submenu-button').removeClass('active');
  $(".filter-submenu-button[data-term-id='" + getParameterByName('id') +"']").addClass('active');
}

$('.filter-menu-button').on('click', function(){
  $('.filter-menu-button').removeClass('active');
  $(this).addClass('active');
  const filter = $(this).data('filter');
  $('#filter-menu-container').attr('data-selected-filter', filter);
});

$('.filter-submenu-button').on('click', function(){
  $('.filter-submenu-button').removeClass('active');
  $(this).addClass('active');
  const term_id = $(this).data('termId');
  const filter_name = $(this).data('filterName');
  $.ajax({
    url: my_ajax_object.ajax_url,
    data: {
        'action':'filter',
        'term_id': term_id,
        'taxonomy': filter_name, 
    },
    success:function(data){
      $('#filter-posts-container').html(data);
    },
    error: function(){}
  });
  if(term_id !== 0){
    $.ajax({
    url: my_ajax_object.ajax_url,
    data: {
        'action':'filter_description',
        'term_id': term_id,
    },
    success:function(data){
      $('#filter-description').html(data);
    },
    error: function(){}
  });
  } else {
    $('#filter-description').html('Click/hover on any of the terms to change the description and filter the posts.');
  }
});