<?php get_header(); ?>

<section class="first-section radial-background" id="radial-background">
  <div class="dynamic-content-cont">
    <div class="default-content">
      <h1>We use strategic</h1>
      <h1>design to help our</h1>
      <h1>clients grow.</h1>
    </div>
    <div class="alternate-content">
      <p>Beautiful designs are useless without substance. For this reason, we research your competition and industry gaps before we design and create marketing strategies to help your company stand out in a competitive market.</p>
      <p>Our services include:</p>
      <ul>
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
</section>

<section class="light-purple-background">
  <h3>Yes, we will make you look good. But, most importantly, we will do it towards your business goals.</h3>
  <p>Beautiful designs are useless without substance. For this reason, we research your competition and industry gaps before we design and create marketing strategies to help your company stand out in a competitive market.</p>
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

<section>
  <a class="button alternate no-margin-top">Featured Case Studies</a>
  <div id="featured-case-studies" class="slide-container">
    <?php foreach($posts as $post): ?>
    <div class="slide">
      <div class="slide-inner-cont">
        <a href="<?php echo get_permalink($post) ?>" class="slide-image-cont" style="background-image: url(<?php echo get_the_post_thumbnail_url($post); ?>)"></a>
        <h3><?php echo $post->post_excerpt ?></h3>
        <ul>
          <?php $terms = get_the_terms($post, 'services'); ?>
          <?php foreach($terms as $term): ?>
          <li><?php echo $term->name ?></li>
          <?php endforeach?>
        </ul>
      </div>
    </div>
    <?php endforeach ?>
  </div>
</section>

<?php get_footer(); ?>