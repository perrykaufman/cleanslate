<?php get_header() ?>
<div class="page-body page-width">
<?php get_sidebar() ?>
  <main class="page-content">
    <div class="content-search-form">
      <?php get_search_form(); ?>
    </div>
    <h1><?php the_title(); ?></h1>
    <?php $args = array(
      'post_type'=>'post',
      'post_status'=>'publish',
      'category_name'=>'products',
      'posts_per_page'=>get_option('posts_per_page'),
      'paged'=> get_query_var('paged'));
    $query = new WP_Query($args);
    if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
      get_template_part('preview');
    endwhile; ?>
    <span class="page-links">
      <?php echo paginate_links(array(
        'total'=>$query->max_num_pages
      )); ?>
    </span>
    <?php else :?>
    <h3 class="message">No products have been posted yet.</h3>
    <?php endif; ?>
  </main>
</div>
<?php get_footer()?>