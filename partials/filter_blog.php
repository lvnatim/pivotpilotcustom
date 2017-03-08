<?php

parse_str($_SERVER['QUERY_STRING'], $query);
$category = $query['category'];
if($_GET['term_id']){
  $category = $_GET['term_id'];
}
if(!$category){
  $category = '';
}
$posts = get_posts(array(
  'category' => $category,
  'post_type' => 'post',
  'numberposts' => 3,
));
?>

<?php foreach($posts as $post): ?>
  <?php $terms = get_the_terms($post, 'category'); ?>
  <div class="post blog-post">
    <div>
    <?php foreach($terms as $term): ?>
      <li class="term"><?php echo $term->name ?></li>
    <?php endforeach?>
    </div>
    <h3><?php echo $post->post_title ?></h3>
    <p class="date"><?php echo get_the_date('', $post) ?></p>
    <div class="image-cont" style="background-image: url(<?php echo get_the_post_thumbnail_url($post); ?>)"></div>
  </div>
<?php endforeach ?> 