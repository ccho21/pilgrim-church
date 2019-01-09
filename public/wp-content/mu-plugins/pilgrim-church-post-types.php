<?php
function pilgrim_church_post_types()
{
    // Pastor Post Type
    register_post_type('pastor', array(
        'supports' => array(
            'title', 'editor', 'thumbnail'),
        'public' => true,
        'labels' => array(
            'name' => 'Pastors',
            'add_new_item' => 'Add New Pastor',
            'edit_item' => 'Edit Pastor',
            'all_items' => 'All Pastors',
            'singular_name' => 'Pastor'
        ),
        'menu_icon' => 'dashicons-welcome-learn-more'
    ));

    //Location Post type
    register_post_type('location', array(
//        'capability_type' => 'location',
        'map_meta_cap' => true,
        'supports' => array(
            'title', 'editor', 'excerpt'),
        'rewrite' => array(
            'slug' => 'locations'
        ),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Locations',
            'add_new_item' => 'Add New Location',
            'edit_item' => 'Edit Location',
            'all_items' => 'All Locations',
            'singular_name' => 'Location'
        ),
        'menu_icon' => 'dashicons-location-alt'
    ));

    //Event Post type
    register_post_type('event', array(
//        'capability_type' => 'event',
        'show_in_rest' => true,
        'map_meta_cap' => true,
        'supports' => array(
            'title', 'editor', 'excerpt', 'thumbnail'),
        'rewrite' => array(
            'slug' => 'events'
        ),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar'
    ));

    // Series Series Post Type
    register_post_type('series', array(
        'supports' => array(
            'title', 'thumbnail'),
        'rewrite' => array(
            'slug' => 'series'
        ),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Series',
            'add_new_item' => 'Add New Series',
            'edit_item' => 'Edit Series',
            'all_items' => 'All Series',
            'singular_name' => 'Series'
        ),
        'menu_icon' => 'dashicons-awards'
    ));

    //Sermon Post type
    register_post_type('sermon', array(
        //'capability_type' => 'sermon',
        'map_meta_cap' => true,
        'supports' => array(
            'title', 'editor', 'excerpt', 'thumbnail'),
        'rewrite' => array(
            'slug' => 'sermons'
        ),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Sermons',
            'add_new_item' => 'Add New Sermon',
            'edit_item' => 'Edit Sermon',
            'all_items' => 'All Sermons',
            'singular_name' => 'Sermon'
        ),
        'menu_icon' => 'dashicons-video-alt3'
    ));

    //Gallery Post type
    register_post_type('gallery', array(
        //'capability_type' => 'gallery',
        'map_meta_cap' => true,
        'supports' => array(
            'title', 'editor'),
        'rewrite' => array(
            'slug' => 'galleries'
        ),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Galleries',
            'add_new_item' => 'Add New Gallery',
            'edit_item' => 'Edit Gallery',
            'all_items' => 'All Galleries',
            'singular_name' => 'Gallery'
        ),
        'menu_icon' => 'dashicons-format-gallery'
    ));
}

add_action('init', 'pilgrim_church_post_types');

