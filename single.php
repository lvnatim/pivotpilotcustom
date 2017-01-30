<?php get_header(); ?>
<div id="section-portfolio" class="container-fluid">
  <div class="row">
    <div class="col-xs-12" style="
      background-color: <?php the_field('background_color') ?>;
      color: <?php the_field('text_color') ?>;">
      <p class="title"><?php echo $post->post_title; ?></p>
      <h3><?php echo $post->post_excerpt; ?></h3>
      <p><?php echo $post->post_content; ?></p>
      <img class="img-responsive" src="<?php echo the_field('gallery_main_image'); ?>" />
    </div>
  </div>
</div>
<?php get_footer(); ?>