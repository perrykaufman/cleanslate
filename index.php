<?php get_header() ?>
<div class="page-body page-width">
<?php get_sidebar() ?>
  <main class="page-content">
    <h1><?php the_title(); ?></h1>
    <?php while (have_posts()) : the_post(); ?>
    <article class="content-preview-post">
      
    <?php if(has_post_thumbnail()): ?>
      <figure class="preview-post-image">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('preview-image'); ?>
        </a>
      </figure>
      <?php endif; ?>
      <section class="preview-post-text">
      <h2>
        <a href="javascript:void(0);"><?php the_title(); ?></a>
        </h2>
        <p>
          <?php echo get_the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>">Read&nbsp;more&nbsp;&raquo;</a>
        </p>
      </section>
    </article>
    <?php endwhile; ?>
  </main>
</div>
<?php get_footer()?>