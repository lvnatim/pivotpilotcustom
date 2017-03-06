<?php

function generate_angle() {
  return rand(0, 90) - 45;
}

function generate_side() {
  static $iconCount = 0;
  if($iconCount % 2 == 0){
    $iconCount = $iconCount + 1;
    return 100;
  } else {
    $iconCount = $iconCount + 1;
    return 0;
  }
}

function generate_top_distance() {
  return rand(0, 80);
}

function generate_icon($iconName = ''){
  return get_template_directory_uri() . '/dist/icons/microphone.png';
}
?>


<?php
$category = $_GET['term_id'];
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
  <div class="blog-post">
    <h3 class="blog-post-title"><?php echo $post->post_title ?></h3>
    <p class="blog-post-date"><?php echo get_the_date('', $post) ?></p>
    <div class="blog-post-image-container">
      <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($post); ?>"/>
      <?php foreach($terms as $term): ?>
        <img src="<?php echo generate_icon(); ?>" class="blog-post-category-icon" style="transform: rotate(<?php echo generate_angle()?>deg); top: <?php echo generate_top_distance() ?>%; left: <?php echo generate_side()?>%;">
      <?php endforeach ?>
    </div>
    <div class="blog-post-terms">
    <?php foreach($terms as $term): ?>
      <li class="title"><?php echo $term->name ?></li>
    <?php endforeach?>
    </div>
  </div>
<?php endforeach ?> 