<?php
/**
 * Created by PhpStorm.
 * User: zzabk
 * Date: 11/15/2018
 * Time: 1:56 PM
 */


require get_theme_file_path('./includes/search-route.php');
require get_theme_file_path('./includes/full-calendar-route.php');



function pilgrim_church_files()
{
//    GOOGLE MAP
    wp_enqueue_script('googleMap', '//maps.googleapis.com/maps/api/js?key=AIzaSyDUjy9d3alg3hawhOb4UK3212nJiDPgCTY', NULL, '1.0', true);

//    JAVASCRIPT
    wp_enqueue_script('main-pilgrim-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);

//    GOOGLE FONTS
    wp_enqueue_style('custom-google-fonts1', '//fonts.googleapis.com/css?family=Anton');
    wp_enqueue_style('custom-google-fonts2', '//fonts.googleapis.com/css?family=Karla:400,700');
    wp_enqueue_style('custom-google-fonts3', '//fonts.googleapis.com/css?family=Noto+Serif+KR:400,600&subset=korean');

//    Font Awesome
    wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.1.0/css/all.css');

//    CSS styles
    wp_enqueue_style('pilgrim_main_styles', get_stylesheet_uri());

//    Embeded PHP DATA
    wp_localize_script('main-pilgrim-js', 'pilgrimChurchData', array(
        'root_url' => get_site_url(),
        'nonce' => wp_create_nonce('wp_rest'),
        'image_path' => get_template_directory_uri() . '/images/',

    ));
}
add_action('wp_enqueue_scripts', 'pilgrim_church_files');


//GOOGLE MAP KEY

function pilgrimMapKey($api)
{
    $api['key'] = 'AIzaSyD9hvEMx7Cek2U1PI55kpaasXb4VRQY7iw';
    return $api;
}
add_filter('acf/fields/google_map/api', 'pilgrimMapKey');

// PAGE BANNER
/**
 * @param null $args
 */
function pageBanner($args = NULL)
{
    if (!$args['title']) {
        $args['title'] = get_the_title();
    }
    if (!$args['subtitle']) {
        $args['subtitle'] = get_field('page_banner_subtitle');
    }
    if (!$args['photo']) {
        if (get_field('page_banner_background_image')) {
            $args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
        } else {
            $args['photo'] = get_theme_file_uri('/images/weArePilgrim2.jpg');
        }
    }
    ?>

    <div class="section-top__content section-top__img section-top__img-who-we-are" style="background-image: url(<?php echo $args['photo'] ?>);">
        <div class="section-top__box">
            <h2 class="font font__section-main font__anton mb-3">
                <?php echo $args['title'] ?> </h2>
            <p class="font font__section-sub fadeInUp font__serif font-italic">
                <?php echo $args['subtitle']; ?>
            </p>
        </div>

        <ul class="scrollDots">
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <?php

}


function pilgrim_features()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('pageBanner', 1500, 750, true);
    add_image_size('pastorPortrait', 400, 400, true);
    add_image_size('EventLandscape', 200, 200, true);
}

add_action('after_setup_theme', 'pilgrim_features');


function noSubsAdminBar()
{
        show_admin_bar(false);
}
add_action('wp_loaded', 'noSubsAdminBar');



function pilgrim_adjust_queries($query)
{
    if (!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()) {
        $today = date('Ymd');
        $query->set('meta_key', 'event_start');
        $query->set('orderby', 'meta_value');
        $query->set('order', 'DSC');
        $query->set('meta_query', array(
            array(
                'key' => 'event_start',
                'compare' => '>=',
                'value' => $today,
                'type' => 'DATETIME'
            )
        ));
    }
}
// globally pagination
add_action('pre_get_posts', 'pilgrim_adjust_queries');

?>