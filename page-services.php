<?php get_header(); ?>
<div id="filter-section" class="container-fluid">
  <div class="row">
    <div class="col-xs-12">
      <div id="filter-menu-container" data-selected-filter="services">
        <ul class="filter-menu">
          <li class="filter-menu-button title blue active" data-filter="services">Services</li>
          <li class="filter-menu-button title blue" data-filter="industries">Industries</li>
        </ul>
        <div class="filter-submenu-container" data-filter="services">
          <ul class="filter-submenu">
            <?php $terms = get_terms('services', array('hide_empty'=>false)); ?>
            <li class="filter-submenu-button active" data-term-id="0">Show All</li>
            <?php foreach($terms as $term): ?>
            <li class="filter-submenu-button" data-filter-name="services" data-term-id="<?php echo $term->term_id ?>"><?php echo $term->name ?></li>
            <?php endforeach ?>
          </ul>
        </div>
        <div class="filter-submenu-container" data-filter="industries">
          <ul class="filter-submenu">
            <?php $terms = get_terms('industries', array('hide_empty'=>false)); ?>
            <li class="filter-submenu-button" data-term-id="0">Show All</li>
            <?php foreach($terms as $term): ?>
            <li class="filter-submenu-button" data-filter-name="industries"  data-term-id="<?php echo $term->term_id ?>"><?php echo $term->name ?></li>
            <?php endforeach ?>
          </ul>
        </div>
        <div id="filter-description">Click/hover on any of the terms to change the description and filter the posts.</div>
        <div id="filter-posts-container" class="row">
        <?php get_template_part('partials/filter', 'filter'); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>