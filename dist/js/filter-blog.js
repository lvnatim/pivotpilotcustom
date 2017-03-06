$('.blog-term').on('click', function(){
  const term_id = $(this).data('termId');
  $.ajax({
    url: my_ajax_object.ajax_url,
    data: {
        'action':'filter_blog',
        'term_id': term_id, 
    },
    success:function(data){
      $('#blog-post-container').html(data);
    },
    error: function(){}
  });
})