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
          <li class="inner-inner-button">
            <h1>Branding &amp; Logo</h1>
            <ul class="inner-inner-menu">
              <li><a><h1>Branded Stationary</h1></a></li>
              <li><a><h1>Brand Development</h1></a></li>
            </ul>
          </li>
          <li class="inner-inner-button">
            <h1>Website</h1>
            <ul class="inner-inner-menu">
              <li><a><h1>Website Build</h1></a></li>
              <li><a><h1>Google Adwords & SEO</h1></a></li>
              <li><a><h1>Interactive Animation</h1></a></li>
            </ul>
          </li>
          <li class="inner-inner-button">
            <h1>Print & Packaging</h1>
            <ul class="inner-inner-menu">
              <li><a><h1>Branded Stationary</h1></a></li>
              <li><a><h1>Marketing Materials</h1></a></li>
              <li><a><h1>Product Packaging</h1></a></li>
            </ul>
          </li>
          <li class="inner-inner-button">
            <h1>Digital Marketing</h1>
            <ul class="inner-inner-menu">
              <li><a><h1>Social Media Campaigns</h1></a></li>
              <li><a><h1>Corporate Videos</h1></a></li>
              <li><a><h1>Google Adwords & SEO</h1></a></li>
            </ul>
          </li>
          <li class="inner-inner-button">
            <h1>Film & Animation</h1>
            <ul class="inner-inner-menu">
              <li><a><h1>Corporate Videos</h1></a></li>
              <li><a><h1>Interactive Animation</h1></a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="<?php echo get_site_url() . '/portfolio' ?>"><h1>Portfolio</h1></a></li>
      <li><a href="<?php echo get_site_url() . '/blog' ?>"><h1>Blog</h1></a></li>
      <li><a href="<?php echo get_site_url() . '/about' ?>"><h1>About</h1></a></li>
      <li><a href="<?php echo get_site_url() . '/contact' ?>"><h1>Contact</h1></a></li>
      <li><a href="<?php echo get_site_url() . '/shop' ?>"><h1>Shop</h1></a></li>
    </ul>
  </div>
</div>

<!-- Desktop Menu -->
<div id="services-dropdown">
  <div class="placeholder-menu"></div>
  <div class="level-1">
    <div class="level-1-dropdown-button" id="desktop-branding">
      <h1>BRANDING &amp; LOGO DESIGN</h1>
      <ul class="level-2">
        <div class="level-2-dropdown-button">
          <a href="/pnp3/services?category=11">
            <h1>BRANDED STATIONARY</h1>
          </a>
        </div>
        <div class="level-2-dropdown-button">
          <a href="/pnp3/services?category=12">
            <h1>BRAND DEVELOPMENT</h1>
          </a>
        </div>
      </ul>
    </div>
    <div class="level-1-dropdown-button" id="desktop-website">
      <h1>WEBSITE DESIGN</h1>
      <ul class="level-2">
        <div class="level-2-dropdown-button">
          <a href="/pnp3/services?category=4">
            <h1>WEBSITE BUILD</h1>
          </a>
        </div>
        <div class="level-2-dropdown-button">
          <a href="/pnp3/services?category=16">
            <h1>GOOGLE ADWORDS &amp; SEO</h1>
          </a>
        </div>
        <div class="level-2-dropdown-button">
          <a href="/pnp3/services?category=18">
            <h1>INTERACTIVE ANIMATION</h1>
          </a>
        </div>
      </ul>
    </div>
    <div class="level-1-dropdown-button" id="desktop-print">
      <h1>PRINT &amp; PACKAGING</h1>
        <ul class="level-2">
          <div class="level-2-dropdown-button">
            <a href="/pnp3/services?category=23">
              <h1>BRANDED STATIONARY</h1>
            </a>
          </div>
          <div class="level-2-dropdown-button">
            <a href="/pnp3/services?category=19">
              <h1>MARKETING MATERIALS</h1>
            </a>
          </div>
          <div class="level-2-dropdown-button">
            <a href="/pnp3/services?category=20">
              <h1>PRODUCT PACKAGING</h1>
            </a>
          </div>
        </ul>
    </div>
    <div class="level-1-dropdown-button" id="desktop-digital">
      <h1>DIGITAL MARKETING</h1>
        <ul class="level-2">
          <div class="level-2-dropdown-button">
            <a href="/pnp3/services?category=13">
              <h1>SOCIAL MEDIA CAMPAIGNS</h1>
            </a>
          </div>
          <div class="level-2-dropdown-button">
            <a href="/pnp3/services?category=14">
              <h1>CORPORATE VIDEOS</h1>
            </a>
          </div>
          <div class="level-2-dropdown-button">
            <a href="/pnp3/services?category=15">
              <h1>GOOGLE ADWORDS &amp; SEO</h1>
            </a>
          </div>
        </ul>
    </div>
    <div class="level-1-dropdown-button" id="desktop-film">
      <h1>FILM &amp; ANIMATION</h1>
        <ul class="level-2">
          <div class="level-2-dropdown-button">
            <a href="/pnp3/services?category=21">
              <h1>CORPORATE VIDEOS</h1>
            </a>
          </div>
          <div class="level-2-dropdown-button">
            <a href="/pnp3/services?category=22">
              <h1>INTERACTIVE ANIMATION</h1>
            </a>
          </div>
        </ul>
    </div>
  </div>
</div>

<script>

jQuery(document).ready(function($){

  //=============    Mobile Menu    ===================


  //=============    Desktop Menu    ===================
  // Each #desktop-_________ is a specific button.
  // Clicking that button toggles 'active' on its child UL, aka level-2.


  $('#desktop-branding').on('click', function(event) {
    $(this).toggleClass('active');
    $('.level-1 *').not(this).removeClass('active');
    $(this).find('ul').toggleClass('active');
  })

  $('#desktop-website').on('click', function(event) {
    $(this).toggleClass('active');
    $('.level-1 *').not(this).removeClass('active');
    $(this).find('ul').toggleClass('active');
  })

  $('#desktop-print').on('click', function(event) {
    $(this).toggleClass('active');
    $('.level-1 *').not(this).removeClass('active');
    $(this).find('ul').toggleClass('active');
  })

  $('#desktop-digital').on('click', function(event) {
    $(this).toggleClass('active');
    $('.level-1 *').not(this).removeClass('active');
    $(this).find('ul').toggleClass('active');
  })

  $('#desktop-film').on('click', function(event) {
    $(this).toggleClass('active');
    $('.level-1 *').not(this).removeClass('active');
    $(this).find('ul').toggleClass('active');
  })

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







