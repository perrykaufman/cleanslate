<?php get_header() ?>
<div class="page-body page-width">
<?php get_sidebar() ?>
  <main class="page-content">
    <h1><?php the_title(); ?></h1>
    <?php $args = array(
      'post_type'=>'post',
      'post_status'=>'publish',
      'category_name'=>'stories',
      'posts_per_page'=>-1);
    $query = new WP_Query($args);
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
      get_template_part('preview');
    endwhile; else:?>
    <h3 class="message">No stories have been posted yet.</h3>
    <?php endif; ?>
  </main>
</div>
<?php get_footer()?>