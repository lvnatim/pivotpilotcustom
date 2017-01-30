 <?php
$args = array(
  array(
  'taxonomy' => 'post_tag',
  'field' => 'slug',
  'terms' => 'featured',
  'include_children' => false
  )
);
$posts = get_posts(
  array(
  'post_type' => 'clients',
  'numberposts' => 3,
  'tax_query' => $args
  )
);
?>

<div id="section-showcase" class="container-fluid">
  <div class="row">
    <div class="col-xs-12">
      <div class="title-container showcase-title-container">
        <p class="title">Featured Case Studies</p>
      </div>
      <div id="showcase-container">
        <?php foreach($posts as $post): ?>
        <div class="client-container">
          <div class="client"/>
            <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($post); ?>"/>
            <div class="client-overlay">
              <h3 class="client-excerpt"><?php echo $post->post_excerpt ?></h3>
              <ul class="client-terms">
                <?php $terms = get_the_terms($post, 'services'); ?>
                <?php foreach($terms as $term): ?>
                <li><?php echo $term->name ?></li>
                <?php endforeach?>
              </ul>
            </div>
          </div>
        </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</div>