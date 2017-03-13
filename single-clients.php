<?php get_header(); ?>
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