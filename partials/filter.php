<?php

$category = $_GET['category'] ? $_GET['category'] : 0;
$pagenum = $_GET['pagenum'] ? $_GET['pagenum'] : 1;
$taxonomy = $_GET['taxonomy'] ? $_GET['taxonomy'] : 'services';
$tax_query = '';

$offset = ($pagenum - 1) * 2;

if($category){
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
  $page_num_str = '?pagenum=' . ($pagenum + 1); 
  $category_query_str = $category ? '&category=' . $category : '';
  $next_query_str = $page_num_str . $category_query_str;
}

if($pagenum <= $total_posts && $pagenum > 1){
  $page_num_str = '?pagenum=' . ($pagenum - 1); 
  $category_query_str = $category ? '&category=' . $category : '';
  $prev_query_str = $page_num_str . $category_query_str;
}

function generate_dropdown_str($num){
  $page_num_str = '?pagenum=' . $num;
  $category_query_str = $category ? '&category=' . $category : '';
  return $page_num_str . $category_query_str;
}

?>

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