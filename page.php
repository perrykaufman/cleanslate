<?php get_header() ?>
<div class="page-body page-width">
<?php get_sidebar() ?>
  <main class="page-content">
    <article>
      <?php if(has_post_thumbnail()): ?>
      <figure class="content-featured-image">
        <?php the_post_thumbnail('page-image'); ?>
      </figure>
      <?php endif; ?>
      <?php if (!is_front_page()): ?>
      <h1><?php the_title(); ?></h1>
      <?php endif; ?>
      <?php while (have_posts()) : the_post();
      the_content();
      endwhile; ?>
    </article>
  </main>
</div>
<?php get_footer()?>