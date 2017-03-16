<?php $prev_post = get_previous_post() ? get_previous_post(): get_posts(array('post_type' => 'clients','numberposts' => 1,))[0] ?>
<?php $next_post = get_next_post() ? get_next_post(): get_posts(array('post_type' => 'clients','numberposts' => 1, 'order' => 'ASC'))[0]; ?>

<?php $prev_text_color = get_field('text_color', $prev_post->ID); ?>
<?php $next_text_color = get_field('text_color', $next_post->ID)?>
<?php $prev_background_color = get_field('background_color', $prev_post->ID) ?>
<?php $next_background_color = get_field('background_color', $next_post->ID)  ?>


<div class="navigation">
  <div class="navigation-client" style="background-image:url(<?php echo get_the_post_thumbnail_url($prev_post); ?>)""/>
    <a href="<?php echo get_permalink($prev_post) ?>" class="navigation-overlay" 
      style="background-color: <?php echo $prev_background_color ?>;">
      <p class="title" style="color: <?php echo $prev_text_color ?>;"><?php echo $prev_post->post_title; ?></p>
      <img 
        class="img-responsive svg" 
        src="<?php echo get_template_directory_uri() . '/dist/icons/arrow-left.svg' ?>"
        style="background-color: <?php echo $prev_text_color ?>; fill: <?php echo $prev_background_color ?>; "
      />
    </a>
  </div>
  <div class="navigation-client" style="background-image:url(<?php echo get_the_post_thumbnail_url($next_post); ?>)">
    <a href="<?php echo get_permalink($next_post) ?>" class="navigation-overlay" 
      style="background-color: <?php echo $next_background_color ?>">
      <p class="title" style="color: <?php echo $next_text_color ?>;"><?php echo $next_post->post_title; ?></p>
      <img 
        class="img-responsive svg" 
        src="<?php echo get_template_directory_uri() . '/dist/icons/arrow-right.svg' ?>"
        style="background-color: <?php echo $next_text_color ?>; fill: <?php echo $prev_text_color ?>"
      />
    </a>
  </div>
</div>