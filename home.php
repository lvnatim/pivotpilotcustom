<?php get_header(); ?>
<section class="first-section radial-background" id="radial-background">

  <div class="dynamic-content-cont">
    <div class="default-content">
      <h1>We use strategic</h1>
      <h1>design to help our</h1>
      <h1>clients grow.</h1>
    </div>
    <div class="default-content-desktop">
      <h1>We use strategic design</h1>
      <h1>to help our clients grow.</h1>
    </div>
    <div class="alternate-content">
      <div class="alternate-content-text">
        <p>Beautiful designs are useless without substance. For this reason, we research your competition and industry gaps before we design and create marketing strategies to help your company stand out in a competitive market.</p>
        <p class="include">Our services include:</p>
      </div>
      <ul class="alternate-content-buttons">
        <?php $terms = get_terms( 'services' );?>
        <?php foreach($terms as $term): ?>
          <a class="button" href="<?php echo get_site_url() . '/portfolio?taxonomy=services&category=' . $term->term_id ?>">
            <h3><?php echo $term->name ?></h3>
          </a>
        <?php endforeach ?>
      </ul>
    </div>
  </div>
  <a id="change-landing" class="button">How Exactly?</a>
  <a href="#home-case-studies" class="landing-face">
    <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/dist/animation/face/eyelid.svg' ?>"/>
    <img class="img-responsive eyeball" src="<?php echo get_template_directory_uri() . '/dist/animation/face/eyeball.svg' ?>"/>
    <img class="img-responsive nose" src="<?php echo get_template_directory_uri() . '/dist/animation/face/nose.svg' ?>"/>
    <img class="img-responsive mouth" src="<?php echo get_template_directory_uri() . '/dist/animation/face/mouth.svg' ?>"/>
  </a>

</section>

<section class="light-purple-background">
  <div class="light-purple-background-text">
    <h3>Yes, we will make you look good. But, most importantly, we will do it towards your business goals.</h3>
    <p>Beautiful designs are useless without substance. For this reason, we research your competition and industry gaps before we design and create marketing strategies to help your company stand out in a competitive market.</p>
  </div>
  <div id="pie-container">
    <div id="pie"></div>
  </div>
</section>

 <?php
$args = array(
  array(
  'taxonomy' => 'post_tag',
  'field' => 'slug',
  'terms' => 'featured',
  'include_children' => false
  )
);
$posts = get_posts(
  array(
  'post_type' => 'clients',
  'numberposts' => 3,
  'tax_query' => $args
  )
);
?>

<section class="last-section" id="home-case-studies">
  <a id="featured-case-studies-button" class="button alternate no-margin-top" href="<?php echo get_site_url() . '/portfolio' ?>">Featured Case Studies</a>
  <div id="featured-case-studies" class="slide-container">
    <?php foreach($posts as $post): ?>
    <div class="slide">
      <div class="slide-inner-cont">
        <a href="<?php echo get_permalink($post) ?>" class="slide-image-cont" style="background-image: url(<?php echo get_the_post_thumbnail_url($post); ?>)">
        </a>
        <h3><?php echo $post->post_excerpt ?></h3>
        <ul>
          <?php $terms = get_the_terms($post, 'services'); ?>
          <?php foreach($terms as $term): ?>
            <li><span><?php echo $term->name ?></span></li>
          <?php endforeach?>
        </ul>
      </div>
    </div>
    <?php endforeach ?>
  </div>
  <div class="featured-case-studies-face">
    <img class="img-responsive facepart eyeball" src="<?php echo get_template_directory_uri() . '/dist/animation/face2/eyeball.svg' ?>"/>
    <img class="img-responsive facepart" src="<?php echo get_template_directory_uri() . '/dist/animation/face2/eyelid.svg' ?>"/>
    <img class="img-responsive facepart nose" src="<?php echo get_template_directory_uri() . '/dist/animation/face2/arrow.svg' ?>"/>

  </div>
</section>

<?php get_footer(); ?>