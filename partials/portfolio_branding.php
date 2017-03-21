<?php if(get_field('branding_and_logo')): ?>
<div id="branding-and-logo">
  <p class="title">Branding & Identity</p>
  <p><?php the_field('brand_content') ?></p>
  <div id="font-section">
    <div>
      <img class="img-responsive state-active" src="<?php the_field('font_one_image') ?>"/>
      <div 
        class="separator" 
        style="border-color: <?php the_field('text_color') ?>; background-color: <?php the_field('background_color') ?>;"
      ></div>
      <p class="title" style="background-color: <?php the_field('background_color') ?>"><?php the_field('font_one_name'); ?></p>
      <p style="background-color: <?php the_field('background_color') ?>"><?php the_field('font_one_description'); ?></p>
    </div>

    <div>
      <img class="img-responsive state-active" src="<?php the_field('font_two_image') ?>"/>
      <div 
        class="separator" 
        style="border-color: <?php the_field('text_color') ?>; background-color: <?php the_field('background_color') ?>;"
      ></div>
      <p class="title" style="background-color: <?php the_field('background_color') ?>"><?php the_field('font_two_name'); ?></p>
      <p style="background-color: <?php the_field('background_color') ?>"><?php the_field('font_two_description'); ?></p>
    </div>
  </div>

</div>
<?php endif ?>