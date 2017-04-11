<footer class="<?php if(is_singular('post')){echo 'share-bar-space';} ?>">
  <section>
    <a class="button footer-button">Let's Grab a Coffee</a>
    <div class="big-icons-container">
      <a href="tel:+16044582345" class="icon-container big-icon-container">
        <img class="img-responsive svg" src="<?php echo get_template_directory_uri() . '/dist/icons/phone.svg' ?>"/>
        <h3>604.458.2345</h3>
      </a>
      <a href="mailto:hello@pivotandpilot.com" class="icon-container big-icon-container">
        <img class="img-responsive svg" src="<?php echo get_template_directory_uri() . '/dist/icons/mail.svg' ?>"/>
        <h3>hello@pivotandpilot.com</h3>
      </a>
    </div>
    <div class="small-icons-container">
      <a target="_blank" href="https://www.facebook.com/pivotandpilot/" class="icon-container small-icon-container">
        <img class="img-responsive svg" src="<?php echo get_template_directory_uri() . '/dist/icons/facebook.svg' ?>"/>
      </a>
      <a target="_blank" href="https://twitter.com/pivotandpilot" class="icon-container small-icon-container"><img class="img-responsive svg" src="<?php echo get_template_directory_uri() . '/dist/icons/twitter.svg' ?>"/></a>
      <a target="_blank" href="https://www.linkedin.com/company/pivot-&-pilot-creative" class="icon-container small-icon-container"><img class="img-responsive svg" src="<?php echo get_template_directory_uri() . '/dist/icons/linkedin.svg' ?>"/></a>
      <a target="_blank" href="https://www.instagram.com/pivotandpilot/" class="icon-container small-icon-container"><img class="img-responsive svg" src="<?php echo get_template_directory_uri() . '/dist/icons/instagram.svg' ?>"/></a>
    </div>
    <p id="copyright" class="white">2016 &copy; Pivot &amp; Pilot Inc.</p>
  </section>
</footer>
<?php wp_footer(); ?>
</body>
</html>