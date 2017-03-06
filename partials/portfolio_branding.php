<?php if(get_field('branding_and_logo')): ?>
<div id="branding-and-logo">
  <div id="branding-and-logo-content" class="text-container portfolio-text-container">
    <p class="title">Branding & Identity</p>
    <p class="portfolio-content"><?php the_field('brand_content') ?></p>
  </div>

  <div id="font-section">
    <div class="font-container">
      <img class="font-image" style="border-color: <?php the_field('text_color') ?>" src="<?php the_field('font_one_image') ?>"/>
      <p class="title" style="background-color: <?php the_field('background_color') ?>"><?php the_field('font_one_name'); ?></p>
      <p class="font-description" style="background-color: <?php the_field('background_color') ?>"><?php the_field('font_one_description'); ?></p>
    </div>

    <div class="font-container">
      <img class="font-image" style="border-color: <?php the_field('text_color') ?>" src="<?php the_field('font_two_image') ?>"/>
      <p class="title" style="background-color: <?php the_field('background_color') ?>"><?php the_field('font_two_name'); ?></p>
      <p class="font-description" style="background-color: <?php the_field('background_color') ?>"><?php the_field('font_two_description'); ?></p>
    </div>
  </div>

</div>
<?php endif ?>