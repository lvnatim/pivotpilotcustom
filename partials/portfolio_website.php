<?php if(get_field('website')): ?>
<div id="web-and-seo" style="background-color: <?php the_field('website_background_color') ?>;color: <?php the_field('website_text_color') ?>;">

  <div id="website-browser-container">
    <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/dist/img/desktop_header.svg' ?>"/>
    <div id="website-desktop-image-container">
      <img class="img-responsive" src="<?php the_field('website_flat_image') ?>"/>
    </div>
    <img class="scroll-icon" src="<?php echo get_template_directory_uri() . '/dist/img/scroll-icon.svg' ?>"/>
  </div>
  <div id="web-and-seo-content" class="text-container portfolio-text-container">
    <p class="title">Web Development & SEO</p>
    <p class="portfolio-content"><?php the_field('website_content') ?></p>
  </div>


  <div id="website-icon-container">
    <div class="website-icon">
      <img class="img-responsive" src="<?php the_field('website_icon_one') ?>"/>
      <p class="icon-name"><?php the_field('website_icon_one_name') ?></p>
    </div>
    <div class="website-icon">
      <img class="img-responsive" src="<?php the_field('website_icon_two') ?>"/>
      <p class="icon-name"><?php the_field('website_icon_two_name') ?></p>
    </div>
    <div class="website-icon">
      <img class="img-responsive" src="<?php the_field('website_icon_three') ?>"/>
      <p class="icon-name"><?php the_field('website_icon_three_name') ?></p>
    </div>
    <div class="website-icon">
      <img class="img-responsive" src="<?php the_field('website_icon_four') ?>"/>
      <p class="icon-name"><?php the_field('website_icon_four_name') ?></p>
    </div>
    <div class="website-icon">
      <img class="img-responsive" src="<?php the_field('website_icon_five') ?>"/>
      <p class="icon-name"><?php the_field('website_icon_five_name') ?></p>
    </div>
    <div class="website-icon">
      <img class="img-responsive" src="<?php the_field('website_icon_six') ?>"/>
      <p class="icon-name"><?php the_field('website_icon_six_name') ?></p>
    </div>
  </div>

  <div class="website-mobiles-container">
    <div class="website-mobile-container">
      <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/dist/img/mobile_header.svg' ?>"/>
      <div class="website-mobile-flat-container"><img class="img-responsive" src="<?php the_field('website_mobile_flat_one') ?>"/></div>
      <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/dist/img/mobile_footer.svg' ?>"/>
    </div>
    <div class="website-mobile-container">
      <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/dist/img/mobile_header.svg' ?>"/>
      <div class="website-mobile-flat-container"><img class="img-responsive" src="<?php the_field('website_mobile_flat_two') ?>"/></div>
      <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/dist/img/mobile_footer.svg' ?>"/>
    </div>
    <div class="website-mobile-container">
      <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/dist/img/mobile_header.svg' ?>"/>
      <div class="website-mobile-flat-container"><img class="img-responsive" src="<?php the_field('website_mobile_flat_three') ?>"/></div>
      <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/dist/img/mobile_footer.svg' ?>"/>
    </div>
    <img class="scroll-icon" src="<?php echo get_template_directory_uri() . '/dist/img/scroll-icon.svg' ?>"/>
  </div>

</div>
<?php endif ?>