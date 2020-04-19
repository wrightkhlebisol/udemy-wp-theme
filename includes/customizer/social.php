<?php

function wu_social_customizer_section($wp_customize)
{
    $wp_customize->add_setting('wu_facebook_handle', [
        'default'       =>  ''
    ]);

    $wp_customize->add_setting('wu_twitter_handle', [
        'default'       =>  ''
    ]);

    $wp_customize->add_setting('wu_instagram_handle', [
        'default'       =>  ''
    ]);

    $wp_customize->add_setting('wu_phone_number', [
        'default'       =>  ''
    ]);

    $wp_customize->add_setting('wu_mail_address', [
        'default'       =>  ''
    ]);

    $wp_customize->add_section('wu_social_section', [
        'title'     =>  __('Udemy Social Settings', 'udemy'),
        'priority'  =>  30
    ]);

    $wp_customize->add_control(
        new WP_Customize_Control($wp_customize, 'wu_social_facebook_input', [
            'label'     =>      __('Facebook Handle', 'udemy'),
            'section'   =>      'wu_social_section',
            'settings'  =>      'wu_facebook_handle'
        ])
    );

    $wp_customize->add_control(
        new WP_Customize_Control($wp_customize, 'wu_social_twitter_input', [
            'label'     =>      __('Twitter Handle', 'udemy'),
            'section'   =>      'wu_social_section',
            'settings'  =>      'wu_twitter_handle'
        ])
    );

    $wp_customize->add_control(
        new WP_Customize_Control($wp_customize, 'wu_social_instagram_input', [
            'label'     =>      __('Instagram Handle', 'udemy'),
            'section'   =>      'wu_social_section',
            'settings'  =>      'wu_instagram_handle'
        ])
    );

    $wp_customize->add_control(
        new WP_Customize_Control($wp_customize, 'wu_social_phone_input', [
            'label'     =>      __('Phone Number', 'udemy'),
            'section'   =>      'wu_social_section',
            'settings'  =>      'wu_phone_number'
        ])
    );

    $wp_customize->add_control(
        new WP_Customize_Control($wp_customize, 'wu_social_mail_input', [
            'label'     =>      __('Mail Address', 'udemy'),
            'section'   =>      'wu_social_section',
            'settings'  =>      'wu_mail_address'
        ])
    );
}
