<?php get_header(); ?>

<?php

parse_str($_SERVER['QUERY_STRING'], $query);
$taxonomy = $query['taxonomy'] ? $query['taxonomy'] : 'services';
$category = $query['category'];
$pagenum = $query['pagenum'] ? $query['pagenum'] : 1;
$offset = ($pagenum - 1) * 2;
$tax_query = '';

if($taxonomy && $category ){
  $tax_query = array(
    array(
      'taxonomy' => $taxonomy,
      'field' => 'term_id',
      'terms' => $category
    )
  );
}

$args = array(
  'posts_per_page'   => -1,
  'post_type'        => 'clients',
  'tax_query' => $tax_query,
);

$posts_array = get_posts($args);
$displayed_posts = array_slice($posts_array, $offset, 2); 
$total_posts = ceil(count($posts_array) / 2.0) ;

$next_query_str = '';
$prev_query_str = '';

if($pagenum < $total_posts && $pagenum > 0){
  $taxonomy_str = '?taxonomy=' . $taxonomy;
  $page_num_str = '&pagenum=' . ($pagenum + 1); 
  $category_query_str = $category ? '&category=' . $category : '';
  $next_query_str = $taxonomy_str . $category_query_str . $page_num_str;
}

if($pagenum <= $total_posts && $pagenum > 1){
  $taxonomy_str = '?taxonomy=' . $taxonomy;
  $page_num_str = '&pagenum=' . ($pagenum - 1); 
  $category_query_str = $category ? '&category=' . $category : '';
  $prev_query_str = $taxonomy_str . $category_query_str . $page_num_str;
}

function generate_dropdown_str($num){
  $taxonomy_str = '?taxonomy=' . $taxonomy;
  $category_query_str = $category ? '&category=' . $category : '';
  $page_num_str = '&pagenum=' . $num;
  return $taxonomy_str . $category_query_str . $page_num_str;
}

?>

<section class="first-section light-purple-background filter-section no-padding-top" data-taxonomy="<?php echo $taxonomy ?>">
  <ul class="filter-menu">
    <a class="title blue active" href="?taxonomy=services">Services</a>
    <a class="title blue" href="?taxonomy=industries">Industries</a>
  </ul>
  <div class="search-bar">
    <div>All <?php echo $taxonomy ?><img class="img-responsive" src="<?php echo get_template_directory_uri() . '/dist/icons/arrow-down.svg' ?>"/></div>
    <ul>
      <li><a class="filter-services" data-category="0" href="?category=0" data-taxonomy="<?php echo $taxonomy ?>">All <?php echo $taxonomy ?></a></li>
      <?php $terms = get_terms( $taxonomy );?>
      <?php foreach($terms as $term): ?>
      <li>
        <a class="filter-services" data-taxonomy="<?php echo $taxonomy ?>" data-category="<?php echo $term->term_id ?>" href="?taxonomy=<?php echo $taxonomy?>&category=<?php echo $term->term_id ?>"><?php echo $term->name ?></a>
      </li>
      <?php endforeach?>
    </ul>
  </div>

  <div id="dynamic-content-services">
    <div id="client-post-container">
      <?php foreach($displayed_posts as $post): ?>
        <?php $post_terms = get_the_terms($post, 'services'); ?>
        <div class="post client-post">
          <a class="image-cont" href="<?php echo get_permalink($post); ?>" style="background-image: url(<?php echo get_the_post_thumbnail_url($post); ?>)"></a>
          <h3><?php echo $post->post_title ?></h3>
          <div>
          <?php foreach($post_terms as $term): ?>
            <li><?php echo $term->name ?></li>
          <?php endforeach?>
          </div>
        </div>
      <?php endforeach ?>  
    </div>

    <div class="pagination">
      <a class="previous" href="<?php echo $prev_query_str ?>" data-category="<?php echo $category ?>" data-taxonomy="<?php echo $taxonomy ?>">
        <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/dist/icons/arrow-left.svg' ?>"/>
      </a>
      <div class="pagenums">
        <div>
          <span id="curpage"><?php echo $pagenum ?></span>
          <span> / </span>
          <span id="maxpage"><?php echo $total_posts ?></span>
        </div>
        <ul class="pagenums-dropdown">
          <?php foreach(range(1, $total_posts) as $number): ?>
          <a 
            class="dropdown" 
            href="<?php echo generate_dropdown_str($number) ?>" 
            data-category="<?php echo $category ?>" 
            data-pagenum="<?php echo $number ?>"
            data-taxonomy="<?php echo $taxonomy ?>"
          >
            <?php echo $number ?>
          </a>
          <?php endforeach ?>
        </ul>
      </div>
      <a class="next" href="<?php echo $next_query_str ?>" data-category="<?php echo $category ?>" data-taxonomy="<?php echo $taxonomy ?>">
        <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/dist/icons/arrow-right.svg' ?>"/>
      </a>
    </div>
  </div>

</section>

<?php get_footer(); ?>