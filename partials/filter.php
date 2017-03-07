<?php
$args = array();
$term_id = $_REQUEST['term_id'];
$taxonomy = $_REQUEST['taxonomy'];

if($_GET['id']){
  $term_id = $_GET['id'];
  $taxonomy = 'services';
}

if($term_id){
$args = array(
    array(
    'taxonomy' => $taxonomy,
    'field' => 'id',
    'terms' => $term_id,
    'include_children' => false
  )
);
}

$filtered_posts = get_posts(
  array(
  'post_type' => 'clients',
  'numberposts' => -1,
  'tax_query' => $args
  )
);
?>

<?php foreach($filtered_posts as $post): ?>
  <div class="col-xs-12 col-sm-6">
    <div class="client-container">
      <a href="<?php echo get_permalink($post); ?>" class="client-overlay">
        <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($post->ID)?>">
        <h1 class="client-excerpt"><?php echo $post->post_excerpt ?></h1>
        <ul class="client-terms">
          <?php $terms = get_the_terms($post, 'services') ?>
          <?php foreach($terms as $term): ?>
          <li><?php echo $term->name ?></li>
          <?php endforeach ?>
        </ul>
      </a>
    </div>
  </div>
<?php endforeach ?>