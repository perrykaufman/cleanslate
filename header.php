<!DOCTYPE html>
<html>

<head <?php language_attributes(); ?>>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="description" content="<?php bloginfo('description') ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <?php wp_head() ?>
</head>
<body>
  <header class="page-header">
    <div class="header-content page-width">
      <figure class="header-logo">
        <a href="<?php echo home_url() ?>">
          <img src="<?php echo get_template_directory_uri() . '/images/cleanslate-logo.png' ?>" alt="Clean Slate Logo" />
        </a>
      </figure>
      <a id="header-navigation-menu-link" href="javascript:void(0);">
        <span class="header-menu-icon">Menu Icon</span>
        <span id="header-menu-label" class="header-menu-label">Menu</span>
      </a>
      <nav id="header-navigation-menu" class="header-navigation navigation-list">
        <?php wp_nav_menu(array(
          'theme_location' => 'header_menu',
          'container' => ''
          )); ?>
      </nav>
    </div>
  </header>