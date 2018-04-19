<footer class="page-footer">
  <div class="footer-content page-width">
    <?php //Footer Widget 1 
    if (is_active_sidebar('footer1')): ?>
    <section class="footer-section">
      <?php dynamic_sidebar('footer1'); ?>
    </section>
    <?php endif; ?>
    <?php //Footer Widget 2
    if (is_active_sidebar('footer2')): ?>
    <section class="footer-section">
      <?php dynamic_sidebar('footer2'); ?>
    </section>
    <?php endif; ?>
    <?php //Footer Widget 3
    if (is_active_sidebar('footer3')): ?>
    <section class="footer-section">
      <?php dynamic_sidebar('footer3'); ?>
    </section>
    <?php endif; ?>
    <?php //Footer Bottom ?>
    <section class="footer-bottom">
      <?php if (is_active_sidebar('footer-bottom')):
      dynamic_sidebar('footer-bottom');
      endif; ?>
      <p class="footer-bottom-text">Theme by Perry Kaufman</p>
    </section>
    <?php ?>
  </div>
  <?php wp_footer() ?>
</footer>
</body>
</html>