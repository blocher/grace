<?php
global $bizlight_panels;
global $bizlight_sections;
global $bizlight_settings_controls;
global $bizlight_repeated_settings_controls;
global $bizlight_customizer_defaults;

/*defaults values*/
$bizlight_customizer_defaults['bizlight-fs-enable'] = 1;

/*fs setting*/
$bizlight_sections['bizlight-fs-enable-setting'] =
    array(
        'priority'       => 10,
        'title'          => __( 'Slider Enable Options', 'bizlight' ),
        'panel'          => 'bizlight-featured-slider',
    );

$bizlight_settings_controls['bizlight-fs-enable'] =
    array(
        'setting' =>     array(
            'default'              => $bizlight_customizer_defaults['bizlight-fs-enable']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Slider On', 'bizlight' ),
            'section'               => 'bizlight-fs-enable-setting',
            'type'                  => 'checkbox',
            'priority'              => 50,
            'active_callback'       => ''
        )
    );