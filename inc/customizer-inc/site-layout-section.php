<?php
/*adding sections for category selection for promo section in homepage*/
$wp_customize->add_section( 'bloge-site-layout', array(
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'title'          => __( 'Blog Options', 'bloge' )
) );

/* feature cat selection */
$wp_customize->add_setting( 'bloge_theme_options[bloge-layout]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['bloge-layout'],
    'sanitize_callback' => 'bloge_sanitize_select'
) );

$choices = bloge_sidebar_layout();
$wp_customize->add_control('bloge_theme_options[bloge-layout]',
            array(
            'choices'   => $choices,
            'label'		=> __( 'Select Sidebar Layout', 'bloge'),
            'section'   => 'bloge-site-layout',
            'settings'  => 'bloge_theme_options[bloge-layout]',
            'type'	  	=> 'select',
            'priority'  => 10
         )
    );

/* Read More Option */
$wp_customize->add_setting( 'bloge_theme_options[bloge-read-more-text]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['bloge-read-more-text'],
    'sanitize_callback' => 'sanitize_text_field'
) );

$wp_customize->add_control('bloge_theme_options[bloge-read-more-text]',
            array(
            'label'		=> __( 'Read More Text', 'bloge'),
            'description' => __('Continue Reading >> default text change section', 'bloge'),
            'section'   => 'bloge-site-layout',
            'settings'  => 'bloge_theme_options[bloge-read-more-text]',
            'type'	  	=> 'text',
            'priority'  => 10
         )
    );

/* Filter category in blog post */
$wp_customize->add_setting( 'bloge_theme_options[bloge-exclude-slider-category]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['bloge-exclude-slider-category'],
    'sanitize_callback' => 'sanitize_text_field'
) );

$wp_customize->add_control('bloge_theme_options[bloge-exclude-slider-category]',
            array(
            'label'		=> __( 'Exclude Category in Slider', 'bloge'),
            'description' => __('Exclude category by Id. Example, 1, 25, 35', 'bloge'),
            'section'   => 'bloge-site-layout',
            'settings'  => 'bloge_theme_options[bloge-exclude-slider-category]',
            'type'	  	=> 'text',
            'priority'  => 10
));

/* Pagination Options */
$choices = bloge_pagination_option();
$wp_customize->add_setting( 'bloge_theme_options[bloge-blog-pagination-type-options]', array(
    'capability'        => 'edit_theme_options',
    'default'           => $defaults['bloge-blog-pagination-type-options'],
    'sanitize_callback' => 'bloge_sanitize_select'
) );

$wp_customize->add_control('bloge_theme_options[bloge-blog-pagination-type-options]',
            array(
            'choices'   => $choices,
            'label'     => __( 'Pagination Type', 'bloge'),
            'description' => __('Select Pagination Type From Below', 'bloge'),
            'section'   => 'bloge-site-layout',
            'settings'  => 'bloge_theme_options[bloge-blog-pagination-type-options]',
            'type'      => 'select',
            'priority'  => 10
         )
    );

/* Sticky Sidebar Options */
$wp_customize->add_setting( 'bloge_theme_options[bloge-sticky-sidebar-options]', array(
    'capability'        => 'edit_theme_options',
    'default'           => $defaults['bloge-sticky-sidebar-options'],
    'sanitize_callback' => 'bloge_sanitize_checkbox'
) );

$wp_customize->add_control('bloge-sticky-sidebar-options',
            array(
            'label'     => __( 'Sidebar Options', 'bloge'),
            'description' => __('Unchecked and Save & Publish to Save the changes', 'bloge'),
            'section'   => 'bloge-site-layout',
            'settings'  => 'bloge_theme_options[bloge-sticky-sidebar-options]',
            'type'      => 'checkbox',
            'priority'  => 10
         )
);


/* Meta Options */
$wp_customize->add_setting( 'bloge_theme_options[bloge-meta-options]', array(
    'capability'        => 'edit_theme_options',
    'default'           => $defaults['bloge-meta-options'],
    'sanitize_callback' => 'bloge_sanitize_checkbox'
) );

$wp_customize->add_control('bloge-meta-options',
            array(
            'label'     => __( 'Meta Options', 'bloge'),
            'description' => __('Hide Posted Date From Blog Page', 'bloge'),
            'section'   => 'bloge-site-layout',
            'settings'  => 'bloge_theme_options[bloge-meta-options]',
            'type'      => 'checkbox',
            'priority'  => 10
         )
);


