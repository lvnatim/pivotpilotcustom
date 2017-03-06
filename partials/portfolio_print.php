<?php if(get_field('print')): ?>
<div id="print-and-packaging">
  <div class="full-size-container"><img class="img-responsive" src="<?php the_field('print_full_image_one'); ?>"/></div>
  <div class="mid-size-container"><img class="img-responsive" src="<?php the_field('print_contained_image_one'); ?>"/></div>
  <div id="print-and-packaging-content" class="text-container portfolio-text-container">
    <p class="title">Print & Packaging</p>
    <p class="portfolio-content"><?php the_field('print_content'); ?></p>
  </div>
  <img class="img-responsive" src="<?php the_field('print_contained_image_two'); ?>"/>
  <div class="print-sub-images-container">
    <img class="img-responsive" src="<?php the_field('print_sub_image_one'); ?>"/>
    <img class="img-responsive" src="<?php the_field('print_sub_image_two'); ?>"/>
  </div>
</div>
<?php endif ?>