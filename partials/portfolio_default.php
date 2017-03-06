<div id="default-client-meta">
  <div class="text-container portfolio-text-container">
    <p class="title"><?php echo $post->post_title; ?></p>
    <h3 class="portfolio-excerpt"><?php echo $post->post_excerpt; ?></h3>
    <p class="portfolio-content"><?php echo $post->post_content; ?></p>
  </div>
  <img class="img-responsive" src="<?php the_field('gallery_main_image'); ?>" />
  <div class="gallery-sub-image-container">
    <?php if(get_field('gallery_image_one')): ?><img class="img-responsive" src="<?php the_field('gallery_image_one'); ?>" /><?php endif?>
    <?php if(get_field('gallery_image_two')): ?><img class="img-responsive" src="<?php the_field('gallery_image_two'); ?>" /><?php endif?>
    <?php if(get_field('gallery_image_three')): ?><img class="img-responsive" src="<?php the_field('gallery_image_three'); ?>" /><?php endif?>
  </div>
</div>