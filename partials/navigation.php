<?php $prev_post = get_previous_post() ? get_previous_post(): get_posts(array('post_type' => 'clients','numberposts' => 1,))[0] ?>
<?php $next_post = get_next_post() ? get_next_post(): get_posts(array('post_type' => 'clients','numberposts' => 1, 'order' => 'ASC'))[0]; ?>
<div class="navigation">
  <div class="navigation-client" style="color:<?php echo the_field('text_color', $prev_post->ID) ?>;"/>
    <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($prev_post); ?>"/>
    <a href="<?php echo get_permalink($prev_post) ?>" class="navigation-overlay" style="background-color: <?php echo the_field('background_color', $prev_post->ID) ?>;">
      <p class="title">Previous Project</p>
      <h3 class="navigation-title"><?php echo $prev_post->post_title; ?></h3>
    </a>
  </div>
  <div class="navigation-client"/>
    <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($next_post); ?>"/>
    <a href="<?php echo get_permalink($next_post) ?>" class="navigation-overlay" style="background-color: <?php echo the_field('background_color', $next_post->ID) ?>;">
      <p class="title">Next Project</p>
      <h3 class="navigation-title"><?php echo $next_post->post_title; ?></h3>
    </a>
  </div>
</div>