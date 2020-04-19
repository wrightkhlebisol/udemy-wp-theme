<?php

//  Setup

//  Includes
include_once(get_template_directory() . '/includes/front/enqueue.php');
include_once(get_template_directory() . '/includes/setup.php');
include_once(get_template_directory() . '/includes/widgets.php');
include_once(get_template_directory() . '/includes/customizer/social.php');
include_once(get_template_directory() . '/includes/customizer/misc.php');
include_once(get_template_directory() . '/includes/theme-customizer.php');

//  Hooks
add_action('wp_enqueue_scripts', 'wu_enqueue');
add_action('after_setup_theme', 'wu_setup_theme');
add_action('widgets_init', 'wu_widgets');
add_action('customize_register', 'wu_customize_register');

//  Shortcodes
