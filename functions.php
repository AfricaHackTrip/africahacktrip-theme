<?php
    
function africahacktrip_customize_register($wp_customize){
    
    $wp_customize->add_section('africahacktrip_logo_section', array(
            'title'    => __('Logo', 'africahacktrip'),
            'priority' => 120,
            'description' => 'Upload a logo to replace the default site name and description in the header',
        ));
    
    //  =============================
    //  = Image Upload              =
    //  =============================
    $wp_customize->add_setting('africahacktrip_logo');
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'africahacktrip_logo', array(
        'label'    => __('Logo', 'africahacktrip'),
        'section'  => 'africahacktrip_logo_section',
        'settings' => 'africahacktrip_logo',
    )));
}
 
add_action('customize_register', 'africahacktrip_customize_register');

