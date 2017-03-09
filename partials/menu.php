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
      <li id="menu-services">
        <h1>services</h1>
        <ul class="submenu-1">
          <li id="menu-branding">
          <h1>branding &amp; logo design</h1>
            <ul class="submenu-2">
              <li><a href="http://google.com"><h1>branded stationary</h1></a></li>
              <li><h1>brand development</h1></li>
            </ul>
          </li>
          <li id="menu-website"><h1>website design</h1>
            <ul class="submenu-2">
              <li><h1>website build</h1></li>
              <li><h1>Google Adwords &amp; SEO</h1></li>
              <li><h1>interactive animation</h1></li>
            </ul>
          </li>
          <li id="menu-print"><h1>print &amp; packaging</h1>
            <ul class="submenu-2">
              <li><h1>branded stationary</h1></li>
              <li><h1>marketing materials</h1></li>
              <li><h1>product packaging</h1></li>
            </ul>
          </li>
          <li id="menu-digital"><h1>digital marketing</h1>
            <ul class="submenu-2">
              <li><h1>social media campaigns </h1></li>
              <li><h1>corporate videos</h1></li>
              <li><h1>Google Adwords &amp; SEO</h1></li>
            </ul>
          </li>
          <li id="menu-film"><h1>film &amp; animation</h1>
            <ul class="submenu-2">
              <li><h1>corporate videos</h1></li>
              <li><h1>interactive animation</h1></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="<?php echo get_site_url() . '/portfolio' ?>"><h1>portfolio</h1></a></li>
      <li><a href="<?php echo get_site_url() . '/blog' ?>"><h1>blog</h1></a></li>
      <li><a href="<?php echo get_site_url() . '/about' ?>"><h1>about</h1></a></li>
      <li><a href="<?php echo get_site_url() . '/contact' ?>"><h1>contact</h1></a></li>
      <li><a href="<?php echo get_site_url() . '/shop' ?>"><h1>shop</h1></a></li>
    </ul>
  </div>
</div>
<script>

jQuery(document).ready(function($){
  $('#menu-services').on('click', function() {
    $(this).toggleClass('active');
  });

  $('#menu-branding').on('click', function(event) {
    event.stopPropagation();
    $('#menu-services *').not(this).removeClass('active');
    $(this).toggleClass('active');
  });

  $('#menu-website').on('click', function(event) {
    event.stopPropagation();
    $('#menu-services *').not(this).removeClass('active');
    $(this).toggleClass('active');
  });

  $('#menu-print').on('click', function(event) {
    event.stopPropagation();
    $('#menu-services *').not(this).removeClass('active');
    $(this).toggleClass('active');
  });

  $('#menu-digital').on('click', function(event) {
    event.stopPropagation();
    $('#menu-services *').not(this).removeClass('active');
    $(this).toggleClass('active');
  });

  $('#menu-film').on('click', function(event) {
    event.stopPropagation();
    $('#menu-services *').not(this).removeClass('active');
    $(this).toggleClass('active');
  });
});
</script>







