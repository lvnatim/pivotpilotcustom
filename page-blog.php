<?php get_header(); ?>

<?php

  function generate_rotate_angle() {
    return rand(0, 90) - 45;
  }

  function generate_distance_from_top() {
    return rand(0, 80);
  };

  function randomize_left_or_right() {
    // return rand(0, 1) * 100;
    static $iconCount = 0;
    if($iconCount % 2 == 0){
      $iconCount = $iconCount + 1;
      return 100;
    } else {
      $iconCount = $iconCount + 1;
      return 0;
    }
  }

  function choose_icon($iconName = ''){
    return get_template_directory_uri() . '/dist/icons/microphone.png';
  }

  $args = array(
    array(
    'include_children' => false
    )
  );
  $posts = get_posts(
    array(
    'post_type' => 'post',
    'numberposts' => 3,
    )
  );
  $terms = get_terms( 'category' );
?>

<div id="blog-search-bar" class="container-fluid">
  <ul class="blog-search-filters">
    <li class="title">All</li>
    <?php foreach($terms as $term): ?>
    <li class="title"><?php echo $term->name ?></li>
    <?php endforeach?>
  </ul>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12">
      <div id="blog-post-container">
        <?php foreach($posts as $post): ?>
          <?php $terms = get_the_terms($post, 'category'); ?>
          <div class="blog-post">
            <h3 class="blog-post-title"><?php echo $post->post_title ?></h3>
            <p class="blog-post-date"><?php echo get_the_date('', $post) ?></p>
            <div class="blog-post-image-container">
              <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($post); ?>"/>
              <?php foreach($terms as $term): ?>
                <img src="<?php echo choose_icon(); ?>" class="blog-post-category-icon" style="transform: rotate(<?php echo generate_rotate_angle()?>deg); top: <?php echo generate_distance_from_top() ?>%; left: <?php echo randomize_left_or_right()?>%;">
              <?php endforeach ?>
            </div>
            <div class="blog-post-terms">
            <?php foreach($terms as $term): ?>
              <li class="title"><?php echo $term->name ?></li>
            <?php endforeach?>
            </div>
          </div>
        <?php endforeach ?> 
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>