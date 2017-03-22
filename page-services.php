<?php echo get_header(); ?>

<?php

parse_str($_SERVER['QUERY_STRING'], $query);
$category = $query['category'];

$term = get_term($category);
$service_excerpt = get_field('service_excerpt', 'services_' . $term->term_id);
$service_description = $term->description;

?>

<section class="first-section last-section portfolio-section less-padding-top">

  <p class="title blue"><?php echo $term->name; ?></p>
  <h1 class="bold"><?php echo $service_excerpt ?></h1>
  <p><?php echo $service_description ?></p>

  <div id="snippets-cont">
    <h3>Why does it matter?</h3>
    <div id="featured-service-snippets">
      <?php foreach(range(1, 7) as $current_snippet_number): ?>
        <?php if(get_field('snippet_icon_' . $current_snippet_number, 'services_' . $category)): ?>
          <?php
            $snippet_icon = get_field('snippet_icon_' . $current_snippet_number, 'services_' . $category);
            $snippet_excerpt = get_field('snippet_excerpt_' . $current_snippet_number, 'services_' . $category);
            $snippet_description = get_field('snippet_description_' . $current_snippet_number, 'services_' . $category);
            $snippet_icon_inverse = get_field('snippet_icon_inverse_' . $current_snippet_number, 'services_' . $category);
          ?>
          <div>
            <div class="services-icon-post">
              <img src="<?php echo $snippet_icon ?>"/>
              <p><?php echo $snippet_excerpt ?></p>
              <div class="more-info-plus" data-overlay="<?php echo $current_snippet_number ?>">+</div>
            </div>
          </div>
        <?php endif ?>
      <?php endforeach ?>
    </div>

    <div id="desktop-featured-service-snippets">
      <?php foreach(range(1, 7) as $current_snippet_number): ?>
        <?php if(get_field('snippet_icon_' . $current_snippet_number, 'services_' . $category)): ?>
          <?php
            $snippet_icon = get_field('snippet_icon_' . $current_snippet_number, 'services_' . $category);
            $snippet_excerpt = get_field('snippet_excerpt_' . $current_snippet_number, 'services_' . $category);
            $snippet_description = get_field('snippet_description_' . $current_snippet_number, 'services_' . $category);
            $snippet_icon_inverse = get_field('snippet_icon_inverse_' . $current_snippet_number, 'services_' . $category);
          ?>
          <div class="services-icon-post">
            <img src="<?php echo $snippet_icon ?>"/>
            <p><?php echo $snippet_excerpt ?></p>
            <div class="more-info-plus" data-overlay="<?php echo $current_snippet_number ?>">+</div>
          </div>
        <?php endif ?>
      <?php endforeach ?>
    </div>
  </div>

  <div id="overlay-cont">
    <?php foreach(range(1, 6) as $current_snippet_number): ?>
      <?php if(get_field('snippet_icon_' . $current_snippet_number, 'services_' . $category)): ?>
        <?php
          $snippet_icon = get_field('snippet_icon_' . $current_snippet_number, 'services_' . $category);
          $snippet_excerpt = get_field('snippet_excerpt_' . $current_snippet_number, 'services_' . $category);
          $snippet_description = get_field('snippet_description_' . $current_snippet_number, 'services_' . $category);
          $snippet_icon_inverse = get_field('snippet_icon_inverse_' . $current_snippet_number, 'services_' . $category);
        ?>
        <div class="service-overlay">
          <section class='first-section'>
            <div class="service-overlay-exit alternate hamburger state-closed">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <div class="service-overlay-content">
              <img src="<?php echo $snippet_icon_inverse ?>"/>
              <p class="title"><?php echo $term->name ?></p>
              <h1 class="bold"><?php echo $snippet_excerpt ?></h1>
              <p><?php echo $snippet_description ?></p>
            </div>
          </section>
        </div>
      <?php endif ?>
    <?php endforeach ?>
  </div>

  <p class="title">Selected Logos</p>
  <div class="selected-logos">
    <?php foreach(range(1, 6) as $image_counter): ?>
      <a target="_blank" href="<?php the_field('selected_logo_link_' . $image_counter, 'services_' . $category); ?>">
        <div style="background-image:url(<?php the_field('selected_logo_' . $image_counter, 'services_' . $category); ?>)"></div>
      </a>
    <?php endforeach ?>
  </div>
</section>

<?php echo get_footer(); ?>

<script>
jQuery(document).ready(function($){
  $('.more-info-plus').on('click', function() {
    const index = $(this).data('overlay') - 1;
    $('.service-overlay').eq(index).addClass('active');
  });

  // Currently clicking anywhere on overlay removes 'active' class.

  $('.service-overlay').on('click', function() {
    $('.service-overlay').removeClass('active');
  })
});
</script>










