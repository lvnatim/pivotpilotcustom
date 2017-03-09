<?php get_header(); ?>

<section class="first-section">
  <img class="img-responsive" src="<?php the_field('slider_image_one') ?>"/>
  <h1>We like to call ourselves visual communicators ... it sounds fancy</h1>
  <p><?php echo $post->post_content; ?><p>
</section>


<!-- <div id="section-about" class="container-fluid">
  <div class="row">
    <div class="col-xs-12">
      <div class="about-landing">
        <h1 class="about-excerpt">We like to call ourselves visual communicators ... it sounds fancy</h1>
        <div class="about-slider-container">
          <div id="about-slider-image-container" data-current-slider="0">
            <img class="img-responsive about-slider-image" src="<?php the_field('slider_image_one') ?>"/>
            <img class="img-responsive about-slider-image" src="<?php the_field('slider_image_two') ?>"/>
            <img class="img-responsive about-slider-image" src="<?php the_field('slider_image_three') ?>"/>
            <div class="about-slider-dots-container">
              <div data-index="0" class="dot active"></div>
              <div data-index="1" class="dot"></div>
              <div data-index="2" class="dot"></div>
            </div>
          </div>
          <div class="about-slider-text"><p><?php echo $post->post_content; ?><p></div>
        </div>
      </div>


      <div id="about-team-container">
        <div class="about-team-members-container">
          <?php $team_members = get_posts(array('post_type' => 'members','numberposts' => -1));?>
          <?php foreach($team_members as $team_member): ?>
          <div class="about-team-member">
            <img class="img-responsive about-team-member-fact" src="<?php echo get_template_directory_uri() . '/dist/img/fact.svg' ?>"/> 
            <img class="img-responsive about-team-member-icon" src="<?php the_field('team_member_icon', $team_member) ?>" />
            <div class="about-team-member-portrait">
              <div class="about-team-member-overlay">
                <div class="overlay-color"></div>
                <h4><?php the_field('team_member_first_name', $team_member) ?> loves <?php the_field('team_member_icon_name', $team_member) ?></h4>
              </div>
              <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($team_member) ?>"/>
            </div>
            <div class="about-team-member-meta">
              <h3><?php the_field('team_member_first_name', $team_member) ?></h3>
              <h3><?php the_field('team_member_last_name', $team_member) ?></h3>
              <p class="title"><?php the_field('team_member_title_one', $team_member) ?></p>
              <p class="title"><?php the_field('team_member_title_two', $team_member) ?></p>
            </div>
          </div>
          <?php endforeach ?>
        </div>
        <div class="about-team-navigation">
          <img id="about-left" class="img-responsive" src="<?php echo get_template_directory_uri() . '/dist/img/member_scroll_left.svg' ?>"/>
          <img id="about-portrait" class="img-responsive" src="<?php echo get_template_directory_uri() . '/dist/img/member.svg' ?>"/>
          <img id="about-right" class="img-responsive" src="<?php echo get_template_directory_uri() . '/dist/img/member_scroll_right.svg' ?>"/>
        </div>
      </div>
    </div>
  </div>
</div> -->

<?php get_footer(); ?>