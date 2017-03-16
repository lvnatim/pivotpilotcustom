<div id="default">
  <p class="title"><?php echo $post->post_title; ?></p>
  <h1 class="bold"><?php echo $post->post_excerpt; ?></h1>
  <p><?php echo $post->post_content; ?></p>
  <div class="gallery">
    <img class="img-responsive" src="<?php the_field('gallery_main_image'); ?>" />
    <div class="gallery-sub-cont">
      <?php if(get_field('gallery_image_one')): ?><img class="img-responsive" src="<?php the_field('gallery_image_one'); ?>" /><?php endif?>
      <?php if(get_field('gallery_image_two')): ?><img class="img-responsive" src="<?php the_field('gallery_image_two'); ?>" /><?php endif?>
      <?php if(get_field('gallery_image_three')): ?><img class="img-responsive" src="<?php the_field('gallery_image_three'); ?>" /><?php endif?>
    </div>
  </div>
  <?php if(get_field('quote')): ?>
  <blockquote>
    <?php echo get_field('quote'); ?>
    <p class="title"><?php echo get_field('quote_author') ?></p>
  </blockquote>
  <?php endif ?>
</div>