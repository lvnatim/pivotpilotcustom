<div id="section-landing" class="container-fluid">
  <div class="row">
    <div class="col-xs-12">
      <div id="landing-container">
        <div id="main-landing" class="landing">
          <h1>We use strategic design to help our clients grow.</h1>
          <h1 id="switch-landing">How exactly?</h1>
          <div>
            <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/dist/animation/face/eyelid.svg' ?>"/>
            <img class="img-responsive eyeball" src="<?php echo get_template_directory_uri() . '/dist/animation/face/eyeball.svg' ?>"/>
            <img class="img-responsive nose" src="<?php echo get_template_directory_uri() . '/dist/animation/face/nose.svg' ?>"/>
            <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/dist/animation/face/mouth.svg' ?>"/>
          </div>
        </div>
        <div class="landing landing-alternate">
          <p id="landing-description">Beautiful designs are useless without substance. For this reason we research your competition and industry gaps before we design and create marketing strategies to help your company stand out in a competitive market.</p>
          <p>Our services include:</p>
          <ul class="services-container">
            <?php $terms = get_terms('services', array('hide_empty'=>false)); ?>
            <?php foreach($terms as $term): ?>
            <a data-term-id="<?php echo $term->term_id ?>" href="<?php echo get_site_url() . '/services?id=' . $term->term_id  ?>" class="title-container service-title-container"><?php echo $term->name ?></a>
            <?php endforeach ?>
          </ul>
          <div id="close-landing" class="title-container landing-title-container">
            <p class="title">Go Back Home</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>