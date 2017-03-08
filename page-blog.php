<?php get_header(); ?>
<section class="light-purple-background first-section last-section">
  <div class="search-bar">
    <div>All Posts</div>
    <ul>
      <li><a class="filter-blog" data-term-id="0" href="?category=0">All Posts</a></li>
      <?php $terms = get_terms( 'category' );?>
      <?php foreach($terms as $term): ?>
      <li>
        <a class="filter-blog" data-term-id="<?php echo $term->term_id ?>" href="?category=<?php echo $term->term_id ?>"><?php echo $term->name ?></a>
      </li>
      <?php endforeach?>
    </ul>
  </div>
  <div id="blog-post-container">
    <?php echo get_template_part( 'partials/filter_blog', 'filter_blog'); ?> 
  </div>
  <div class="pagination">
    <div class="previous"></div>
    <div class="pagenums">
      <span id="curpage"></span>
      <span> / </span>
      <span id="maxpage"></span>
    </div>
    <div class="next"></div>
  </div>
</section>
<?php get_footer(); ?>