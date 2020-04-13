<?php

//  Setup

//  Includes
include_once(get_template_directory() . '/includes/front/enqueue.php');


//  Hooks
add_action('wp_enqueue_scripts', 'wu_enqueue');

//  Shortcodes
