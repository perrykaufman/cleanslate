<?php
  function init_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('index', get_template_directory_uri() . '/styles/index.css');
    wp_enqueue_script('index', get_template_directory_uri() . '/scripts/index.js');
  }
  add_action('wp_enqueue_scripts', 'init_resources');

  function init_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    add_image_size('preview-image', 600, 400, true);
    add_image_size('page-image', 900, 400, true);

    register_nav_menus(array('header_menu'=>'Header Menu', 'sidebar_menu'=>'Sidebar Menu'));
  }
  add_action('after_setup_theme','init_theme_support');

  function init_widgets() {
    register_sidebar(array(
      'name'=>__('Sidebar Widget 1'),
      'id'=>'sidebar1',
      'description'=>__('Widget above sidebar menu.'),
      'before_widget'=>'',
      'after_widget'=>'',
      'before_title'=>'<h3>',
      'after_title'=>'</h3>',
    ));

    register_sidebar(array(
      'name'=>__('Sidebar Widget 2'),
      'id'=>'sidebar2',
      'description'=>__('Widget below sidebar menu.'),
      'before_widget'=>'',
      'after_widget'=>'',
      'before_title'=>'<h3>',
      'after_title'=>'</h3>',
    ));

    register_sidebar(array(
      'name'=>__('Footer Widget 1'),
      'id'=>'footer1',
      'description'=>__('First widget in footer.'),
      'before_widget'=>'',
      'after_widget'=>'',
      'before_title'=>'<h3>',
      'after_title'=>'</h3>',
    ));

    register_sidebar(array(
      'name'=>__('Footer Widget 2'),
      'id'=>'footer2',
      'description'=>__('Second Widget in footer.'),
      'before_widget'=>'',
      'after_widget'=>'',
      'before_title'=>'<h3>',
      'after_title'=>'</h3>',
    ));

    register_sidebar(array(
      'name'=>__('Footer Widget 3'),
      'id'=>'footer3',
      'description'=>__('Third widget in footer'),
      'before_widget'=>'',
      'after_widget'=>'',
      'before_title'=>'<h3>',
      'after_title'=>'</h3>',
    ));
  }
  add_action('widgets_init','init_widgets');

  function new_excerpt_more($more) {
    return '...';
  }
  add_filter('excerpt_more', 'new_excerpt_more');
?>
