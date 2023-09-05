<?php

// ACF functions here

// Options Page
if (function_exists('acf_add_options_page')) {

    acf_add_options_page();
}



// Create ACF Blocks
function register_acf_block_types()
{
    // CCS - Hero Block
    acf_register_block_type(array(
        'name'              => 'universal-hero',
        'title'             => __('Universal Hero'),
        'description'       => __('universal background hero with optional CTA'),
        'mode'                => 'preview',
        'render_template'   => 'templates\acf-blocks\universal-use\hero.php',
        'category'          => 'layout',
        'icon'              => 'welcome-widgets-menus',
        'keywords'          => array('Component')
    ));

    // CCS - About Block
    acf_register_block_type(array(
        'name'              => 'about-block',
        'title'             => __('About Block'),
        'description'       => __('Title, Content, CTA - all centered'),
        'mode'              => 'preview',
        'render_template'   => 'templates\acf-blocks\universal-use\about-block.php',
        'category'          => 'layout',
        'icon'              => 'welcome-widgets-menus',
        'keywords'          => array('Component')
    ));

    // CCS - Main Content Block
    acf_register_block_type(array(
        'name'              => 'main-content',
        'title'             => __('Main Content Block'),
        'description'       => __('2 Column Swap - Image, Text, CTA, Popup'),
        'mode'              => 'preview',
        'render_template'   => 'templates\acf-blocks\universal-use\main-content-block.php',
        'category'          => 'layout',
        'icon'              => 'welcome-widgets-menus',
        'keywords'          => array('Component')
    ));

    // CCS - Grid Card Block
    acf_register_block_type(array(
        'name'              => 'services-grid-card',
        'title'             => __('Services Grid Card Block'),
        'description'       => __('Services Grid Card'),
        'mode'              => 'preview',
        'render_template'   => 'templates\acf-blocks\universal-use\services-grid-card-block.php',
        'category'          => 'layout',
        'icon'              => 'welcome-widgets-menus',
        'keywords'          => array('Component')
    ));

    // CCS - Location Map Block
    acf_register_block_type(array(
        'name'              => 'location-map-block',
        'title'             => __('Location Map Block'),
        'description'       => __('Address, Hours, Google Map Iframe'),
        'mode'              => 'preview',
        'render_template'   => 'templates\acf-blocks\universal-use\location-map-block.php',
        'category'          => 'layout',
        'icon'              => 'welcome-widgets-menus',
        'keywords'          => array('Component')
    ));

    // CCS - Logo Grid Block
    acf_register_block_type(array(
        'name'              => 'logo-grid-block',
        'title'             => __('Logo Grid Block'),
        'description'       => __('Logos Grid'),
        'mode'              => 'preview',
        'render_template'   => 'templates\acf-blocks\universal-use\logo-grid-block.php',
        'category'          => 'layout',
        'icon'              => 'welcome-widgets-menus',
        'keywords'          => array('Component')
    ));

    // CCS - Areas We Serve Block
    acf_register_block_type(array(
        'name'              => 'areas-we-serve-block',
        'title'             => __('Areas We Serve Block'),
        'description'       => __('Areas We Serve'),
        'mode'              => 'preview',
        'render_template'   => 'templates\acf-blocks\universal-use\areas-we-serve-block.php',
        'category'          => 'layout',
        'icon'              => 'welcome-widgets-menus',
        'keywords'          => array('Component')
    ));
}

// Check if function exists and hook into setup.
if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'register_acf_block_types');
}
