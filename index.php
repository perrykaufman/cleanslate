<?php get_header() ?>
<div class="page-body page-width">
<?php get_sidebar() ?>
  <main class="page-content">
    <h1>
      <?php if (is_front_page()) echo bloginfo('title');
      else echo get_the_title( get_option('page_for_posts', true) ); ?>
    </h1>
    <?php if (have_posts()) : while (have_posts()) : the_post();
      get_template_part('preview');
    endwhile; else : ?>
    <h3 class="message">No posts found.</h3>
    <?php endif; ?>
  </main>
</div>
<?php get_footer()?>