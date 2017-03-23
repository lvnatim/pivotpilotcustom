<?php $terms = get_the_category($post->ID) ?>
<?php echo get_header(); ?>

<section class="first-section last-section">

  <div id="blog-post-container">
    <?php $terms = get_the_terms($post, 'category'); ?>
    <div class="post blog-post single-post">
      <div>
      <?php foreach($terms as $term): ?>
        <li class="term"><?php echo $term->name ?></li>
      <?php endforeach?>
      </div>
      <h3 id="blog-post-title"><?php echo $post->post_title ?></h3>
      <p class="date"><?php echo get_the_date('', $post) ?></p>
      <img id="blog-post-thumbnail" class="img-responsive" src="<?php echo get_the_post_thumbnail_url($post); ?>"/>
    </div>
  </div>

  <div id="blog-post-content">
    <?php echo apply_filters("the_content", $post->post_content) ?>
  </div>

  <div id="blog-post-custom-fields">
    <?php if(get_field('blog_website_url')): ?>
    <a class="button" href="<?php echo get_field('blog_website_url') ?>">Visit Site</a>
    <?php endif ?>
    <?php if(get_field('work_cited_one')): ?>
      <div class="citation-cont">
        <p class="title">Works Cited</p>
        <div class="citation">
          <p>1. <?php echo get_field('work_cited_one'); ?></p>
          <a href="<?php echo get_field('work_cited_one_url') ?>"><?php echo get_field('work_cited_one_url') ?></a>
        </div>
      <?php if(get_field('work_cited_two')): ?>
        <div class="citation">
          <p>2. <?php echo get_field('work_cited_two'); ?></p>
          <a href="<?php echo get_field('work_cited_two_url') ?>"><?php echo get_field('work_cited_two_url') ?></a>
        </div>
      <?php endif ?>
      <?php if(get_field('work_cited_three')): ?>
        <div class="citation">
          <p>3. <?php echo get_field('work_cited_three'); ?></p>
          <a href="<?php echo get_field('work_cited_three_url') ?>"><?php echo get_field('work_cited_three_url') ?></a>
        </div>
      <?php endif ?>
    <?php endif ?>
    </div>
  </div>

  <div id="blog-related-posts-cont">
    <p class="title">Related Posts</p>
    <div id="blog-related-posts" class="slide-container">
    <?php
      function return_term_id($term) {
        return $term->term_id;
      }
      $blog_post_terms = get_the_terms($post, 'category');
      $blog_post_term_ids = array_map("return_term_id", $blog_post_terms);
    ?>
    <?php

    $args = array(
      'posts_per_page'   => 4,
      'offset'           => 0,
      'category'     => $blog_post_term_ids,
      'orderby'          => 'date',
      'order'            => 'DESC',
      'include'          => '',
      'exclude'          => $post->ID,
      'meta_key'         => '',
      'meta_value'       => '',
      'post_type'        => 'post',
      'post_mime_type'   => '',
      'post_parent'      => '',
      'author'       => '',
      'author_name'    => '',
      'post_status'      => 'publish',
      'suppress_filters' => true
    );

    $posts_array = get_posts( $args ); ?>
    <?php foreach($posts_array as $post): ?>
      <div class="slide">
        <div class="slide-inner-cont">
          <a href="<?php echo get_permalink($post) ?>" class="slide-image-cont" style="background-image: url(<?php echo get_the_post_thumbnail_url($post); ?>)"></a>
          <h3><?php echo $post->post_title ?></h3>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>

</section>

<div id="share-bar">
  <div class="social-icons">
    <a href="" target="_blank" id="fb-icon">
      <img src="<?php echo get_template_directory_uri() . '/dist/icons/facebook.svg' ?>" class="img-responsive svg"/>
    </a>
    <a href="" target="_blank" id="tweet-icon">
      <img src="<?php echo get_template_directory_uri() . '/dist/icons/twitter.svg' ?>" class="img-responsive svg"/>
    </a>
    <a href="" target="_blank" id="linkedin-icon">
      <img src="<?php echo get_template_directory_uri() . '/dist/icons/linkedin.svg' ?>" class="img-responsive svg"/>
    </a>
  </div>
  <a class="form-prompt" id="form-open">
    <img src="<?php echo get_template_directory_uri() . '/dist/icons/mail.svg' ?>" class="img-responsive svg"/>
    <p class="title">Stay Updated</p>
  </a>
  <a class="share-button" id="facebook-like">
    <img src="<?php echo get_template_directory_uri() . '/dist/icons/like.svg' ?>" class="img-responsive svg"/>
    <p class="title">Like Us On Facebook</p>
  </a>
</div>

