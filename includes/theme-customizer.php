<?php

function wu_customize_register($wp_customize)
{
    $wp_customize->add_panel('udemy', [
        'title'         =>  __('Udemy', 'udemy'),
        'description'   =>  '<p>Udemy Theme Settings</p>',
        'priority'      =>  160
    ]);

    wu_social_customizer_section($wp_customize);
    wu_misc_customizer_section($wp_customize);

    echo '<pre>';
    var_dump($wp_customize);
    echo '</pre>';
}
