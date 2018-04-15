<aside class="page-sidebar">
  <?php //Sidebar Widget Area Top
  if (is_active_sidebar('sidebar1')): ?>
  <section class="sidebar-section">
    <?php dynamic_sidebar('sidebar1'); ?>
  </section>
  <?php endif; ?>
  <?php //Sidebar Navigation Menu
  if (has_nav_menu('sidebar_menu')): ?>
  <nav class="sidebar-navigation navigation-list">
    <?php wp_nav_menu(array(
      'theme_location'=>'sidebar_menu',
      'container' => ''
      )); ?>
  </nav>
  <?php endif; ?>
  <?php //Sidebar Widget Area Bottom
  if (is_active_sidebar('sidebar2')): ?>
  <section class="sidebar-section">
    <?php dynamic_sidebar('sidebar2'); ?>
  </section>
  <?php endif; ?>
</aside>