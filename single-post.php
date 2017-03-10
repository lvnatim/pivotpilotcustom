<?php $terms = get_the_category($post->ID) ?>

<?php echo get_header(); ?>

<div class="share-bar">
  <div class="share-icon">
      <img src="http://da7yjqciamcnr.cloudfront.net/images/tmd-office/share-icon.png" class="social-media-bar-icon-share">
  </div>
  <div class="social-media-bar">
    <div class="social-icons">
      <a href="http://twitter.com/pivotandpilot" target="_blank"><img src="https://image.flaticon.com/icons/png/512/8/8800.png" class="social-media-bar-icon"></a>
      <a href="http://instagram.com/pivotandpilot" target="_blank"><img src="https://image.flaticon.com/icons/png/512/8/8800.png" class="social-media-bar-icon"></a>
      <a href="https://www.linkedin.com/company/pivot-&-pilot-creative" target="_blank"><img src="https://image.flaticon.com/icons/png/512/8/8800.png" class="social-media-bar-icon"></a>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12">
      <div class="blog-post-container">
        <div class="blog-post">
          <div class="blog-post-categories blog-post-categories-mobile">
            <?php foreach($terms as $term):?>
            <h3 class="blog-post-category"><?php echo $term->name; ?></h3>
            <?php endforeach ?>
          </div>
          <h1 class="blog-post-title"><?php the_title(); ?></h1>
          <p class="blog-post-date"><?php echo the_time('l, F jS, Y') ?></p>
          <img src="<?php echo get_the_post_thumbnail_url($post->ID) ?>">

          <div class="blog-post-categories blog-post-categories-desktop">
            <?php foreach($terms as $term):?>
            <h3 class="blog-post-category"><?php echo $term->name; ?></h3>
            <?php endforeach ?>
          </div>

          <?php echo apply_filters("the_content", $post->post_content) ?>

        </div>
        <div class="related-posts">

          <?php function term_id($term) {
            return $term->ID;
          } ?>

          <?php $term_ids = array_map("term_id", $terms);?>

          <?php $category_name = $terms[0]->name ?>

          <?php $args = array(
            'posts_per_page'   => 4,
            'offset'           => 0,
            'category'     => $term_ids,
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



<!-- Takes in string and turns it into tweet 'intent' link. -->
<?php
  function quoteToTweetString($quoteExcerpt) {
    $cut_string = substr($quoteExcerpt, 0 , 80);
    $fixed_string = str_replace(" ", "%20", $cut_string);
    $tweetIntent = "https://twitter.com/intent/tweet?url=http%3A%2F%2Fpivotandpilot.com&text='" . $fixed_string . "...'";
    echo $tweetIntent;
  }
?>

<!-- <blockquote>
  <a href="<?php /* echo quoteToTweetString("Bistia audae est moluptatur a nimolupta archici offictassi blam incimpe volorem ea quis inihillandis quiberf erumquisquas simpos sequidita ducipienim et aut hiliqui te eicitatur? Qui testo blanis ut eosant rehenisquate volorem nos."); */ ?>"><p>Tweet me!</p></a>
</blockquote> -->

<!--========================================================================-->


          <p>RELATED POSTS</p>
          <div class="blog-post-carousel">
            <div class="blog-post-carousel-post">
              <img src="http://www.fillmurray.com/300/200">
              <h5>This is a Title for a Blog Post</h5>
            </div>
            <?php foreach($posts_array as $post):?>
            <div class="blog-post-carousel-post">
              <img src="<?php echo get_the_post_thumbnail_url($post->ID) ?>">
              <h5><?php echo $post->post_title; ?></h5>
            </div>
          <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>

<script>

jQuery(document).ready(function($){
  // let testText = "Test sentence here I am blah blah blah Test sentence here I am blah blah blah Test sentence here I am blah blah blah Test sentence here I am blah blah blah"


  let testText = $("blockquote").text();
  console.log(testText);
  let cutText = testText.slice(0, 40);

  let fixedString = cutText.replace(/\s/g, "%20");
  console.log(fixedString);

  let tweetIntent = `<div style='height: 100px; width: 100px;'><a href='https://twitter.com/intent/tweet?url=http%3A%2F%2Fpivotandpilot.com&text='text%20text'>Tweet me!</a></div>`

  $("div.responsive-container").before().on("click", function() {
    console.log("I'm clicked once again");
    $("div.responsive-container").addClass("clicked");
  });

  $("div.share-icon").on("click", function() {
    $("div.social-media-bar").slideToggle("slow");
    console.log("I'm clicked, bitch");
  });

  $("blockquote").on("click", function() {
    $("blockquote").append(`<div style='height: 100px; width: 100px;'><a href='https://twitter.com/intent/tweet?url=http%3A%2F%2Fpivotandpilot.com&text='text%20text'>Tweet me!</a></div>`);
  })

  // $("blockquote").load(function() {
  //   $("blockquote").append(`<div style='height: 100px; width: 100px;'><a href='https://twitter.com/intent/tweet?url=http%3A%2F%2Fpivotandpilot.com&text='text%20text'>Tweet me!</a></div>`);
  // })

  $("blockquote").on("click", function() {
    console.log("I'm clicked and I'm a blockquote");
  });

});



</script>
<script type="text/javascript" async src="https://platform.twitter.com/widgets.js"></script>




