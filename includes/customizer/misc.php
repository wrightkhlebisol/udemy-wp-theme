<?php

function wu_misc_customizer_section($wp_customize)
{
    // Register customizer section in the database
    $wp_customize->add_setting('wu_header_show_search', [
        'default'       =>  'yes'
    ]);

    $wp_customize->add_setting('wu_header_show_cart', [
        'default'       =>  'yes'
    ]);

    $wp_customize->add_setting('wu_footer_copyright_text', [
        'default'       =>  'Copyright $copy; ' . date('Y') . '. All Rights Reserved by Wrights Inc.'
    ]);

    $wp_customize->add_setting('wu_footer_tos_page', [
        'default'       =>  0
    ]);

    $wp_customize->add_setting('wu_footer_privacy_page', [
        'default'       =>  0
    ]);

    // Register the customizer section in the theme
    $wp_customize->add_section('wu_misc_section', [
        'title'         =>  __('Udemy Misc Settings', 'udemy'),
        'priority'      =>  30,
    ]);

    // Add Fields(controls) to the customizer section in the theme
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'wu_header_show_search_input',
        [
            'label'         =>  __('Show Search Button in Header', 'udemy'),
            'section'       =>  'wu_misc_section',
            'settings'      =>  'wu_header_show_search',
            'type'          =>  'checkbox',
            'choices'       =>  [
                'yes'       =>  __('Yes', 'udemy')
            ]
        ]
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'wu_header_show_cart_section',
        [
            'label'         =>  __('Show Cart Button in Header', 'udemy'),
            'section'       =>  'wu_misc_section',
            'settings'      =>  'wu_header_show_cart',
            'type'          =>  'checkbox',
            'choices'       =>  [
                'yes'       =>  __('Yes', 'udemy')
            ]
        ]
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'wu_footer_copyright_text_section',
        [
            'label'         =>  __('Copyright Text', 'udemy'),
            'section'       =>  'wu_misc_section',
            'settings'      =>  'wu_footer_copyright_text',
            'type'          =>  'text'
        ]
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'wu_footer_tos_page_section',
        [
            'label'         =>  __('Show Terms of Use in footer', 'udemy'),
            'section'       =>  'wu_misc_section',
            'settings'      =>  'wu_footer_tos_page',
            'type'          =>  'checkbox',
            'choices'       =>  [
                1       =>  __('Yes', 'udemy')
            ]
        ]
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'wu_footer_privacy_page_section',
        [
            'label'         =>  __('Show Privacy Page in footer', 'udemy'),
            'section'       =>  'wu_misc_section',
            'settings'      =>  'wu_footer_privacy_page',
            'type'          =>  'checkbox',
            'choices'       =>  [
                1       =>  __('Yes', 'udemy')
            ]
        ]
    ));
}
