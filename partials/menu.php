<div id="mobile-menu">

  <a id="mobile-menu-logo" href="<?php echo get_site_url(); ?>">
    <h1>Pivot</h1>
    <img src="<?php echo get_template_directory_uri() . '/dist/animation/ampersand/ampersand-purple.svg' ?>"/>
    <h1>Pilot</h1>
  </a>

  <div id="mobile-open" class="hamburger">
    <span></span>
    <span></span>
    <span></span>
  </div>

  <div id="mobile-menu-sidebar">
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
      <li><a href="<?php echo get_site_url() . '/contact' ?>"><h1>Contact</h1></a></li>
      <!-- <li><a href="<?php echo get_site_url() . '/shop' ?>"><h1>Shop</h1></a></li> -->
    </ul>
  </div>
</div>

<?php  

if(is_home()){
  $menu_is_see_through = true;
}

?>

<div id="menu" class="state-active <?php if($menu_is_see_through){echo "state-see-through";} ?>">
  <div class="overlay"></div>
  <a href="<?php echo get_site_url(); ?>">
    <h1>Pivot</h1>
  </a>
  <ul>
    <a href="<?php echo get_site_url() . '/portfolio' ?>">Portfolio</a>
    <a id="open-services">Services</a>
  </ul>
    <div id="ampersand-cont">
      <img id="purple-ampersand" src="<?php echo get_template_directory_uri() . '/dist/animation/ampersand/ampersand-purple.svg' ?>"/>
      <img id="white-ampersand" src="<?php echo get_template_directory_uri() . '/dist/animation/ampersand/ampersand-white.svg' ?>"/>
    </div>
  <ul>
    <a href="<?php echo get_site_url() . '/blog' ?>">Blog</a>
    <a href="<?php echo get_site_url() . '/about' ?>">About</a>
  </ul>
  <a href="<?php echo get_site_url(); ?>">
    <h1>Pilot</h1>
  </a>
</div>

<!-- Desktop Menu -->
<div id="services-dropdown">
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
            <p class="title"><?php echo get_term($term_id)->name; ?></p>
          </a>
        <?php endforeach ?>
      </ul>
    </div>
  <?php endforeach ?>

  </div>
</div>

<script>

jQuery(document).ready(function($){

  //=============    Mobile Menu    ===================


  //=============    Desktop Menu    ===================
  // Each #desktop-_________ is a specific button.
  // Clicking that button toggles 'active' on its child UL, aka level-2.

  $('.service-subterm-button').on('click', function(){
    $('.service-term-button-cont').removeClass('state-active');
    $(this).parent().addClass('state-active');
  })

  $('#open-services').on('click', function(){
    $('#services-dropdown').toggleClass('state-active');
  });

  // Placeholder-menu to be replaced by services button on real menu.

  $('.placeholder-menu').on('click', function(event) {
    if ($(this).hasClass('active')) {
      $(this).removeClass('active')
      $('#services-dropdown *').removeClass('active');
    } else {
      $(this).toggleClass('active');
      $('.level-1').toggleClass('active');
    }
  });

});
</script>







