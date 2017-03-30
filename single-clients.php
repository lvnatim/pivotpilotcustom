<?php get_header(); ?>

<div id="portfolio-menu" class="state-opened">
  <div id="portfolio-header">
    <div id="portfolio-menu-open" class="hamburger portfolio-hamburger state-closed">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <p class="title">Services</p>
  </div>

  <ul>
    <?php if(get_field('branding_and_logo')): ?><a class="portfolio-button" href="#branding-and-logo">Branding & Logo</a><?php endif?>
    <?php if(get_field('website')): ?><a class="portfolio-button" href="#web-and-seo">Website & SEO</a><?php endif?>
    <?php if(get_field('animation')): ?><a class="portfolio-button" href="#animation">Animation & Film</a><?php endif?>
    <?php if(get_field('print')): ?><a class="portfolio-button" href="#print-and-packaging">Print & Packaging</a><?php endif?>
  </ul>

  <?php if(get_field('website_link')): ?>
  <a href="http://www.<?php the_field('website_link'); ?>" target="_blank">
    <span class="default_url">www</span>
    <span class="full_url"><?php the_field('website_link'); ?></span>
  </a>
  <?php endif ?>
</div>

<section class="first-section portfolio-section"
  style="background-color: <?php the_field('background_color') ?>;color: <?php the_field('text_color') ?>;">
  <?php get_template_part('partials/portfolio_default', 'portfolio_default'); ?>
  <?php get_template_part('partials/portfolio_branding', 'branding_and_logo'); ?>
  <?php get_template_part('partials/portfolio_website', 'website_and_seo'); ?>
  <?php get_template_part('partials/portfolio_animation', 'animation_and_film'); ?>
  <?php get_template_part('partials/portfolio_print', 'print_and_packaging'); ?>
  <?php get_template_part('partials/navigation', 'navigation'); ?>
</section>
<?php get_footer(); ?>