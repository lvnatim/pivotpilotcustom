jQuery(document).ready(function($){
  $('.filter-menu-button').on('click', function(){
    const filter = $(this).data('filter');
    $('#filter-menu-container').attr('data-selected-filter', filter);
  });
})