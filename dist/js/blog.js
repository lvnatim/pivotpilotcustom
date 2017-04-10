$('.search-bar').on('click', function(){
  $(this).toggleClass('state-opened');
});

$('#search-by-title').on('click', function(){
  $('.search-bar').removeClass('state-opened');
  $(this).toggleClass('state-opened');
})

$('.filter-blog').on('click', function(e){
  e.preventDefault();
  $('.search-bar > ul > li').removeClass('state-active');
  $(this).parent().addClass('state-active');
  const term_id = $(this).data('termId');
  const taxonomy_name = $(this).text();
  $('#current-taxonomy').text(taxonomy_name);
  $.ajax({
    url: my_ajax_object.ajax_url,
    data: {
        'action':'filter_blog',
        'term_id': term_id,
    },
    success:function(data){
      $('#dynamic-content').html(data);
    },
    error: function(){}
  });
});

$('#dynamic-content').on('click', '.previous', function(e){
  e.preventDefault();
  const curpage = parseInt($('#curpage').html());
  const maxpage = parseInt($('#maxpage').html());
  const category = $(this).data('category');
  const searchterm = $(this).data('searchTerm');
  const pagenum = curpage - 1;

  if(curpage > 1){
    $.ajax({
      url: my_ajax_object.ajax_url,
      data: {
          'action':'filter_blog',
          'term_id': category,
          'pagenum': pagenum,
          'searchterm': searchterm
      },
      success:function(data){
        $('body').animate({scrollTop: 0}, 1000, 'swing', function(){
          $('#dynamic-content').html(data);
        });
      },
      error: function(){}
    });
  }
});

$('#dynamic-content').on('click', '.next', function(e){
  e.preventDefault();
  const curpage = parseInt($('#curpage').html());
  const maxpage = parseInt($('#maxpage').html());
  const category = $(this).data('category');
  const searchterm = $(this).data('searchTerm');
  const pagenum = curpage + 1;
  if(curpage < maxpage){
    $.ajax({
      url: my_ajax_object.ajax_url,
      data: {
          'action':'filter_blog',
          'term_id': category,
          'pagenum': pagenum,
          'searchterm': searchterm
      },
      success:function(data){
        $('body').animate({scrollTop: 0}, 1000, 'swing', function(){
          $('#dynamic-content').html(data);
        });
      },
      error: function(){}
    });
  }
});

$('#dynamic-content').on('click', '.dropdown', function(e){
  $('.dropdown').removeClass('active');
  $(this).addClass('active');
  e.preventDefault();
  const category = $(this).data('category');
  const pagenum = $(this).data('pagenum');
  $.ajax({
    url: my_ajax_object.ajax_url,
    data: {
        'action':'filter_blog',
        'term_id': category,
        'pagenum': pagenum,
    },
    success:function(data){
      $('body').animate({scrollTop: 0}, 1000, 'swing', function(){
        $('#dynamic-content').html(data);
      });
    },
    error: function(){}
  });
});