<?php

$pagenum = 1;
$category = 0;

if($_GET['pagenum']){
  $pagenum = $_GET['pagenum'];
}

if($_GET['term_id']){
  $category = $_GET['term_id'];
}

$offset = ($pagenum - 1) * 2;

$args = array(
  'posts_per_page'   => '',
  'offset'           => '',
  'category'         => $category,
  'orderby'          => 'date',
  'order'            => 'DESC',
  'include'          => '',
  'exclude'          => '',
  'meta_key'         => '',
  'meta_value'       => '',
  'post_type'        => 'post',
  'post_mime_type'   => '',
  'post_parent'      => '',
  'author'           => '',
  'author_name'      => '',
  'post_status'      => 'publish',
  'suppress_filters' => true
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
  <?php $terms = get_the_terms($post, 'category'); ?>
  <div class="post blog-post">
    <div>
    <?php foreach($terms as $term): ?>
      <li class="term"><?php echo $term->name ?></li>
    <?php endforeach?>
    </div>
    <h3><?php echo $post->post_title ?></h3>
    <p class="date"><?php echo get_the_date('', $post) ?></p>
    <a class="image-cont" href="<?php echo get_permalink($post); ?>" style="background-image: url(<?php echo get_the_post_thumbnail_url($post); ?>)">
      <img alt="Click for more!" class="img-responsive" src="<?php echo get_template_directory_uri() . '/dist/icons/plus.svg' ?>"/>
    </a>
  </div>
<?php endforeach ?>  
</div>

<div class="pagination">
  <a class="previous" href="<?php echo $prev_query_str ?>" data-category="<?php echo $category ?>">
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
        class="dropdown <?php if($number == $pagenum){ echo 'active';} ?>" 
        href="<?php echo generate_dropdown_str($number) ?>" 
        data-category="<?php echo $category ?>" 
        data-pagenum="<?php echo $number ?>"><?php echo $number ?></a>
      <?php endforeach ?>
    </ul>
  </div>
  <a class="next" href="<?php echo $next_query_str ?>" data-category="<?php echo $category ?>">
    <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/dist/icons/arrow-right.svg' ?>"/>
  </a>
</div>
