<?php if(get_field('website')): ?>
<div id="web-and-seo" style="background-color: <?php the_field('website_background_color') ?>;color: <?php the_field('website_text_color') ?>;">
  <div class="website-cont">
    <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/dist/img/desktop_header.svg' ?>"/>
    <div>
      <img class="img-responsive" src="<?php echo get_field('website_flat_image') ?>"/>
    </div>
  </div>
  <p class="title">Web Development & SEO</p>
  <p class="portfolio-content"><?php the_field('website_content') ?></p>
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