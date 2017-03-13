<?php if(get_field('animation')): ?>

<div id="animation">
  <div class="gif-cont">
    <img class="img-responsive" src="<?php echo get_field('gif_one') ?>"/>
    <img class="img-responsive" src="<?php echo get_field('gif_two') ?>"/>
    <img class="img-responsive" src="<?php echo get_field('gif_three') ?>"/>
  </div>
  <p class="title">Film & Animation</p>
  <p><?php echo get_field('animation_content'); ?></p>
</div>

<?php endif ?>