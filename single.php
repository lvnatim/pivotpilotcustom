<?php get_header(); ?>
<div id="section-portfolio" class="container-fluid" style="background-color: <?php the_field('background_color') ?>;"">
  <div class="row">
    <div class="col-xs-12" style="color: <?php the_field('text_color') ?>;">
      <div id="portfolio-menu-container" class="active">
        <div id="portfolio-menu">
          <div id="portfolio-menu-hamburger">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <p class="title">Services</p>
        </div>
        <ul>
          <?php if(get_field('branding_and_logo')): ?><a href="#branding-and-logo-content">Branding & Logo</a><?php endif ?>
          <?php if(get_field('animation_and_film')): ?><a href="">Film & Animation</a><?php endif ?>
          <?php if(get_field('online_marketing')): ?><a href="">Online Marketing</a><?php endif ?>
          <?php if(get_field('website')): ?><a href="#web-and-seo-content">Web Development</a><?php endif ?>
          <?php if(get_field('print')): ?><a href="#print-and-packaging-content">Print & Packaging</a><?php endif ?>
        </ul>
        <?php if(get_field('website_link')): ?>
        <div class="title-container alternate">
          <a href="<?php the_field('website_link') ?>">
            <p class="title">Visit Website</p>
          </a>
        </div>
        <?php endif ?>
      </div>
    <?php get_template_part('partials/portfolio_default', 'portfolio_default'); ?>
    <?php get_template_part('partials/portfolio_branding', 'branding_and_logo'); ?>
    <?php get_template_part('partials/portfolio_website', 'website_and_seo'); ?>
    <?php get_template_part('partials/portfolio_print', 'print_and_packaging'); ?>
    <?php get_template_part('partials/navigation', 'navigation'); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>