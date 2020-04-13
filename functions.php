<?php

//  Setup

//  Includes
include_once(get_template_directory() . '/includes/front/enqueue.php');
include_once(get_template_directory() . '/includes/setup.php');


//  Hooks
add_action('wp_enqueue_scripts', 'wu_enqueue');
add_action('after_setup_theme', 'wu_setup_theme');

//  Shortcodes