<div class="form-cont">
  <div id="form-close" class="alternate hamburger state-closed">
    <span></span>
    <span></span>
    <span></span>
  </div>
  <h3>Like what you are reading?</h3>
  <p>Sign up or follow us for the latest design tips and trends!</p>
  <!-- Begin MailChimp Signup Form -->
  <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
  <style>

  #form-close{
    position: absolute;
    right: 15px;
    top: 15px;
  }

  #mc_embed_signup form {
    padding: 0 0 0 0;
  }

  #mc_embed_signup .mc-field-group{
    min-height: 0;
    padding-bottom: 0;
    width: 100%;
  }

  #mc_embed_signup .mc-field-group input {
    background: none;
    border: none;
    border-bottom: 1px solid white;
    border-radius: 0;
    font-size: 18px;
    padding: 15px 0 7.5px 0;
    text-indent: 0;
  }

  #mc_embed_signup .mc-field-group input:focus {
    outline: none;
  }

  #mc_embed_signup input::-webkit-input-placeholder {
    color: white;
    font-family: Walsheim;
    transition: 0.3s;
  }


  #mc_embed_signup input:focus::-webkit-input-placeholder{
    color: transparent;
  }


  #mc_embed_signup input.button{
    background: white;
    border-radius: 0;
    color: #443cff;
    font-family: Walsheim;
    font-size: 10px;
    font-weight: 600;
    height: auto;
    letter-spacing: 1px;
    margin: 15px 0 0 0;
    line-height: initial;
    padding: 15px 0;
    text-transform: uppercase;
    width: 100%;
  }

  @media(min-width:768){
    #mc_embed_signup input.button{
      margin-top: 30px;
    }
  }

  #mc_embed_signup #mc-embedded-subscribe-form input.mce_inline_error{
    border: 0;
    border-bottom: 1px solid white;
  }

  #mc_embed_signup #mc-embedded-subscribe-form div.mce_inline_error{
    background: #fd9c9e;
    border: 0;
    border-radius: 0;
    color: white;
    font-size: 11px;
    letter-spacing: 1px;
    margin-top: 0;
    padding: 15px 10px;
    text-transform: uppercase;
    width: 100%;
  }

  #mc_embed_signup #mc-embedded-subscribe-form input.mce_inline_error::-webkit-input-placeholder{
    color: #fd9c9e;
  }

  .submit-container{
    position: relative;
  }

  .submit-container .icon-button{
    position: absolute;
    pointer-events: none;
    bottom: 10px;
    width: 100%;
  }

  </style>
  <div id="mc_embed_signup">
    <form action="//pivotandpilot.us11.list-manage.com/subscribe/post?u=7ddaf618b12da96febfea34ac&amp;id=9555b6cad0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
      <div id="mc_embed_signup_scroll">
        <div class="mc-field-group">
          <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="email">
        </div>
        <div class="mc-field-group">
          <input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="name">
        </div>
          <div id="mce-responses" class="clear">
            <div class="response" id="mce-error-response" style="display:none"></div>
            <div class="response" id="mce-success-response" style="display:none"></div>
          </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_7ddaf618b12da96febfea34ac_9555b6cad0" tabindex="-1" value=""></div>
        <div class="submit-container">
          <input type="submit" value="" name="subscribe" id="mc-embedded-subscribe" class="button">
          <a class="icon-button alternate">
            <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/dist/icons/submit.svg' ?>"/>
            <p class="title blue">Submit</p>
          </a>
        </div>
      </div>
    </form>
  </div>

  <h3 class="align-center">or</h3>
  <a class="button icon-button">
    <img class="img-responsive" src="<?php echo get_template_directory_uri() . '/dist/icons/like.svg' ?>"/>
    <p class="title">Follow us on Facebook</p>
  </a>

  <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
  <!--End mc_embed_signup-->
  <div class="form-triangle">
  </div>
</div>

<?php get_footer(); ?>

<script type="text/javascript" async src="https://platform.twitter.com/widgets.js"></script>
<script>
jQuery(document).ready(function($){
  $("#blog-post-content > blockquote").each(function(index) {
    const default_twitter_url = 'https://twitter.com/intent/tweet?url=';
    const current_url = encodeURIComponent(window.location.href);
    var str = $(this).children().first().text();
    str = str.slice(0, 140 - current_url.length) + '%2e%2e%2e';
    str = str.replace(/\s/g, "%20")
    const href_str = default_twitter_url + current_url + "&text=" + str;
    const $link = $('<a>', {href: href_str, class: 'blockquote-tweet'});
    $(this).append($link);
  });

  //Footer 'smart links'. FB, Twitter, LinkedIn.

  $(".social-icons a:nth-of-type(1)").each(function(index) {
    const current_url = encodeURIComponent(window.location.href);
    let facebook_share_link = "https://www.facebook.com/sharer/sharer.php?u=" + current_url;
    $('#fb-icon').attr('href', facebook_share_link);
  });

  $(".social-icons a:nth-of-type(2)").each(function(index) {
    const default_twitter_url = 'https://twitter.com/intent/tweet?url=';
    const current_url = encodeURIComponent(window.location.href);
    var str = "Look at this post!";
    str = str.replace(/\s/g, "%20")
    const href_str = default_twitter_url + current_url + "&text=" + str;
    const $link = $('<a>', {href: href_str, class: 'blockquote-tweet'});
    $('#tweet-icon').attr('href', href_str);
  });

  $(".social-icons a:nth-of-type(3)").each(function(index) {
    const current_url = encodeURIComponent(window.location.href);
    const current_title = $('#blog-post-title').text();
    let linkedin_share_link = 'https://www.linkedin.com/shareArticle?mini=true&url=' + current_url + ' &title=' + current_title;
    $('#linkedin-icon').attr('href', linkedin_share_link);
  })
});
</script>




