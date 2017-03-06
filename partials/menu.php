<div id="section-mobile-menu" class="primary-menu-mobile-links-container">
  <div id="mobile-menu-closed" class="mobile-menu">
    <span></span>
    <span></span>
    <span></span>
  </div>
  <ul class="primary-menu-mobile-links">
    <li><a href="<?php echo get_site_url() . '/services' ?>"><h1>services</h1></a></li>
    <li><a href="<?php echo get_site_url() . '/portfolio' ?>"><h1>portfolio</h1></a></li>
    <li><a href="<?php echo get_site_url() . '/blog' ?>"><h1>blog</h1></a></li>
    <li><a href="<?php echo get_site_url() . '/about' ?>"><h1>about</h1></a></li>
    <li><a href="<?php echo get_site_url() . '/contact' ?>"><h1>contact</h1></a></li>
    <li><a href="<?php echo get_site_url() . '/shop' ?>"><h1>shop</h1></a></li>
  </ul>
</div> 

<div id="section-menu" class="container-fluid">
  <div class="row">
    <div class="col-xs-12">
      <div class="primary-menu">
        <h1><a href="<?php echo get_site_url() ?>">Pivot</a></h1>
        <ul>
          <li><a href="<?php echo get_site_url() . '/services' ?>">Services</a></li>
          <li><a href="<?php echo get_site_url() . '/blog' ?>">Blog</a></li>
        </ul>
        <div id="ampersand-container">
          <img class="ampersand white" src="<?php echo get_template_directory_uri() . '/dist/animation/ampersand/ampersand-white.svg' ?>"/>
          <img class="ampersand" src="<?php echo get_template_directory_uri() . '/dist/animation/ampersand/ampersand-purple.svg' ?>"/>
        </div>
        <ul>
          <li><a href="<?php echo get_site_url() . '/about' ?>">About</a></li>
          <li><a href="<?php echo get_site_url() . '/contact' ?>">Contact</a></li>
        </ul>
        <h1><a href="<?php echo get_site_url() ?>">Pilot</a></h1>
      </div>
      <div id="primary-menu-mobile" class="primary-menu primary-menu-mobile">
        <h1>Pivot</h1>
        <div id="ampersand-container">
          <img class="ampersand white" src="<?php echo get_template_directory_uri() . '/dist/animation/ampersand/ampersand-white.svg' ?>"/>
          <img class="ampersand" src="<?php echo get_template_directory_uri() . '/dist/animation/ampersand/ampersand-purple.svg' ?>"/>
        </div>
        <h1>Pilot</h1>
        <div id="mobile-menu-open" class="mobile-menu" data-controls="menu">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
  </div>
</div>
