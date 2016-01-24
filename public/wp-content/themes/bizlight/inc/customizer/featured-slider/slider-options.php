<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-fs-enable-control'] = 1;
$bizlight_customizer_defaults['bizlight-fs-enable-autoplay'] = 1;

/*fs options*/
$bizlight_sections['bizlight-fs-slider-options'] =
    array(
        'priority'       => 80,
        'title'          => __( 'Slider Options', 'bizlight' ),
        'panel'          => 'bizlight-featured-slider',
    );

$bizlight_settings_controls['bizlight-fs-enable-control'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-fs-enable-control']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Control', 'bizlight' ),
            'section'               => 'bizlight-fs-slider-options',
            'type'                  => 'checkbox',
            'priority'              => 50,
            'active_callback'       => ''
        )
    );

$bizlight_settings_controls['bizlight-fs-enable-autoplay'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-fs-enable-autoplay']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Autoplay', 'bizlight' ),
            'section'               => 'bizlight-fs-slider-options',
            'type'                  => 'checkbox',
            'priority'              => 60,
            'active_callback'       => ''
        )
    );