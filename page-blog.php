<?php get_header(); ?>
<div id="half-gradient"></div>

<div id="blog-search-bar" class="container-fluid">
  <ul class="blog-search-filters">
    <li class="title blog-term">All</li>
    <?php $terms = get_terms( 'category' );?>
    <?php foreach($terms as $term): ?>
    <li class="title blog-term" data-term-id="<?php echo $term->term_id ?>"><?php echo $term->name ?></li>
    <?php endforeach?>
  </ul>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12">
      <div id="blog-post-container">
        <?php echo get_template_part( 'partials/filter_blog', 'filter_blog'); ?> 
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>