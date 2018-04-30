<?php
  function init_resources() {
    wp_enqueue_style('index', get_template_directory_uri() . '/styles/index.css');
    wp_enqueue_script('index', get_template_directory_uri() . '/scripts/index.js');

    //Enqueue Woocommerce style overrides if Woocommerce plugin is activated.
    if (class_exists('woocommerce')) {
      wp_enqueue_style('woocommerce-override', get_template_directory_uri() . '/styles/woocommerce-override.css');
    }
  }
  //Register styles and scripts.
  add_action('wp_enqueue_scripts', 'init_resources');

  function init_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    //Image sizes
    add_image_size('preview-image', 600, 400, true);
    add_image_size('page-image', 900, 400, true);
    add_image_size('product-image', 600, 400, true);

    //Navigation menu locations
    register_nav_menus(array(
      'header_menu'=>'Header Menu',
      'sidebar_menu'=>'Sidebar Menu'));
  }
  //Add support for title tag, thumbnail images, and navigation menus.
  add_action('after_setup_theme','init_theme_support');
  
  function add_woocommerce_support() {
    add_theme_support('woocommerce');
  }
  //Add support for Woocommerce.
  add_action( 'after_setup_theme', 'add_woocommerce_support' );

  function init_widgets() {
    //Sidebar Widget Area Top
    register_sidebar(array(
      'name'=>__('Sidebar Area Top'),
      'id'=>'sidebar1',
      'description'=>__('Widget area above sidebar menu.'),
      'before_widget'=>'',
      'after_widget'=>'',
      'before_title'=>'<h3>',
      'after_title'=>'</h3>',
    ));

    //Sidebar Widget Area Bottom
    register_sidebar(array(
      'name'=>__('Sidebar Area Bottom'),
      'id'=>'sidebar2',
      'description'=>__('Widget area below sidebar menu.'),
      'before_widget'=>'',
      'after_widget'=>'',
      'before_title'=>'<h3>',
      'after_title'=>'</h3>',
    ));

    //Footer Widget Area 1
    register_sidebar(array(
      'name'=>__('Footer Area 1'),
      'id'=>'footer1',
      'description'=>__('First widget area in footer.'),
      'before_widget'=>'',
      'after_widget'=>'',
      'before_title'=>'<h3>',
      'after_title'=>'</h3>',
    ));

    //Footer Widget Area 2
    register_sidebar(array(
      'name'=>__('Footer Area 2'),
      'id'=>'footer2',
      'description'=>__('Second widget area in footer.'),
      'before_widget'=>'',
      'after_widget'=>'',
      'before_title'=>'<h3>',
      'after_title'=>'</h3>',
    ));

    //Footer Widget Area 3
    register_sidebar(array(
      'name'=>__('Footer Area 3'),
      'id'=>'footer3',
      'description'=>__('Third widget area in footer'),
      'before_widget'=>'',
      'after_widget'=>'',
      'before_title'=>'<h3>',
      'after_title'=>'</h3>',
    ));

    //Footer Bottom Area
    register_sidebar(array(
      'name'=>__('Footer Bottom Area'),
      'id'=>'footer-bottom',
      'description'=>__('Widget area at the bottom of the footer for copyright text, etc.'),
      'before_widget'=>'',
      'after_widget'=>'',
      'before_title'=>'<h3 style="display:none">',
      'after_title'=>'</h3>',
    ));
  }
  //Register widget locations.
  add_action('widgets_init','init_widgets');

  function new_excerpt_more($more) {
    return '...';
  }
  //Override ellipsis for post excerpts.
  add_filter('excerpt_more', 'new_excerpt_more');

  function add_menu_item_link_class($atts, $item, $args) {
    $atts['class'] = 'menu-item-link';
    return $atts;
  }
  //Add a class of "menu-item-link" to links in Wordpress menus.
  add_filter('nav_menu_link_attributes','add_menu_item_link_class', 10, 3);
?>
