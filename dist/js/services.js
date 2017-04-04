$('.filter-services').on('click', function(e){
  e.preventDefault();
  $('.search-bar > ul > li').removeClass('state-active');
  $(this).parent().addClass('state-active');
  const category = $(this).data('category');
  const taxonomy = $(this).data('taxonomy');
  const taxonomy_name = $(this).text();
  $('#current-taxonomy').text(taxonomy_name);
  $.ajax({
    url: my_ajax_object.ajax_url,
    data: {
        'action':'filter',
        'category': category,
        'taxonomy': taxonomy,
    },
    success:function(data){
      $('#dynamic-content-services').html(data);
    },
    error: function(){}
  });

    if($(window).width() > 767){
      const description_height = $(this).next().outerHeight() + 42;
      $('#dynamic-content-services').css({'margin-top': description_height});
    }

});

$('#dynamic-content-services').on('click', '.previous', function(e){
  e.preventDefault();
  const curpage = parseInt($('#curpage').html());
  const maxpage = parseInt($('#maxpage').html());
  const category = $(this).data('category');
  const taxonomy = $(this).data('taxonomy');
  const pagenum = curpage - 1;

  if(curpage > 1){
    $.ajax({
      url: my_ajax_object.ajax_url,
      data: {
          'action':'filter',
          'category': category,
          'pagenum': pagenum,
          'taxonomy': taxonomy,
      },
      success:function(data){
        $('body').animate({scrollTop: 0}, 1000, 'swing', function(){
          $('#dynamic-content-services').html(data);
        });
      },
      error: function(){}
    });
  }
});

$('#dynamic-content-services').on('click', '.next', function(e){
  e.preventDefault();
  const curpage = parseInt($('#curpage').html());
  const maxpage = parseInt($('#maxpage').html());
  const category = $(this).data('category');
  const taxonomy = $(this).data('taxonomy');
  const pagenum = curpage + 1;
  if(curpage < maxpage){
    $.ajax({
      url: my_ajax_object.ajax_url,
      data: {
          'action':'filter',
          'category': category,
          'pagenum': pagenum,
          'taxonomy': taxonomy,
      },
      success:function(data){
        $('body').animate({scrollTop: 0}, 1000, 'swing', function(){
          $('#dynamic-content-services').html(data);
        });
      },
      error: function(){}
    });
  }
});

$('#dynamic-content-services').on('click', '.dropdown', function(e){
  $('.dropdown').removeClass('active');
  $(this).addClass('active');
  e.preventDefault();
  const category = $(this).data('category');
  const pagenum = $(this).data('pagenum');
  const taxonomy = $(this).data('taxonomy');
  $.ajax({
    url: my_ajax_object.ajax_url,
    data: {
        'action':'filter',
        'category': category,
        'pagenum': pagenum,
        'taxonomy': taxonomy,
    },
    success:function(data){
      $('body').animate({scrollTop: 0}, 1000, 'swing', function(){
        $('#dynamic-content-services').html(data);
      });
    },
    error: function(){}
  });
});