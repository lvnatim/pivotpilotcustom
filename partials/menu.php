<div id="loader" class="loading"></div>
<div id="mobile-menu" class="loading">

  <a id="mobile-menu-logo" href="<?php echo get_site_url(); ?>">
    <h1>Pivot</h1>
    <img class="svg" src="<?php echo get_template_directory_uri() . '/dist/animation/ampersand/ampersand-white.svg' ?>"/>
    <h1>Pilot</h1>
  </a>

  <div id="mobile-open" class="hamburger">
    <span></span>
    <span></span>
    <span></span>
  </div>

  <div id="mobile-menu-sidebar">
    <div class="overlay"></div>
    <div id="mobile-close" class="alternate hamburger state-closed">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <ul>
      <li class="inner-button">
        <h1>Services</h1>
        <ul class="inner-menu">
          <?php $terms = get_terms( 'services' );?>
          <?php foreach($terms as $term): ?>
          <li class="inner-inner-button">
            <h1><?php echo $term->name; ?></h1>
            <ul class="inner-inner-menu">
              <?php $term_children_ids = get_term_children($term->term_id, 'services'); ?>
              <?php foreach($term_children_ids as $term_id): ?>
              <li>
                <a href="<?php echo get_site_url() . '/services?category=' . $term_id ?>">
                  <h1><?php echo get_term($term_id)->name; ?></h1>
                </a>
              </li>
              <?php endforeach ?>
            </ul>
          </li>
          <?php endforeach ?>
        </ul>
      </li>
      <li><a href="<?php echo get_site_url() . '/portfolio' ?>"><h1>Portfolio</h1></a></li>
      <li><a href="<?php echo get_site_url() . '/blog' ?>"><h1>Blog</h1></a></li>
      <li><a href="<?php echo get_site_url() . '/about' ?>"><h1>About</h1></a></li>
      <li><a class="toggle-contact"><h1>Contact</h1></a></li>
      <!-- <li><a href="<?php echo get_site_url() . '/shop' ?>"><h1>Shop</h1></a></li> -->
    </ul>
  </div>
</div>

<?php

if(is_home() || is_page('blog')){
  $menu_is_see_through = true;
}

?>

<div id="menu" class="loading white <?php if($menu_is_see_through){echo "state-see-through";} ?>">
  <div class="overlay"></div>
  <a href="<?php echo get_site_url(); ?>">
    <h1>Pivot</h1>
  </a>
  <ul>
    <a class="<?php if(is_page('portfolio')){echo 'state-active';} ?>" href="<?php echo get_site_url() . '/portfolio' ?>">Portfolio</a>
    <a class="<?php if(is_page('services')){echo 'state-active';} ?>" id="open-services">Services</a>
  </ul>
    <div id="ampersand-cont">
      <img id="purple-ampersand" src="<?php echo get_template_directory_uri() . '/dist/animation/ampersand/ampersand-purple.svg' ?>"/>
      <img id="white-ampersand" src="<?php echo get_template_directory_uri() . '/dist/animation/ampersand/ampersand-white.svg' ?>"/>
    </div>
  <ul>
    <a class="<?php if(is_page('blog')){echo 'state-active';} ?>" href="<?php echo get_site_url() . '/blog' ?>">Blog</a>
    <a class="<?php if(is_page('about')){echo 'state-active';} ?>" href="<?php echo get_site_url() . '/about' ?>">About</a>
  </ul>
  <a href="<?php echo get_site_url(); ?>">
    <h1>Pilot</h1>
  </a>
</div>

<!-- Desktop Menu -->
<div id="services-dropdown">
  <div id="hover-box"></div>
  <div class="service-term-cont">
  <?php foreach($terms as $term): ?>
    <div class="service-term-button-cont">
      <a class="service-subterm-button">
        <p class="title"><?php echo $term->name; ?></p>
      </a>
      <ul class="service-subterm-cont">
        <?php $term_children_ids = get_term_children($term->term_id, 'services'); ?>
        <?php foreach($term_children_ids as $term_id): ?>
          <a href="<?php echo get_site_url() . '/services?category=' . $term_id ?>">
            <p class="title second-dropdown"><?php echo get_term($term_id)->name; ?></p>
          </a>
        <?php endforeach ?>
      </ul>
    </div>
  <?php endforeach ?>

  </div>
</div>

<div id="contact-form">
  <div id="contact-form-close" class="alternate hamburger state-closed toggle-contact">
      <span></span>
      <span></span>
      <span></span>
    </div>

  <!--  BEGIN CONTACT FORM  -->

  <?php echo do_shortcode('[contact-form-7 id="168" title="Contact form 1"]'); ?>

  <div id="contact-form-footer">
    <h3 class="bold">Don't Like Forms?</h3>
    <a href="mailto:hello@pivotandpilot.com" class="button">Send us an email</a>
    <div>
      <p class="title">Or give us a call:</p>
      <a href="tel:+17788221408"><h3 class="bold phone">+1 (778) 822 . 1408</h3></a>
    </div>
  </div>  
</div>

<script>

jQuery(document).ready(function($){

  //=============    Desktop Menu    ===================

  $('.service-subterm-button').on('click', function(){
    $('.service-term-button-cont').removeClass('state-active');
    $(this).parent().addClass('state-active');
  })

  $('#open-services, #services-dropdown').hover(
    function(){
      $('#open-services').toggleClass('state-hover');
      $('#services-dropdown').toggleClass('state-active');
      if(!$('#radial-background').hasClass('state-alternate')){
        $('#menu').addClass('force-state-toggled');
      }
    },
    function(){
      $('#open-services').toggleClass('state-hover');
      $('#services-dropdown').toggleClass('state-active');
      $('.service-term-button-cont').removeClass('state-active');
      if(!$('#radial-background').hasClass('state-alternate')){
        $('#menu').removeClass('force-state-toggled');
      }
    }
  );

  $('.service-subterm-button').hover(function(){
    $('.service-term-button-cont').removeClass('state-active');
    $(this).parent().addClass('state-active');
  })

  $('.placeholder-menu').hover(function(event) {
    if ($(this).hasClass('active')) {
      $(this).removeClass('active')
      $('#services-dropdown *').removeClass('active');
    } else {
      $('.service-term-button-cont').removeClass('state-active');
      $('.first-section').css({'transform': 'translate(0px, 56px)'});
    }
  });


});
</script>







