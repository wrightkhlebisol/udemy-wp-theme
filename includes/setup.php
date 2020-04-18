<?php

function wu_setup_theme()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');

    register_nav_menu('primary', __('Primary menu', 'udemy'));
    register_nav_menu('secondary', __('Secondary menu', 'udemy'));

    if (function_exists('quads_register_ad')) {
        quads_register_ad(array('location' => 'udemy_header', 'description' => 'Udemy Header position'));
    }
}
