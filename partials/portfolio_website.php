<?php if(get_field('website')): ?>
<div id="web-and-seo" style="background-color: <?php the_field('website_background_color') ?>;color: <?php the_field('website_text_color') ?>;">
  <div class="website-cont">
    <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/dist/img/desktop_header.svg' ?>"/>
    <div>
      <img class="img-responsive" src="<?php echo get_field('website_flat_image') ?>"/>
    </div>
    <img class="img-responsive icon" src="<?php echo get_template_directory_uri() . '/dist/img/scroll-icon.svg' ?>"/>
  </div>
  <p class="title">Web Development & SEO</p>
  <p class="portfolio-content"><?php the_field('website_content') ?></p>
  <?php if(get_field('website_icons')): ?>
    <div class="website-icons">
      <div>
        <img class="img-responsive" src="<?php echo get_field('website_icon_one') ?>"/>
        <p><?php echo get_field('website_icon_one_name') ?></p>
      </div>
      <div>
        <img class="img-responsive" src="<?php echo get_field('website_icon_two') ?>"/>
        <p><?php echo get_field('website_icon_two_name') ?></p>
      </div>
      <div>
        <img class="img-responsive" src="<?php echo get_field('website_icon_three') ?>"/>
        <p><?php echo get_field('website_icon_three_name') ?></p>
      </div>
      <div>
        <img class="img-responsive" src="<?php echo get_field('website_icon_four') ?>"/>
        <p><?php echo get_field('website_icon_four_name') ?></p>
      </div>
      <div>
        <img class="img-responsive" src="<?php echo get_field('website_icon_five') ?>"/>
        <p><?php echo get_field('website_icon_five_name') ?></p>
      </div>
      <div>
        <img class="img-responsive" src="<?php echo get_field('website_icon_six') ?>"/>
        <p><?php echo get_field('website_icon_six_name') ?></p>
      </div>
    </div>
  <?php endif ?>

  <div>
    <div class="website-mobile-cont">
      <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/dist/img/mobile_header.svg' ?>"/>
      <div class="website-mobile-flat"><img class="img-responsive" src="<?php the_field('website_mobile_flat_one') ?>"/></div>
      <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/dist/img/mobile_footer.svg' ?>"/>
    </div>
    <div class="website-mobile-cont">
      <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/dist/img/mobile_header.svg' ?>"/>
      <div class="website-mobile-flat"><img class="img-responsive" src="<?php the_field('website_mobile_flat_one') ?>"/></div>
      <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/dist/img/mobile_footer.svg' ?>"/>
    </div>
    <div class="website-mobile-cont">
      <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/dist/img/mobile_header.svg' ?>"/>
      <div class="website-mobile-flat"><img class="img-responsive" src="<?php the_field('website_mobile_flat_one') ?>"/></div>
      <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/dist/img/mobile_footer.svg' ?>"/>
    </div>
  </div>
</div>
<?php endif ?>