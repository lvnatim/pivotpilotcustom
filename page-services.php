<?php echo get_header(); ?>

<?php

parse_str($_SERVER['QUERY_STRING'], $query);
$category = $query['category'] ? $query['category'] : 4;

$term = get_term($category);
$service_excerpt = get_field('service_excerpt', 'term_' . $term->term_id);
$service_name = $term->name;
$service_description = $term->description;
$service_tagline = get_field('service_tagline', 'services_' . $category);

?>

<section class="first-section last-section">
  <div class="service-info">
    <h1><?php echo $snippet_excerpt ?></h1>
    <h1><?php echo $service_name ?></h1>
    <h3><?php echo $service_tagline ?></h3>
    <p><?php echo $service_description ?></p>
  </div>

  <div class="services-snippets-container">
    <h3>Why does it matter?</h3>
    <div class="services-icons-slider">

    <?php
    $currentNumber = 1;
    for ($i = 1; $i < 7; $i++) {

      $snippet_excerpt = get_field('snippet_excerpt_' . $currentNumber, 'services_' . $category);
      $snippet_description = get_field('snippet_description_' . $currentNumber, 'services_' . $category);
      $snippet_icon = get_field('snippet_icon_' . $currentNumber, 'services_' . $category);
      $snippet_icon_inverse = get_field('snippet_icon_inverse_' . $currentNumber, 'services_' . $category);
      // $selected_logo = get_field('selected_logo_' . $currentNumber, 'services_' . $category);
      // $selected_logo_link = get_field('link_for_selected_logo_' . $currentNumber, 'services_' . $category);

      if (strlen($snippet_description) > 0 ) {
          echo "<div class='services-icon-post'>
          <img src=" . $snippet_icon . ">
          <h3>" . $snippet_excerpt . "</h3>
          <div class='more-info-plus'>
            <p>+</p>
          </div>
          <div class='service-overlay'>
            <div id='service-overlay-exit'>
              <span></span>
              <span></span>
            </div>
            <div class='service-overlay-content'>
              <div class='snippet-icon-container'>
                <img class='img-responsive' src='" . $snippet_icon_inverse . "'>
              </div>
              <div class='snippet-content-container'>
                <h1>" . $service_name . "</h1>
                <h3>" . $snippet_excerpt . "</h3>
                <p> " . $snippet_description . "</p>
              </div>
            </div>
          </div>
        </div>";
      }
      $currentNumber += 1;
    }
    ?>
    </div>
  </div>

  <div class="selected-logos">
    <h3>Selected Logos</h3>
      <div class="image-container">

      <?php
        $image_counter= 1;
        for ($i = 1; $i < 7; $i++) {
        $selected_logo = get_field('selected_logo_' . $image_counter, 'services_' . $category);
        $selected_logo_link = get_field('link_for_selected_logo_' . $image_counter, 'services_' . $category);
        echo "<a href='" . $selected_logo_link .  "''><img class='img-responsive' src=" . $selected_logo . "></a>";
        $image_counter += 1;
        }
      ?>

    </div>
  </div>
</section>

<?php echo get_footer(); ?>

<script>
jQuery(document).ready(function($){
  $('.more-info-plus').on('click', function() {

    $(this).next().addClass('active');
    $('.service-overlay-content').animate({'padding-top': '50px'}, 500);

  });



  // Currently clicking anywhere on overlay removes 'active' class.

  $('.service-overlay').on('click', function() {
    $('.service-overlay').removeClass('active');
    $('.service-overlay-content').animate({'padding-top': '800px'}, 200);
  })
});
</script>










